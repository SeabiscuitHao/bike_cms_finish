<?php
namespace app\admin\controller;
use app\admin\model\Link as LinkModel;
use app\admin\model\Article as ArticleModel;
// use think\Db;
// use think\Common;
class Link extends Common {

	public function lst() {

		if (request()->isPost()) {
			$sorts = input('post.');
			foreach ($sorts as $key => $value) {
				$cate->update(['id'=>$key,'sort'=>$value]);
			}
			$this->success('更新排序成功');
			return;
		}
    $link = new LinkModel();
    $res = LinkModel::paginate(2);
    $this->assign('links',$res);
    return view();
	}

  public function add() {
    if (request()->isPost()) {
      $data = input('post.');
      // $validate = \think\Loader::validate('Link');
      // if (!$validate->check($data)) {
      //   $this->error($validate->getError());
      // }
      $link = new LinkModel();
      if ($link->save($data)) {
        $this->success('添加链接成功','lst');
      } else {
        $this->error('添加链接失败');
      }
    }
    return view();
  }
  public function edit() {
    $link = new LinkModel();
    $res = $link->find(input('id'));
    $this->assign('res',$res);
    if (request()->isPost()) {
      $data = input('post.');
      $save = $link->update($data);
      if ($save) {
        $this->success('修改链接成功','lst');
      } else {
        $this->error('修改链接失败');
      }
    }
    return view();

  }

  public function del() {
    $del = LinkModel::destroy(input('id'));
    if ($del) {
      $this->success('删除链接成功','lst');
    } else {
      $this->error('删除链接失败');
    }
  }

}
