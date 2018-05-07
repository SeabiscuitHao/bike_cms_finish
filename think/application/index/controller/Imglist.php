<?php
namespace app\index\controller;
use think\Controller;
class Imglist extends Controller {
	public function Imglist() {
		return $this->fetch('Imglist');
	}
}