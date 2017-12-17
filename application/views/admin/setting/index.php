<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Materia - Admin Template">
	<meta name="keywords" content="materia, webapp, admin, dashboard, template, ui">
	<meta name="author" content="solutionportal">
	<!-- <base href="/"> -->

	<title>Materia - Admin Template</title>
	
	<!-- Icons -->
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>fonts/font-awesome/css/font-awesome.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/plugins/waves.css">
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/plugins/perfect-scrollbar.css">
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/plugins/select2.css">
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/plugins/bootstrap-colorpicker.css">
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/plugins/bootstrap-slider.css">
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/plugins/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/plugins/summernote.css">
	
	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/bootstrap.min.css">
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/main.min.css">

	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="scripts/ie/matchMedia.js"></script>  <![endif]--> 

	
</head>
<body id="app" class="app off-canvas">

	<?=$header;?>

	<!-- main-container -->
	<div class="main-container clearfix">
		<?=$aside;?>

		<!-- content-here -->
		<div class="content-container" id="content">
			<div class="page page-forms-elements">

				<ol class="breadcrumb breadcrumb-small">
					<li>首页</li>
					<li class="active"><a href="forms.elements.html">个人设置</a></li>
				</ol>

				<div class="page-wrap">
					<form role="form" class="form-horizontal" id="form" action=""  method="post" enctype="multipart/form-data"> <!-- form horizontal acts as a row -->
						<div class="row">
							<!-- col-left -->
							<div class="col-sm-12 col-md-12">

								<div class="panel panel-default panel-hovered panel-stacked mb30">
									<div class="panel-heading">个人设置</div>
									<form action="">
									<div class="panel-body">
											<!-- normal control -->
											<div class="form-group">
												<label class="col-md-2 control-label">用户名</label>
												<div class="col-md-4">
													<input type="text" name="username" class="form-control" value="<?=$this->session->userdata('adm_name')?>">
												</div>
											</div>

											<!-- with hint -->
											<div class="form-group">
												<label class="col-md-2 control-label">新密码</label>
												<div class="col-md-4">
													<input type="text" name="new_pwd" class="form-control" placeholder="如需修改，请输入新密码" value="">
													<!-- <p class="text-danger text-right xsmall">*</p> -->
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">确认新密码</label>
												<div class="col-md-4">
													<input type="text" name="re_pwd" class="form-control" placeholder="确认新密码" value="">
													<!-- <p class="text-danger text-right xsmall">*</p> -->
												</div>
												<p class="text-danger text-left"></p>
											</div>

											<!-- native select -->
											<div class="form-group">
												<label class="col-md-2 control-label">角色</label>
												<div class="col-md-4">
													<select class="form-control" name="is_super">
														<option value="0" <?=$info['is_super'] == 0 ? 'selected="selected"':'';?>>普通管理员</option>
														<option value="1" <?=$info['is_super'] == 1 ? 'selected="selected"':'';?>>超级管理员</option>
													</select>
												</div>
											</div>

											<div class="clearfix right">
												<button class="btn btn-default btn-lg waves-effect">返回</button>
												<button class="btn btn-primary btn-lg mr5" type="submit">更新</button>
											</div>
									</div>
									</form>

								</div>
							</div> <!-- #end col-left -->

						</div>
	
					</form>
				</div> <!-- #end page-wrap -->
			</div> <!-- #end page -->
		</div> <!-- #end content-container -->

	</div> <!-- #end main-container -->


	<!-- theme settings -->
	<div class="site-settings clearfix hidden-xs">
		<div class="settings clearfix">
			<div class="trigger ion ion-settings left"></div>
			<div class="wrapper left">
				<ul class="list-unstyled other-settings">
					<li class="clearfix mb10">
						<div class="left small">Nav Horizontal</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox" id="navHorizontal"> 
								<span>&nbsp;</span> 
							</label>
						</div>
						
						
					</li>
					<li class="clearfix mb10">
						<div class="left small">Fixed Header</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox"  id="fixedHeader"> 
								<span>&nbsp;</span> 
							</label>
						</div>
					</li>
					<li class="clearfix mb10">
						<div class="left small">Nav Full</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox"  id="navFull"> 
								<span>&nbsp;</span> 
							</label>
						</div>
					</li>
				</ul>
				<hr/>
				<ul class="themes list-unstyled" id="themeColor">
					<li data-theme="theme-zero" class="active"></li>
					<li data-theme="theme-one"></li>
					<li data-theme="theme-two"></li>
					<li data-theme="theme-three"></li>
					<li data-theme="theme-four"></li>
					<li data-theme="theme-five"></li>
					<li data-theme="theme-six"></li>
					<li data-theme="theme-seven"></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- #end theme settings -->
	<!-- Vendors -->
	<script src="<?=$this->config->item('adm_resurl');?>scripts/vendors.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/screenfull.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/perfect-scrollbar.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/waves.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/select2.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/bootstrap-colorpicker.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/bootstrap-slider.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/summernote.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/bootstrap-datepicker.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/app.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/form-elements.init.js"></script>
	<script>
	$(function(){
		$("#form").submit(function(e){
			var new_pwd = $("input[name='new_pwd']").val();
			var	re_pwd = $("input[name='re_pwd']").val();
		
			if(new_pwd != re_pwd)
				add_errormsg($("input[name='re_pwd']"),'两次输入密码不一致！');
			return false;

		})

		$("input[name='re_pwd']").blur(function(){
			var new_pwd = $("input[name='new_pwd']").val();
			var	re_pwd = $("input[name='re_pwd']").val();
			if(new_pwd != re_pwd)
				add_errormsg($("input[name='re_pwd']"),'两次输入密码不一致！');
			else
				clean_errormsg($("input[name='re_pwd']"));
		})
	})

	function add_errormsg(this_,msg){
		$(this_).parent().next('.text-danger').text(msg);
		$(this_).parent().addClass('has-error');
	}

	function clean_errormsg(this_){
		$(this_).parent().next('.text-danger').text('');
		$(this_).parent().removeClass('has-error');
	}
	
	</script>
</body>
</html>