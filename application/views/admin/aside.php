<!-- main-navigation -->
<aside class="nav-wrap" id="site-nav" data-perfect-scrollbar>
    <div class="nav-head">
        <!-- site logo -->
        <a href="index.html" class="site-logo text-uppercase">
            <i class="ion ion-android-home"></i>
            <span class="text">程序猴</span>
        </a>
    </div>

    <!-- Site nav (vertical) -->

    <nav class="site-nav clearfix" role="navigation">
        <div class="profile clearfix mb15">
            <img src="<?=$this->config->item('adm_resurl');?>images/admin.jpg" alt="admin">
            <div class="group">
                <h5 class="name"><?=$this->session->userdata('adm_name');?></h5>
                <small class="desig text-uppercase"></small>
            </div>
        </div>

        <!-- navigation -->
        <ul class="list-unstyled clearfix nav-list mb15">
            <li class="">
                <a href="<?=site_url().'admin/index';?>">
                    <i class="ion ion-monitor"></i>
                    <span class="text">主页</span>
                </a>
            </li>

            <li <?=$this->uri->segment(2) == 'article'?'class="open"':'';?>>
                <a href="javascript:;">
                    <i class="ion ion-document-text"></i>
                    <span class="text">文章管理</span>
                    <i class="arrow ion-chevron-left"></i>
                    <!-- <span class="badge badge-xs badge-info">10</span> -->
                </a>
                <ul class="inner-drop list-unstyled">
                    <li <?=$this->uri->segment(3) == 'tables'?'class="active"':'';?>>
                        <a href="<?=site_url().'admin/article/tables'?>">列表</a>
                    </li>
                    <li <?=$this->uri->segment(3) == 'add_article'?'class="active"':'';?>>
                        <a href="<?=site_url().'admin/article/add_article'?>">添加</a>
                    </li>
                </ul>
            </li>

            <li <?=$this->uri->segment(2) == 'sysuser'?'class="open"':'';?>>
                <a href="javascript:;">
                    <i class="ion ion-person"></i>
                    <span class="text">用户管理</span>
                    <i class="arrow ion-chevron-left"></i>
                    <!-- <span class="badge badge-xs badge-info">10</span> -->
                </a>
                <ul class="inner-drop list-unstyled">
                    <li <?=$this->uri->segment(3) == 'tables'?'class="active"':'';?>>
                        <a href="<?=site_url().'admin/article/tables'?>">列表</a>
                    </li>
                    <li <?=$this->uri->segment(3) == 'add'?'class="active"':'';?>>
                        <a href="<?=site_url().'admin/sysuser/add'?>">添加</a>
                    </li>
                </ul>
            </li>

            <li <?=$this->uri->segment(2) == 'visit'?'class="open"':'';?>>
                <a href="javascript:;">
                    <i class="ion ion-stats-bars"></i>
                    <span class="text">访问流量</span>
                    <i class="arrow ion-chevron-left"></i>
                    <!-- <span class="badge badge-xs badge-info">10</span> -->
                </a>
                <ul class="inner-drop list-unstyled">
                    <li <?=$this->uri->segment(3) == 'tables'?'class="active"':'';?>>
                        <a href="<?=site_url().'admin/visit/tables'?>">访问列表</a>
                    </li>
                </ul>
            </li>

            <li <?=$this->uri->segment(2) == 'oper_log'?'class="open"':'';?>>
                <a href="javascript:;">
                    <i class="ion ion-ios-paper-outline"></i>
                    <span class="text">操作日志</span>
                    <i class="arrow ion-chevron-left"></i>
                    <!-- <span class="badge badge-xs badge-info">10</span> -->
                </a>
                <ul class="inner-drop list-unstyled">
                    <li <?=$this->uri->segment(3) == 'tables'?'class="active"':'';?>>
                        <a href="<?=site_url().'admin/oper_log/tables'?>">操作列表</a>
                    </li>
                </ul>
            </li>

        </ul> <!-- #end navigation -->
    </nav>

    <!-- nav-foot -->
    <footer class="nav-foot">
        <p><?=date('Y')?> &copy; <span></span></p>
    </footer>

</aside>
<!-- #end main-navigation -->