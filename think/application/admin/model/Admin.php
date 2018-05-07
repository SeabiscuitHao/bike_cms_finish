<?php
namespace app\admin\model;
use think\Model;
class Admin extends Model {
	public function addAdmin($data) {
		if (empty($data) || !is_array($data)) {
			return false;
		}
		if ($this->save($data)) {
			return true;
		} else {
			return false;
		}
	}

	public function getAdminInfo() {
		$res = $this->select();
		return $res;
	}

	public function delAdminInfo($id) {
		if ($this->where('id',$id)->delete()) {
			return 1;
		} else {
			return 2;
		}
	}

	public function editInfoById($data,$admins) {
		if (empty($data) || empty($admins)) {
			echo "error: empty data";
		}
		//管理员姓名为空
		if (empty($data['username'])) {
			return 1;
		}
		if (empty($data['password'])) {
			$data['password'] = $admins['password'];
		} else {
			$data['password'] = md5($data['password']);
		}

		return $this->update(['id'=>$data['id'],'username'=>$data['username'],'password'=>$data['password']]);
	}

	public function login($data) {
		$admin = Admin::getByUsername($data['username']);
		if ($admin) {
			if ($admin['password'] == $data['password']) {
				session('username',$admin['username']);
				session('id',$admin['id']);
				//登陆成功
				return 1;
			} else {
				//密码不正确
				return 2;
			}
		} else {
			//用户不存在
			return 3;
		}
	}
}