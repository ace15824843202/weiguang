<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:70:"C:\wamp64\www\tp5-1\public/../application/admin\view\bigshot\edit.html";i:1548685567;s:61:"C:\wamp64\www\tp5-1\application\admin\view\common\header.html";i:1544513856;s:61:"C:\wamp64\www\tp5-1\application\admin\view\common\navbar.html";i:1544857650;s:62:"C:\wamp64\www\tp5-1\application\admin\view\common\sidebar.html";i:1544757192;s:62:"C:\wamp64\www\tp5-1\application\admin\view\common\setting.html";i:1544514316;s:61:"C:\wamp64\www\tp5-1\application\admin\view\common\footer.html";i:1544514356;s:57:"C:\wamp64\www\tp5-1\application\admin\view\common\js.html";i:1544528948;}*/ ?>
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
							<img class="nav-user-photo" src="/uploads/<?php echo \think\Session::get('user_info.user_img'); ?>" alt="admin" />
							<span class="user-info">
							<small>欢迎光临</small><?php echo \think\Session::get('user_info.real_name'); ?></span><i class="ace-icon fa fa-caret-down"></i>
						</a>
						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="<?php echo url('user/info'); ?>"><i class="ace-icon fa fa-user"></i>个人资料</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="<?php echo url('login/loginout'); ?>"><i class="ace-icon fa fa-power-off"></i>退出</a>
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
				<?php foreach($menu as $k=>$v): ?>
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-<?php echo $v['rule_icon']; ?>"></i>
						<span class="menu-text"><?php echo $v['rule_name']; ?></span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<?php foreach($v['child'] as $kk=>$vv): ?>
						<li>
							<a href="<?php echo url($vv['rule_address']); ?>"><i class="menu-icon fa fa-caret-right"></i><?php echo $vv['rule_name']; ?></a>
							<b class="arrow"></b>
						</li>
						<?php endforeach; ?>
						
					</ul>              
				</li>
				<?php endforeach; ?>
			
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
							<a href="<?php echo url('index/index'); ?>">首页</a>
						</li>
						<li class="active">大咖管理</li>
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
							<form class="form-horizontal" action="<?php echo url('bigshot/edit'); ?>" method="post" enctype="multipart/form-data">

								<input type="hidden" required name="id" class="rcol-xs-10 col-sm-5" value="<?php echo $info['id']; ?>">

								<div class="form-group">
									<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 姓名:</label>
									<div class="col-sm-9">
										<input type="text" name="name" class="rcol-xs-10 col-sm-5" value="<?php echo $info['name']; ?>">
										<span class="help-inline col-xs-12 col-sm-7"></span>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="form-group">
									<label class="col-sm-1 control-label no-padding-right" for="form-field-1">领域选择:</label>
									<div class="col-sm-9">
										<div class="col-sm-10">
											<div class="row">
												<div class="widget-box">
													<div class="widget-header">
														<h4 class="widget-title">
															<label>
																<input name="" class="ace ace-checkbox-2 father" type="checkbox" value="" <?php echo $status=="true"?"checked":""; ?>/>
																<span class="lbl"> 擅长领域</span>
															</label>
														</h4>
														<div class="widget-toolbar">
															<a href="#" data-action="collapse">
																<i class="ace-icon fa fa-chevron-up"></i>
															</a>
														</div>
													</div>
													<div class="widget-body">
														<div class="widget-main row">
															<?php foreach($allrule as $key=>$val): ?>
																<label class="col-xs-2" style="width:200px;">
																	<input name="field[]" class="ace ace-checkbox-2 children"  type="checkbox" value="<?php echo $val['id']; ?>"  <?php echo $val['checked']=="true"?"checked":""; ?>  />
																	<span class="lbl"> <?php echo $val['field']; ?></span>
																</label>
															<?php endforeach; ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="form-group">
									<label class="col-sm-1 control-label no-padding-right" for="form-field-10"> 从业年限:</label>
									<div class="col-sm-9">
										<select class="rcol-xs-10 col-sm-5" name="expire">
										<?php $__FOR_START_21892__=0;$__FOR_END_21892__=30;for($i=$__FOR_START_21892__;$i < $__FOR_END_21892__;$i+=1){ if($i==$info['expire']): ?>
													<option value="<?php echo $i; ?>" selected><?php echo $i; ?>年</option>
												<?php else: ?>
													<option value="<?php echo $i; ?>"><?php echo $i; ?>年</option>
												<?php endif; } ?>
										</select>
										<span class="help-inline col-xs-12 col-sm-7">
											<span class="middle"></span>
										</span>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="form-group">
									<label class="col-sm-1 control-label no-padding-right" for="form-field-10"> 所属区域:</label>
									<div class="col-sm-9">
										<select class="rcol-xs-10 col-sm-5" name="area">
										<?php foreach($area as $v): if($v['id']==$info['area']): ?>
													<option value="<?php echo $v['id']; ?>"  selected><?php echo $v['area']; ?></option>
												<?php else: ?>
													<option value="<?php echo $v['id']; ?>" ><?php echo $v['area']; ?></option>
												<?php endif; endforeach; ?>
										</select>
										<span class="help-inline col-xs-12 col-sm-7">
											<span class="middle"></span>
										</span>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="form-group">
									<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 资质：</label>
									<div class="col-sm-9">
										<textarea class="rcol-xs-10 col-sm-5" rows="2" name='zizhi'><?php echo $info['zizhi']; ?></textarea>
										<span class="help-inline col-xs-12 col-sm-7">多个资质用逗号隔开</span>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="form-group">
									<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 个人描述: </label>
									<div class="col-sm-9">
										<textarea class="rcol-xs-10 col-sm-5" rows="2" name='desc'><?php echo $info['desc']; ?></textarea>
										<span class="help-inline col-xs-12 col-sm-7">如不需要,留空即可</span>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="form-group">
									<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 擅长方向:</label>
									<div class="col-sm-9">
										<textarea class="rcol-xs-10 col-sm-5" rows="2" name='goodat'><?php echo $info['goodat']; ?></textarea>
										<span class="help-inline col-xs-12 col-sm-7">如不需要,留空即可</span>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="form-group">
									<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 个人成长: </label>
									<div class="col-sm-9">
										<textarea class="rcol-xs-10 col-sm-5" rows="2" name='group'><?php echo $info['group']; ?></textarea>
										<span class="help-inline col-xs-12 col-sm-7">如不需要,留空即可</span>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="form-group">
									<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 工作语言:</label>
									<div class="col-sm-9">
										<input type="text" name="language" class="rcol-xs-10 col-sm-5" value="<?php echo $info['language']; ?>">
										<span class="help-inline col-xs-12 col-sm-7">如不需要,留空即可</span>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="form-group">
									<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 咨询费用:</label>
									<div class="col-sm-9">
										<input type="text" name="cost" class="rcol-xs-10 col-sm-5" value="<?php echo $info['cost']; ?>">
										<span class="help-inline col-xs-12 col-sm-7">如不需要,留空即可</span>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="form-group">
									<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 咨询频率: </label>
									<div class="col-sm-9">
										<textarea class="rcol-xs-10 col-sm-5" rows="2" name='ctat'><?php echo $info['ctat']; ?></textarea>
										<span class="help-inline col-xs-12 col-sm-7">如不需要,留空即可</span>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="form-group">
									<label class="col-sm-1 control-label no-padding-right" for="form-field-1">照片及工作流程:</label>
									<div class="col-sm-9">
										
										<div id="editor">
											<img src="<?php echo $info['pic']; ?>" alt="">
											<?php echo $info['workflow']; ?>
										</div>

										
										<input id="text1" type="hidden" required name="content" value='<img src="<?php echo $info['pic']; ?>" alt=""> <?php echo $info['workflow']; ?>'>
										
										<span class="help-inline col-xs-12 col-sm-7">没有头像,或使用默认！</span>
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
<script type="text/javascript">
									var E = window.wangEditor
									var editor = new E('#editor')
									var $text1 = $('#text1')
									

									
									editor.customConfig.uploadImgServer = "<?php echo url('banner/upload'); ?>" 
									 
									  // 隐藏“网络图片”tab
    								editor.customConfig.showLinkImg = false
									
									//debug模式开启    
						            editor.customConfig.debug = true


						            // 将图片大小限制为 5M
						            editor.customConfig.uploadImgMaxSize = 5 * 1024 * 1024

						            // 限制一次最多上传 1 张图片
						            editor.customConfig.uploadImgMaxLength = 5

						            //// 关闭粘贴内容中的样式
									editor.customConfig.pasteFilterStyle = false
									// 忽略粘贴内容中的图片
									editor.customConfig.pasteIgnoreImg = true

									editor.customConfig.onchange = function (html) {
								            // 监控变化，同步更新到 textarea
								            $text1.val(html)
								        }

						           editor.customConfig.uploadFileName = 'myfiles[]'

						            //onchange  
						            editor.customConfig.onchange = function (html) {
						                // html 即变化之后的内容
						                console.log(html)
						                $text1.val(editor.txt.html())
						                //获取字数 -- 不知道为什么 前后空格不能清除 
						                var edi_art_text=editor.txt.text();
						                edi_art_text=edi_art_text.replace(/\s/g,'');
						                edi_art_text=$.trim(edi_art_text);
						                var edi_count=edi_art_text.length;
						                $('#edi_count').text(edi_count);
						                
						            }
							            //自定义上传图片事件
										editor.customConfig.uploadImgHooks = {
											before: function(xhr, editor, files) {

											},
											success: function(xhr, editor, result) {
												// console.log(result)
												// 初始化 textarea 的值
											
											layer.alert("上传成功",{icon:1});
											},
											fail: function(xhr, editor, result) {
												layer.alert("上传失败:"+result,{icon:2});
											},
											error: function(xhr, editor) {
												layer.alert("上传出错",{icon:2});
											},
											timeout: function(xhr, editor) {
												layer.alert("上传错误:超时",{icon:0});
											}
										}
									editor.customConfig.uploadImgTimeout = 5000

									
			            			editor.create()

			            			



								

								</script>
<script type="text/javascript">

	// 当父级全选中，子集也全选中
	$('.father').click(function(){
		$(this).parents('.widget-box').find('.widget-body .children').prop("checked",$(this).prop("checked"))
	})
	// 当子集勾选的数大于0，父级选中，等于0时父级取消选中
	$('.children').click(function(){
		var len=$(this).parents('.widget-main').find('.children:checked').length;
		if(len>0){

			$(this).parents(".widget-box").find(".widget-header .father").prop("checked",true);


		}else{


		$(this).parents(".widget-box").find(".widget-header .father").prop("checked",false);




		}
	})

	
</script>
