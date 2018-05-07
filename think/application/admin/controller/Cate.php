<?php
namespace app\admin\controller;
use app\admin\model\Cate as CateModel;
use app\admin\model\Article as ArticleModel;
// use think\Db;
// use think\Common;
class Cate extends Common {

	protected $beforeActionList = [
        'delsoncate'  =>  ['only'=>'del'],
    ];

	public function lst() {
		$cate = new CateModel();
		if (request()->isPost()) {
			$sorts = input('post.');
			foreach ($sorts as $key => $value) {
				$cate->update(['id'=>$key,'sort'=>$value]);
			}
			$this->success('更新排序成功');
			return;
		}
		$category = $cate->cateTree();
		$this->assign('category',$category);
		return $this->fetch('lst');
	}

	public function add() {
		$cate = new CateModel();
		if (request()->isPost()) {
			$data = input('post.');
			$obj = $cate->addCate($data);
			if ($obj) {
				$this->success('添加栏目成功','lst');
			} else {
				$this->error('添加栏目失败');
			}
		}
		// $cate = new CateModel();
		$category = $cate->cateTree();
		$this->assign('category',$category);
		return $this->fetch('add');
	}

	public function del() {
		$id = input('id');
		$res = db('cate')->delete($id);
		if ($res) {
			$this->success('删除栏目成功');
		} else {
			$this->error('删除失败');
		}
	}

	public function delsoncate() {
		$cate = new CateModel();
		$cateid = input('id');
		$sonids = $cate->getchilrenid($cateid);
		$allcateid = $sonids;
		$allcateid[] = $cateid;
		$article = new ArticleModel;
		foreach ($allcateid as $key => $value) {
			$article->where(array('cateid'=>$value))->delete();
		}
		if ($sonids) {
			db('cate')->delete($sonids);
		}
	}

	public function edit() {
		$cate = new CateModel();
		$cates = db('cate')->find(input('id'));
		$category = $cate->cateTree();
		$this->assign(array(
			'cates'	   => $cates,
			'category' => $category,
		));
		if (request()->isPost()) {
			$save = $cate->save(input('post.'),['id'=>input('id')]);
			if ($save !== false) {
				$this->success('修改栏目成功','lst');
			} else {
				$this->error('修改栏目失败');
			}
		}
		return view();
	}

}
