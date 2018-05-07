<?php
namespace app\admin\model;
use think\Model;
class Cate extends Model {
	public function addCate($data) {
		$obj = $this->save($data);
		if ($obj) {
			return true;
		} else {
			return false;
		}
	}

	public function cateTree() {
		$cateres = $this->order('sort desc')->select();
		return $this->sort($cateres);
	}

	public function sort($cateres,$pid=0,$level=0) {
		static $arr= array();
		// $cateres是一个三维数组
		foreach ($cateres as $key => $value) {
			if ($value['pid'] == $pid) {
				//level是表中并不存在的一个字段 表示该分类是几级分类
				$value['level'] = $level;
				//这个arr就是一个二维数组 存的是
				$arr[] = $value;
				$this->sort($cateres,$value['id'],$level+1);
			}
		}
		return $arr;
	}

	public function getchilrenid($cateid) {
		$cateres = $this->select();
		return $this->_getchilrenid($cateres,$cateid);
	}

	public function _getchilrenid($cateres,$cateid) {
		static $arr = array();
		foreach ($cateres as $key => $value) {
			if ($value['pid'] == $cateid) {
				$arr[] = $value['id'];
				return $this->_getchilrenid($cateres,$value['id']);
			}
		}
		return $arr;
	}

}