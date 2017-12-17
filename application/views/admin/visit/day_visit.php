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
	
	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/bootstrap.min.css">
	<link rel="stylesheet" href="<?=$this->config->item('adm_resurl');?>styles/main.min.css">

</head>
<body id="app" class="app off-canvas">
	<?=$header;?>
	<!-- main-container -->
	<div class="main-container clearfix">
		<?=$aside;?>

		<!-- content-here -->
		<div class="content-container" id="content">

			<div class="page page-ui-tables">
				<ol class="breadcrumb breadcrumb-small">
					<li><?=$date?> 访问记录</li>
					<li class="active"><a href="#/tables/tables">列表</a></li>
				</ol>

				<div class="page-wrap">
					<!-- row -->
					<div class="row">
						<!-- Basic Table -->
						<div class="col-md-12">
							<div class="panel panel-lined panel-hovered mb20 table-responsive basic-table">
								<div class="panel-heading">
									<?=$date?> 记录列表
									<div class="btn-group btn-group-sm right">
										<button type="button" class="btn btn-default btable-bordered" data-table-class="table-bordered">表格线</button>
										<!-- <button type="button" class="btn btn-default btable-striped" data-table-class="table-stiped">Striped</button> -->
										<button type="button" class="btn btn-default btable-condensed" data-table-class="table-condensed">无表格线</button>
										<button type="button" class="btn btn-default btable-hover" data-table-class="table-hover">划过效果</button>
									</div>
								</div>
								<div class="panel-body">

									<table class="table">
										<thead>
											<tr>
												<th>访问时间</th>
												<th>访问ip</th>
												<th>浏览器</th>
												<th>系统</th>
												<th>地址</th>
												<th>上级来源</th>												
												
											</tr>
										</thead>
										<tbody>
											<?foreach($visit_li as $key => $value):?>
											<tr>
												<td><?=$value['time'];?></td>
												<td><?=$value['ip'];?></td>
												<td> <?=$value['browser'];?></td>
												<td> <?=$value['os'];?></td>
												<td> <?=$value['address'];?></td>
												<td> <?=$value['source'];?></td>
											</tr>
											<?endforeach;?>
										</tbody>
									</table>

									<div class="dataTables_paginate paging_simple_numbers" >
										<?//=$links;?>
										<!-- <a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">Previous</a>
										<span>
											<a class="paginate_button current" >1</a>
											<a class="paginate_button " >2</a>
											<a class="paginate_button " >3</a>
											<a class="paginate_button " >4</a>
											<a class="paginate_button " >5</a>
											<span class="ellipsis">…</span>
											<a class="paginate_button " >10</a>
										</span>
										<a class="paginate_button next" >Next</a> -->
									</div>
				
								</div>
							</div>
						</div>
					</div>
					<!-- #end row -->
				</div> <!-- #end page-wrap -->
			</div>
			

		</div>
		<!-- #end content-container -->

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


	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/screenfull.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/perfect-scrollbar.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/waves.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/plugins/jquery.dataTables.min.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/app.js"></script>
	<script src="<?=$this->config->item('adm_resurl');?>scripts/tables.init.js"></script>

</body>
</html>