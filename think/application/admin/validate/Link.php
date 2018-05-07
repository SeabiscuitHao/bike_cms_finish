<?php
namespace app\admin\validate;
use think\Validate;
class Link extends Validate {
    protected $rule = [
      'title' => 'require|max:25|unique',
      'url'   => 'require',
      'desc'  => 'require',
    ];

    protected $message = [
      'title.require' => '链接标题不能为空',
      'title.max'     => '链接标题长度不能超过25',
      'title.unique'  => '链接唯一不能重复',
      'url.require'   => '链接地址不能为空',
      'desc.require'  => '链接描述不能为空',
    ];
}
