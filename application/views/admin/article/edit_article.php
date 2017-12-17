<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Materia - Admin Template">
	<meta name="keywords" content="materia, webapp, admin, dashboard, template, ui">
	<meta name="author" content="solutionportal">
	<!-- <base href="/"> -->

	<title>编辑文章</title>
	
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
					<li>文章管理</li>
					<li class="active"><a href="forms.elements.html">添加</a></li>
				</ol>

				<div class="page-wrap">
					<form role="form" class="form-horizontal" id="form" action="#"  method="post" enctype="multipart/form-data"> <!-- form horizontal acts as a row -->
						<div class="row">
							<!-- col-left -->
							<div class="col-sm-12 col-md-12">
								<div class="panel panel-default panel-hovered panel-stacked mb30">
									<div class="panel-heading">添加文章</div>
									<div class="panel-body">
											<!-- normal control -->
											<div class="form-group">
												<label class="col-md-3 control-label">文章标题</label>
												<div class="col-md-4">
													<input type="text" name="title" value="<?=$info['title'];?>" class="form-control">
												</div>
											</div>

											<!-- with hint -->
											<div class="form-group">
												<label class="col-md-3 control-label">阅读量</label>
												<div class="col-md-4">
													<input type="text" name="PV" class="form-control" placeholder="" value="<?=$info['pv'];?>">
													<!-- <p class="text-danger text-right xsmall">*</p> -->
												</div>
											</div>

											<!-- native select -->
											<div class="form-group">
												<label class="col-md-3 control-label">发布类目</label>
												<div class="col-md-4">
													<select class="form-control" name="type">
														<?foreach ($articleType_li as $key => $value):?> 
															<option value="<?=$value['id'];?>" <?=$info['type'] == $value['id']?'select="selected"':'';?>><?=$value['type_name'];?></option>
														<?endforeach;?>
													</select>
												</div>
											</div>

											<!-- textarea control -->
											<div class="form-group">
												<label class="col-md-3 control-label">简介</label>
												<div class="col-md-4">
													<textarea rows="5" name="intro" class="form-control resize-v"><?=$info['intro'];?></textarea>
												</div>
											</div>
											<?if($info['img']):?>
											<div class="form-group">
												<label class="col-md-3 control-label">图片</label>
												<div class="col-md-4">
													<div class="image-1 attachment">
														<img src="<?=site_url().'uploads/'.date('Ymd',$info['create_time']).'/'.$info['img'];?>">
														<div class="text"><i class="ion ion-paperclip"></i>&nbsp; <?=$info['img']?></div>
													</div>
												</div>
											</div>
											<?endif;?>
											<div class="form-group">
												<label class="col-md-3 control-label">图片</label>
												<div class="col-md-4">
													<input type="file" name="img" class="form-control">
													<!-- <p class="text-danger text-right xsmall">*</p> -->
												</div>
											</div>
									</div>
								</div>
							</div> <!-- #end col-left -->
						</div>
	
						<div class="row">
							<!-- text editor -->
							<div class="col-md-12">
								<div class="panel panel-default panel-hovered panel-stacked mb30">
									<div class="panel-heading">文章内容</div>
									<div class="panel-body">
										<div id="textEditorDemo"><?=$info['content'];?></div>
									</div>
									<textarea style="display:none;"  name="article_text" id="article_text" ></textarea>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="clearfix right">
									<button class="btn btn-default btn-lg waves-effect">返回</button>
									<button class="btn btn-primary btn-lg mr5" type="submit">提交</button>
								</div>
							</div>
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
			var textarea = $(".note-editable").html();
			$("#article_text").html(textarea);
		})

	})

	</script>
</body>
</html>