<?php
namespace app\admin\controller;
use app\admin\model\Conf as ConfModel;
class Conf extends Common {
  public function lst() {
    $conf = ConfModel::paginate(2);
    $this->assign('confres',$conf);
    return view();
  }


  public function add() {
    if (request()->isPost()) {
      $data = input('post.');
      $conf = new ConfModel();
      if ($data['value']) {
        $data['value'] = str_replace('，',',',$data['value']);
      }
      if ($conf->save($data)) {
        $this->success('添加配置成功','lst');
      } else {
        $this->error('添加配置失败');
      }
    }
    return view();
  }

  public function del() {
    if (ConfModel::destroy(input('id'))) {
      $this->success('删除配置成功','lst');
    } else {
      $this->error('删除配置失败');
    }
  }

  public function edit() {
    $conf = ConfModel::find(input('id'));
    $this->assign('confres',$conf);
    if (request()->isPost()) {
      $data = input('post.');
      if (ConfModel::update($data)) {
        $this->success('修改配置成功','lst');
      } else {
        $this->error('修改配置失败');
      }
    }
    return view();
  }

  public function conf() {
    if(request()->isPost()){
      $data = input('post.');
      if ($data) {
        foreach ($data as $key => $value) {
          ConfModel::where('enname',$key)->update(['value'=>$value]);
        }
        $this->success('修改配置项成功','conf');
      }
      return;
    }
    $confres = ConfModel::select();
    $this->assign('confres',$confres);
    return view();
  }


}
