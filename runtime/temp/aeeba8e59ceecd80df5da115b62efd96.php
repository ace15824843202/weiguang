<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"C:\wamp64\www\tp5-1\tp5-1\public/../application/admin\view\.\login.html";i:1544860156;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta charset="utf-8"/>
	<title>登录页面</title>
	<meta name="keywords" content="关键词"/>
	<meta name="description" content="网站描述"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<link rel="stylesheet" href="/tp5-1/tp5-1/public/static/css/bootstrap.css"/>
	<link rel="stylesheet" href="/tp5-1/tp5-1/public/static/css/font-awesome.css"/>
	<link rel="stylesheet" href="/tp5-1/tp5-1/public/static/css/jquery-ui.css"/>
	<link rel="stylesheet" href="/tp5-1/tp5-1/public/static/css/ace-fonts.css"/>
	<link rel="stylesheet" href="/tp5-1/tp5-1/public/static/css/ace.css" class="ace-main-stylesheet" id="main-ace-style"/>
	<script src="/tp5-1/tp5-1/public/static/js/jquery.js"></script>
</head>
<body class="login-layout">
<div class="main-container login-main-container">
	<div class="main-content">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="login-container">
					<div class="space-6"></div>
					<div class="position-relative">
						<div id="login-box" class="login-box visible widget-box no-border">
							<div class="widget-body">
								<div class="widget-main">
									<h4 class="header blue lighter bigger">
										<i class="ace-icon fa fa-coffee green"></i>
										<b>后台登录</b>
									</h4>
									<div class="space-6"></div>
									<form action="<?php echo url('login/login'); ?>" method="post">
										<label class="block clearfix">
											<span class="block input-icon input-icon-right">
												<input type="text" class="form-control" name="user_name" placeholder="用户名" value='<?php echo \think\Session::get('user_info.rmb')==1?\think\Session::get('user_info.user_name'):""; ?>' required/>
					
												<i class="ace-icon fa fa-user"></i>
											</span>
										</label>
										<label class="block clearfix">
											<span class="block input-icon input-icon-right">
												<input type="password" class="form-control" name="user_pwd" placeholder="密码" value='<?php echo \think\Session::get('user_info.rmb')==1?\think\Session::get('user_info.user_pwd'):""; ?>' required/>
												<i class="ace-icon fa fa-lock"></i>
											</span>
										</label>
										<div class="space"></div>
										<label class="block clearfix">
											<span class="block input-icon ">
												<span class="inline">
													<input type="text" class="form-control" name="code" placeholder="验证码" id="code" required />
												</span>
												<img style="cursor:pointer;" src="<?php echo url('login/code'); ?>" onclick="this.src='<?php echo url('login/code'); ?>?id='+Math.random();" width="100" height="30" title="看不清楚？点击刷新" />
											</span>
										</label>
										<div class="space"></div>
										<div class="clearfix">
											<label class="inline">
												<input type="checkbox" class="ace" value="1" name="remember" <?php echo \think\Session::get('user_info.rmb')==1?'checked':''; ?> />
												<span class="lbl"> 记住我</span>
											</label>
											<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
												<i class="ace-icon fa fa-key"></i>
												<span class="bigger-110">登录</span>
											</button>
										</div>
										<div class="space-4"></div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="navbar-fixed-top align-right">
						<br/>&nbsp;
						<a id="btn-login-dark" href="#">Dark</a>&nbsp;
						<span class="blue">/</span>&nbsp;
						<a id="btn-login-blur" href="#">Blur</a>&nbsp;
						<span class="blue">/</span>&nbsp;
						<a id="btn-login-light" href="#">Light</a>&nbsp; &nbsp; &nbsp;
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function ($) {
		$('#btn-login-dark').on('click', function (e) {
			$('body').attr('class', 'login-layout');
			e.preventDefault();
		});
		$('#btn-login-light').on('click', function (e) {
			$('body').attr('class', 'login-layout light-login');
			e.preventDefault();
		});
		$('#btn-login-blur').on('click', function (e) {
			$('body').attr('class', 'login-layout blur-login');
			e.preventDefault();
		});
	});
</script>
</body>
</html>