<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:66:"C:\wamp64\www\tp5\public/../application/admin\view\field\edit.html";i:1544536639;s:59:"C:\wamp64\www\tp5\application\admin\view\common\header.html";i:1544513856;s:59:"C:\wamp64\www\tp5\application\admin\view\common\navbar.html";i:1544516500;s:60:"C:\wamp64\www\tp5\application\admin\view\common\sidebar.html";i:1544536199;s:60:"C:\wamp64\www\tp5\application\admin\view\common\setting.html";i:1544514317;s:59:"C:\wamp64\www\tp5\application\admin\view\common\footer.html";i:1544514356;s:55:"C:\wamp64\www\tp5\application\admin\view\common\js.html";i:1544528949;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<!-- 头部开始 -->

<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta charset="utf-8"/>
	<title>控制台</title>
	<meta name="keywords" content="关键词"/>
	<meta name="description" content="网站描述"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<link rel="stylesheet" href="/static/css/bootstrap.css"/>
	<link rel="stylesheet" href="/static/css/font-awesome.css"/>
	<link rel="stylesheet" href="/static/css/jquery-ui.css"/>
	<link rel="stylesheet" href="/static/css/ace-fonts.css"/>
	<link rel="stylesheet" href="/static/css/ace.css" class="ace-main-stylesheet" id="main-ace-style"/>
	<script src="/static/js/ace-extra.js"></script>
	<script src="/static/js/jquery.js"></script>
</head>
<!-- 头部结束 -->
<body class="no-skin">
	<!-- 导航开始 -->
	<div id="navbar" class="navbar navbar-default">
		<div class="navbar-container" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-header pull-left">
				<a href="index.html" class="navbar-brand">
					<small><i class="fa fa-home"></i>微光</small>
				</a>
			</div>
			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<li class="red">
						<a href="#" title="前台首页" target="_blank">
							<i class="ace-icon fa fa-home"></i>
						</a>
					</li>
					<li class="light-blue">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="/static/images/user.png" alt="admin" />
							<span class="user-info">
							<small>欢迎光临</small>admin</span><i class="ace-icon fa fa-caret-down"></i>
						</a>
						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="info.html"><i class="ace-icon fa fa-user"></i>个人资料</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#"><i class="ace-icon fa fa-power-off"></i>退出</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
</div>
	<!-- 导航结束 -->
	<div class="main-container" id="main-container">
		<!-- 侧边栏开始 -->
		<div id="sidebar" class="sidebar responsive">
			<div class="sidebar-shortcuts" id="sidebar-shortcuts">
				<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
					<button class="btn btn-success">
						<i class="ace-icon fa fa-signal"></i>
					</button>
					<button class="btn btn-info">
						<i class="ace-icon fa fa-pencil"></i>
					</button>
					<button class="btn btn-warning">
						<i class="ace-icon fa fa-users"></i>
					</button>
					<button class="btn btn-danger">
						<i class="ace-icon fa fa-cogs"></i>
					</button>
				</div>
				<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
					<span class="btn btn-success"></span>
					<span class="btn btn-info"></span>
					<span class="btn btn-warning"></span>
					<span class="btn btn-danger"></span>
				</div>
			</div>
			<ul class="nav nav-list">
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-cog"></i>
						<span class="menu-text">系统设置</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li>
							<a href="rule.html"><i class="menu-icon fa fa-caret-right"></i>权限管理</a>
							<b class="arrow"></b>
						</li>
						<li>
							<a href="rule.html"><i class="menu-icon fa fa-caret-right"></i>角色管理</a>
							<b class="arrow"></b>
						</li>
					</ul>              
				</li>
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-user"></i>
						<span class="menu-text">员工管理</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li>
							<a href="group.html"><i class="menu-icon fa fa-caret-right"></i>员工列表</a>
							<b class="arrow"></b>
						</li>
					
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-user"></i>
						<span class="menu-text">轮播图管理</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li>
							<a href="<?php echo url('banner/index'); ?>"><i class="menu-icon fa fa-caret-right"></i>轮播图展示</a>
							<b class="arrow"></b>
						</li>
						<li>
							<a href="<?php echo url('banner/add'); ?>"><i class="menu-icon fa fa-caret-right"></i>轮播图添加</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-user"></i>
						<span class="menu-text">背景图管理</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li>
							<a href="<?php echo url('background/index'); ?>"><i class="menu-icon fa fa-caret-right"></i>背景图展示</a>
							<b class="arrow"></b>
						</li>
						<li>
							<a href="<?php echo url('background/add'); ?>"><i class="menu-icon fa fa-caret-right"></i>背景图添加</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-user"></i>
						<span class="menu-text">导航管理</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li>
							<a href="group.html"><i class="menu-icon fa fa-caret-right"></i>导航列表</a>
							<b class="arrow"></b>
						</li>
					
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-user"></i>
						<span class="menu-text">文章管理</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li>
							<a href="group.html"><i class="menu-icon fa fa-caret-right"></i>文章展示</a>
							<b class="arrow"></b>
						</li>
						<li>
							<a href="#"><i class="menu-icon fa fa-caret-right"></i>文章添加</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-user"></i>
						<span class="menu-text">关于我们</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li>
							<a href="group.html"><i class="menu-icon fa fa-caret-right"></i>内容展示</a>
							<b class="arrow"></b>
						</li>
					
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-user"></i>
						<span class="menu-text">咨询大咖</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li>
							<a href="group.html"><i class="menu-icon fa fa-caret-right"></i>大咖展示</a>
							<b class="arrow"></b>
						</li>
						<li>
							<a href="#"><i class="menu-icon fa fa-caret-right"></i>内容添加</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-user"></i>
						<span class="menu-text">领域管理</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li>
							<a href="<?php echo url('field/index'); ?>"><i class="menu-icon fa fa-caret-right"></i>内容展示</a>
							<b class="arrow"></b>
						</li>
						<li>
							<a href="<?php echo url('field/add'); ?>"><i class="menu-icon fa fa-caret-right"></i>领域新增</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-user"></i>
						<span class="menu-text">区域管理</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li>
							<a href="group.html"><i class="menu-icon fa fa-caret-right"></i>区域展示</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-user"></i>
						<span class="menu-text">个人中心</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li>
							<a href="#"><i class="menu-icon fa fa-user"></i>个人资料</a>
							<b class="arrow"></b>
						</li>
						<li>
							<a href="#"><i class=""></i>退出</a>
							<b class="arrow"></b>
						</li>                    
					</ul>
				</li>
			</ul>
			<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
				<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left"
				data-icon2="ace-icon fa fa-angle-double-right"></i>
			</div>


		</div>
		<!-- 侧边栏结束 -->


		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="index.html">首页</a>
						</li>
						<li class="active">领域管理</li>
					</ul>
				</div>
				<div class="page-content">
					<div class="alert alert-block alert-success">
						<button type="button" class="close" data-dismiss="alert">
							<i class="ace-icon fa fa-times"></i>
						</button>
						欢迎使用微光后台管理系统。
					</div>

					<!-- 模板设置 -->
					<div class="ace-settings-container" id="ace-settings-container">
						<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
							<i class="ace-icon fa fa-cog bigger-130"></i>
						</div>
						<div class="ace-settings-box clearfix" id="ace-settings-box">
							<div class="pull-left width-50">
								<div class="ace-settings-item">
									<div class="pull-left">
										<select id="skin-colorpicker" class="hide">
											<option data-skin="no-skin" value="#438EB9">#438EB9</option>
											<option data-skin="skin-1" value="#222A2D">#222A2D</option>
											<option data-skin="skin-2" value="#C6487E">#C6487E</option>
											<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
										</select>
									</div>
									<span>&nbsp; 选择皮肤</span>
								</div>
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar"/>
									<label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
								</div>
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar"/>
									<label class="lbl" for="ace-settings-sidebar"> 固定侧边栏</label>
								</div>
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs"/>
									<label class="lbl" for="ace-settings-breadcrumbs"> 固定面包屑</label>
								</div>
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"/>
									<label class="lbl" for="ace-settings-rtl"> 切换至左边</label>
								</div>
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container"/>
									<label class="lbl" for="ace-settings-add-container">切换宽窄度</label>
								</div>
							</div>
							<div class="pull-left width-50">
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover"/>
									<label class="lbl" for="ace-settings-hover"> 子菜单收起</label>
								</div>
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"/>
									<label class="lbl" for="ace-settings-compact"> 侧边栏紧凑</label>
								</div>
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight"/>
									<label class="lbl" for="ace-settings-highlight"> 当前位置</label>
								</div>
							</div>
						</div>
					</div>

					<!-- 模板设置借书 -->
					


					<div class="row">
						<div class="col-xs-12">
							<form class="form-horizontal" action="<?php echo url('field/edit'); ?>" method="post">
								<input type="hidden" name='id' value="<?php echo $data['id']; ?>" />
								<div class="form-group">
									<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 领域名称 </label>
									<div class="col-sm-9">
										<input type="text" name="field" class="rcol-xs-10 col-sm-5" value="<?php echo $data['field']; ?>">
										<span class="help-inline col-xs-12 col-sm-7"></span>
									</div>
								</div>
								<div class="space-4"></div>
								
								<div class="col-md-offset-2 col-md-9">
									<button class="btn btn-info" type="submit"><i class="icon-ok bigger-110"></i>提交</button>&nbsp; &nbsp; &nbsp;
									<button class="btn" type="reset"><i class="icon-undo bigger-110"></i>重置</button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>


		<!-- 底部开始 -->
		<div class="footer">
			<div class="footer-inner">
				<div class="footer-content">
					<span class="bigger-120">
					<small>Copyright &copy; 2017 ujiuye All Rights Reserved.</small>
					</span>
				</div>
			</div>
		</div>
		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
		<!-- 底部结束 -->
	</div>

	<!-- 相关js -->
	<script src="/static/js/bootstrap.js"></script>
	<script src="/static/js/bootbox.js"></script>
	<script src="/static/js/ace/elements.scroller.js"></script>
	<script src="/static/js/ace/elements.colorpicker.js"></script>
	<script src="/static/js/ace/elements.aside.js"></script>
	<script src="/static/js/ace/ace.js"></script>
	<script src="/static/js/ace/ace.touch-drag.js"></script>
	<script src="/static/js/ace/ace.sidebar.js"></script>
	<script src="/static/js/ace/ace.sidebar-scroll-1.js"></script>
	<script src="/static/js/ace/ace.submenu-hover.js"></script>
	<script src="/static/js/ace/ace.widget-box.js"></script>
	<script src="/static/js/ace/ace.settings.js"></script>
	<script src="/static/js/ace/ace.settings-rtl.js"></script>
	<script src="/static/js/ace/ace.settings-skin.js"></script>
	<script src="/static/js/jquery-ui.js"></script>
	<script src="/static/js/layer/layer.js"></script>
	<script src="/static/js/wangEditor.min.js"></script>
	
</body>
</html>
