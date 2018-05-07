<?php
namespace app\admin\controller;
use app\admin\model\Admin as AdminModel;
use think\Db;
// use think\Common;
class Admin extends Common {

	public function lst() {
		// $data = db('user')->select();
		$admin = new AdminModel();
		$res = $admin->getAdminInfo();
		$this->assign('res',$res);
		return $this->fetch('lst');
	}

	public function add() {
		if (request()->isPost()) {
			$admin = new AdminModel();
			$data = input('post.');
			$obj = $admin->addAdmin($data);
			if ($obj) {
				$this->success('添加管理员成功','lst');
			} else {
				$this->error('添加管理员失败');
			}
		}
		return $this->fetch('add');
	}

	public function del() {
		$id = input('id');
		$admin = new AdminModel();
		$res = $admin->delAdminInfo($id);
		if ($res == 1) {
			$this->success('删除管理员成功','lst');
		} else {
			$this->error('删除管理员失败');
		}
	}
	
	public function edit() {
		$id = input('id');
		$admins = db('admin')->find($id);
		$this->assign('admins',$admins);
		if (request()->isPost()) {
			$data = input('post.');
			$admin = new AdminModel();
			$savenum = $admin->editInfoById($data,$admins);
			if ($savenum == '1') {
				$this->error('姓名不能为空');
			}
			if ($savenum !== false) {
				$this->success('修改管理员信息成功','lst');
			} else {
				$this->error('修改管理员信息失败');
			}
		}
		return $this->fetch('edit');
	}


	public function index() {
		
		return $this->fetch('index');
	}
}