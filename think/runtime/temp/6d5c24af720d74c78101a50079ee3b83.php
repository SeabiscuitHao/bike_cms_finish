<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"F:\www\2018\practice_blog\think\public/../application/admin\view\conf\lst.html";i:1525263051;s:83:"F:\www\2018\practice_blog\think\public/../application/admin\view\common\header.html";i:1524052063;s:81:"F:\www\2018\practice_blog\think\public/../application/admin\view\common\left.html";i:1525263740;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>BikeCms</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__PUBLIC__/style/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/style/font-awesome.css" rel="stylesheet">
    <link href="__PUBLIC__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__PUBLIC__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/style/demo.css" rel="stylesheet">
    <link href="__PUBLIC__/style/typicons.css" rel="stylesheet">
    <link href="__PUBLIC__/style/animate.css" rel="stylesheet">

</head>
<body>
	<!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="__PUBLIC__/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__PUBLIC__/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('login/logout'); ?>">
                                            退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',array('id'=>\think\Request::instance()->session('id'))); ?>">
                                            修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

	<!-- /头部 -->

	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">管理员</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">栏目</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('cate/lst'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文章</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">友情链接</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('link/lst'); ?>">
                                    <span class="menu-text">
                                        链接列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('conf/conf'); ?>">
                                    <span class="menu-text">
                                        配置项                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('conf/lst'); ?>">
                                    <span class="menu-text">
                                        配置列表                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>



                </ul>
                <!-- /Sidebar Menu -->
            </div>

            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
	                                        <li class="active">配置管理</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

<button type="button" tooltip="添加配置" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('conf/add'); ?>'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <form action="" method="post">
                        <table class="table table-bordered table-hover">
                            <thead class="">
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">中文名称</th>
                                    <th class="text-center">英文名称</th>
                                    <th class="text-center">配置类型</th>
                                    <th class="text-center">值</th>
                                    <th class="text-center">操作</th>
                                </tr>

                            </thead>
                            <tbody>
															<?php if(is_array($confres) || $confres instanceof \think\Collection || $confres instanceof \think\Paginator): $i = 0; $__LIST__ = $confres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td align="center" width="10%"><?php echo $vo['id']; ?></td>
                                    <td align="center"><?php echo $vo['cnname']; ?></td>
                                    <td align="center"><?php echo $vo['enname']; ?></td>
                                    <td align="center">
																			<?php if($vo['type'] == 1): ?>
																			单行文本
																			<?php elseif($vo['type'] == 2): ?>
																			多行文本
																			<?php elseif($vo['type'] == 3): ?>
																			单选按钮
																			<?php elseif($vo['type'] == 4): ?>
																			多选按钮
																			<?php elseif($vo['type'] == 5): ?>
																			下拉菜单
																			<?php endif; ?>
																		</td>
                                    <td align="center"><?php echo $vo['value']; ?></td>
                                    <td align="center" width="20%">
                                        <a href="<?php echo url('conf/edit',array('id'=>$vo['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                            <i class="fa fa-edit"></i> 编辑
                                        </a>
                                        <a href="<?php echo url('conf/del',array('id'=>$vo['id'])); ?>" onClick="warning('确实要删除吗')" class="btn btn-danger btn-sm shiny">
                                            <i class="fa fa-trash-o"></i> 删除
                                        </a>
                                    </td>
                                </tr>
															<?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                        <div>
                            <!-- <input type="submit" class="btn btn-primary btn-sm shiny" name="" value="排序" style="margin-left: 224px;margin-top: 10px" > -->
                        </div>
                    </form>
                </div>
                <div style="margin-left:1400px;margin-top:20px;">
									<?php echo $confres->render(); ?>
	              </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>
	</div>

	    <!--Basic Scripts-->
    <script src="__PUBLIC__/style/jquery_002.js"></script>
    <script src="__PUBLIC__/style/bootstrap.js"></script>
    <script src="__PUBLIC__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__PUBLIC__/style/beyond.js"></script>



</body></html>
