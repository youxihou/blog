	<!-- header -->
	<header class="site-head" id="site-head">
		<ul class="list-unstyled left-elems">
			<!-- nav trigger/collapse -->
			<li>
				<a href="javascript:;" class="nav-trigger ion ion-drag"></a>
			</li>
			<!-- #end nav-trigger -->

			<!-- Search box -->
			<!-- <li>
					<div class="form-search hidden-xs">
						<form id="site-search" action="javascript:;">
							<input type="search" class="form-control" placeholder="Type here for search...">
							<button type="submit" class="ion ion-ios-search-strong"></button>
						</form>
					</div>
				</li> -->	
			<!-- #end search-box -->

			<!-- site-logo for mobile nav -->
			<li>
				<div class="site-logo visible-xs">
					<a href="javascript:;" class="text-uppercase h3">
						<span class="text">Materia</span>
					</a>
				</div>
			</li> <!-- #end site-logo -->

			<!-- fullscreen -->
			<li class="fullscreen hidden-xs">
				<a href="javascript:;"><i class="ion ion-qr-scanner"></i></a>

			</li>	<!-- #end fullscreen -->

			<!-- notification drop -->
			<li class="notify-drop hidden-xs dropdown">
				<a href="javascript:;" data-toggle="dropdown">
					<i class="ion ion-speakerphone"></i>
					<span class="badge badge-danger badge-xs circle">3</span>
				</a>

				<div class="panel panel-default dropdown-menu">
					<div class="panel-heading">
						你有三条未读信息 
						<a href="javascript:;" class="right btn btn-xs btn-pink mt-3">显示全部信息</a>
					</div>
					<div class="panel-body">
						<ul class="list-unstyled">
							<li class="clearfix">
								<a href="javascript:;">
									<span class="ion ion-archive left bg-success"></span>
									<div class="desc">
										<strong>王经理登陆该系统</strong>
										<p class="small text-muted">1小时之前</p>
									</div>
								</a>
							</li>
							<li class="clearfix">
								<a href="javascript:;">
									<span class="ion ion-alert-circled left bg-danger"></span>
									<div class="desc">
										<strong>王经理删除了文章</strong>
										<p class="small text-muted">5小时之前</p>
									</div>
								</a>
							</li>
							<li class="clearfix">
								<a href="javascript:;">
									<span class="ion ion-person left bg-info"></span>
									<div class="desc">
										<strong>王经理新增文章 张的地...</strong>
										<p class="small text-muted">2 days ago</p>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>

			</li>	<!-- #end notification drop -->

		</ul>

		<ul class="list-unstyled right-elems">
			<!-- profile drop -->
			<li class="profile-drop hidden-xs dropdown">
				<a href="javascript:;" data-toggle="dropdown">
					<img src="<?=$this->config->item('adm_resurl');?>images/admin.jpg" alt="admin-pic">
				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="<?=site_url().'admin/setting/';?>"><span class="ion ion-settings">&nbsp;&nbsp;</span>设置</a></li>
					<li class="divider"></li>
					<li><a href="<?=site_url().'admin/index/quit';?>"><span class="ion ion-power">&nbsp;&nbsp;</span>退出系统</a></li>
				</ul>
			</li>
			<!-- #end profile-drop -->
		</ul>

	</header>
	<!-- #end header -->