<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin as AdminModel;
class Login extends Controller {
	public function login() {
		$data = input('post.');
		$admin = new AdminModel();
		if (request()->isPost()) {
			$num = $admin->login($data);
			if ($num == '1') {
				$this->success('登陆成功','admin/index');
			} elseif ($num == '2') {
				$this->error('密码不正确');
			} elseif ($num == '3') {
				$this->error('用户不存在');
			}
		}
		return $this->fetch('login');
	}

	public function logout() {
		session(null);
		return $this->success('退出账号成功','login/login');
	}
}