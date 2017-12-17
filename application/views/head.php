<header id="header-web">
  <div class="header-main">
    <hgroup class="logo">
      <h1><a href="<?php echo site_url(); ?>" title="" rel="home"><img src="<?php echo $this->res_url; ?>images/logo.png" alt="柚子皮"></a></h1>
    </hgroup>
    <!--logo-->
    <nav class="header-nav">
      <ul id="menu-nav" class="menu">
        <?php foreach($type_li as $k => $v): ?>
          <li id="menu-item-1958" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1958"><a <?php echo $v['id'] == $this->input->get('tid')?'style="color:#00aaee;"':''; ?> title="" href="<?php echo site_url().'index.html?tid='.$v['id']; ?>"><?php echo $v['type_name']; ?></a></li>
        <?php endforeach; ?>
        <!--
        <li id="menu-item-4" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4"><a href="www.yzipi.html">首页</a></li>
        <li id="menu-item-31" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-31"><a title="运营经验" href="http://www.yzipi.com/category/experience">经验</a>
          <ul class="sub-menu">
          	<li id="menu-item-3218" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3218"><a href="http://www.yzipi.com/category/experience/product">产品分析</a></li>
          	<li id="menu-item-3220" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3220"><a href="http://www.yzipi.com/category/experience/user-study">用户研究</a></li>
          	<li id="menu-item-3222" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3222"><a href="http://www.yzipi.com/category/experience/marketing">营销推广</a></li>
          	<li id="menu-item-3186" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3186"><a href="http://www.yzipi.com/category/experience/view">名家看点</a></li>
          	<li id="menu-item-3219" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3219"><a href="http://www.yzipi.com/category/experience/entrepreneurship-manage">创业/管理</a></li>
          	<li id="menu-item-3221" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3221"><a href="http://www.yzipi.com/category/experience/development">职场成长</a></li>
          </ul>
        </li>
        <li id="menu-item-1958" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1958"><a title="随机热文" href="http://www.yzipi.com/hotrandom">热文</a></li>
        <li id="menu-item-3243" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3243"><a href="http://www.yzipi.com/category/youshuo">柚说</a></li>
        <li id="menu-item-3145" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3145"><a href="http://www.yzipi.com/searchform">搜索</a></li>
        -->
      </ul> 
    </nav>
    <!--header-nav-->
    <!-- <div class="weibo">
    <a href="http://www.yzipi.com/app" target="_blank">App</a>
    </div> -->
    <!--header-main--> 
  </div>
</header>
<!--header-web-->