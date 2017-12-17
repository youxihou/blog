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
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/plugins/c3.css">
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/plugins/perfect-scrollbar.css">
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/plugins/waves.css">
	
	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/bootstrap.min.css">
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/main.min.css">

	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="scripts/ie/matchMedia.js"></script>  <![endif]--> 

	
</head>
<style>
	a,a:hover{ text-decoration:none; color:#333}
</style>
<body id="app" class="app off-canvas">

	<?=$header?>


	<!-- main-container -->
	<div class="main-container clearfix">
		<?=$aside?>

		<!-- content-here -->
		<div class="content-container" id="content">

			<div class="page page-charts-c3" ng-controller="c3ChartDemoCtrl">
				<div class=" page-dashboard mt10" style="margin-top:-5px">
					<div class="page-wrap">
						<div class="row">
							<!-- dashboard header -->
							<div class="col-md-12">
								<div class="dash-head clearfix mt15 mb20">
									<div class="left">
										<h4 class="mb5 text-light">欢迎来到程序猴管理后台</h4>
										<p class="small"><strong>敌军还有</strong> 30秒到达</p>
									</div>
									<div class="right mt10">
										<span class="sparkline" data-barcolor="#4CAF50" data-type="bar"><canvas style="display: inline-block; width: 64px; height: 16px; vertical-align: top;" width="64" height="16"></canvas></span>
										<h5 class="text-bold mb0 mt5">$1,33,404</h5>
									</div>
								</div>
							</div>
						</div>
						<!-- row -->
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="panel panel-default mb20 mini-box panel-hovered">
									<div class="panel-body">
										<div class="clearfix">
											<a href="<?=$this->adm_url.'visit/tables'?>">
											<div class="info left">
												<h4 class="mt0 text-primary text-bold">网站流量</h4>
												<h5 class="text-light mb0">查看详细</h5>
											</div>
											</a>
											<div class="right ion ion-ios-pulse icon"></div>
										</div>
									</div>
									<div class="panel-footer clearfix panel-footer-sm panel-footer-primary">
										<p class="mt0 mb0 left">今日访问人数：<?=count($now_visit);?></p>
										<!--<span data-height="1.15em" data-width="1.15em" data-barcolor="#fff" data-type="bar" class="sparkline right"><canvas style="display: inline-block; width: 34px; height: 14px; vertical-align: top;" width="34" height="14"></canvas></span>-->
									</div>
								</div>
							</div>

							<div class="col-md-3 col-sm-6">
								<div class="panel panel-default mb20 mini-box panel-hovered">
									<div class="panel-body">
										<div class="clearfix">
											<div class="info left">
												<h4 class="mt0 text-success text-bold">用户管理</h4>
												<h5 class="text-light mb0">查看详细</h5>
											</div>
											<div class="right ion ion-ios-people-outline icon"></div>
										</div>
									</div>
									<div class="panel-footer clearfix panel-footer-sm panel-footer-success">
										<p class="mt0 mb0 left">今日新注册用户：3</p>
										<!--<span data-height="1.15em" data-width="1.15em" data-barcolor="#fff" data-type="bar" class="right sparkline"><canvas style="display: inline-block; width: 29px; height: 14px; vertical-align: top;" width="29" height="14"></canvas></span>-->
									</div>
								</div>
							</div>

							<div class="col-md-3 col-sm-6">
								<div class="panel panel-default mb20 mini-box panel-hovered">
									<div class="panel-body">
										<div class="clearfix">
											<div class="info left">
												<h4 class="mt0 text-info text-bold">文章管理</h4>
												<h5 class="text-light mb0">查看详情</h5>
											</div>
											<div class="right ion ion-ios-book-outline icon"></div>
										</div>
									</div>
									<div class="panel-footer clearfix panel-footer-sm panel-footer-info">
										<p class="mt0 mb0 left">今天发布文章：4</p>
										<!--<span data-height="1.15em" data-width="1.15em" data-barcolor="#fff" data-type="bar" class="right sparkline"><canvas style="display: inline-block; width: 29px; height: 14px; vertical-align: top;" width="29" height="14"></canvas></span>-->
									</div>
								</div>
							</div>

							<div class="col-md-3 col-sm-6">
								<div class="panel panel-default mb20 mini-box panel-hovered">
									<div class="panel-body">
										<div class="clearfix">
											<div class="info left">
												<h4 class="mt0 text-pink text-bold">10K+</h4>
												<h5 class="text-light mb0">Downloads</h5>
											</div>
											<div class="right ion ion-ios-cloud-download-outline icon"></div>
										</div>
									</div>
									<div class="panel-footer clearfix panel-footer-sm panel-footer-pink">
										<p class="mt0 mb0 left">% change</p>
										<!--<span data-height="1.15em" data-width="1.15em" data-barcolor="#fff" data-type="bar" class="sparkline right"><canvas style="display: inline-block; width: 29px; height: 14px; vertical-align: top;" width="29" height="14"></canvas></span>-->
									</div>
								</div>
							</div>
							<!-- #end mini boxes -->
						</div>
						<div class="row">
							<!-- 访问记录
							<div class="col-md-12">
								<div class="panel panel-default panel-stacked panel-hovered mb30">
									<div class="panel-heading">访问记录</div>
									<div class="panel-body">
										<div id="c3chartline"></div>
										<input type="hidden" id="ipstr" value="<?=$ipstr?>">
										<input type="hidden" id="pvstr" value="<?=$pvstr?>">
									</div>
								</div>
							</div>
							-->
							<?=$servinfo;?>
							<?=$visit_info;?>
							<!-- browser share -->
							<div class="col-md-4 col-sm-6">
								<div class="panel panel-default mb20 panel-hovered">
									<div class="panel-heading">浏览器</div>
									<div class="panel-body text-center">
										<div id="c3chartbrowsershare"></div>
										<input type="hidden" id="percent" value="<?=$percent;?>">
									</div>
								</div>
							</div>

						</div>
						<!-- #end row -->

					</div> <!-- #end page wrap -->
				</div>	
			</div>
		</div>

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


	

	<!-- Dev only -->
	<!-- Vendors -->
	<script src="<?=$this->config->item('adm_resurl');?>scripts/vendors.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/d3.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/c3.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/screenfull.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/perfect-scrollbar.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/jquery.easypiechart.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/waves.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/jquery.sparkline.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/bootstrap-rating.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/app.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/c3.init.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/index.init.js"></script>


</body>
</html>