<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Cate as CateModel;
use app\admin\model\Article as ArticleModel;
class Article extends Controller {
  public function lst() {
    // $cate = new CateModel();
    // $category  = $cate->cateTree();
    // $this->assign('category',$category);
    $artres = db('article') ->field('a.*,b.catename') -> alias('a') -> join('tb_cate b','a.cateid=b.id')->paginate(5);;
    $this->assign('artres',$artres);
    return view();
  }
  public function add() {
    if (request()->isPost()) {
      $data = input('post.');
      $data['createtime'] = date('Y-m-d,H:i:s');
      $article = new ArticleModel();
      if ($article->save($data)) {
        $this->success('添加文章成功','lst');
      } else {
        $this->error('添加文章失败');
      }
      return;
    }
    $cate = new CateModel();
    $category  = $cate->cateTree();
    $this->assign('category',$category);
    return view();
  }
  public function edit() {
    $article = new ArticleModel();
    $artres = $article->find(input('id'));
    $cate = new CateModel();
    $category  = $cate->cateTree();
    $this->assign(array(
      'category' => $category,
      'artres'   => $artres,
    ));
    if (request()->isPost()) {
      $data = input('post.');
      if (input('thumb') == '') {
        $data['thumb'] = $artres['thumb'];
      }
      $res = $article->update($data);
      if ($res) {
        $this->success('修改文章成功','lst');
      } else {
        $this->error('修改文章失败');
      }
    }
    return view();
  }

  public function del() {
    if (ArticleModel::destroy(input('id'))) {
      $this->success('删除文章成功','lst');
    } else {
      $this->error('删除文章失败');
    }
  }


}
