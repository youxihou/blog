<!DOCTYPE html>
<html>
<head>
<title><?php echo $article_info['title']; ?> - 程序猴子</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
<link rel="shortcut icon" href="<?php echo $this->res_url; ?>images/favicon2.ico" />
<link rel='stylesheet' id='sytle-css'  href='<?php echo $this->res_url; ?>css/style.css~ver=4.3.1.css' type='text/css' media='all' />
<link rel='stylesheet' id='home-css'  href='<?php echo $this->res_url; ?>css/home.css~ver=4.3.1.css' type='text/css' media='all' />
<link rel='stylesheet' id='yzipi-pc-css'  href='<?php echo $this->res_url; ?>css/yzipi-pc.css~ver=4.3.1.css' type='text/css' media='all' />
<link rel='stylesheet' id='yzipi-ipad-css'  href='<?php echo $this->res_url; ?>css/yzipi-ipad.css~ver=4.3.1.css' type='text/css' media='all' />
<link rel='stylesheet' id='yzipi-phone2-css'  href='<?php echo $this->res_url; ?>css/yzipi-phone2.css~ver=4.3.1.css' type='text/css' media='all' />
<link rel='stylesheet' id='yzipi-phone-css'  href='<?php echo $this->res_url; ?>css/yzipi-phone.css~ver=4.3.1.css' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo $this->res_url; ?>js/html5shiv.js~ver=4.3.1'></script>
<script type='text/javascript' src='<?php echo $this->res_url; ?>js/css3-mediaqueries.js~ver=4.3.1'></script>
<script type='text/javascript' src='<?php echo $this->res_url; ?>js/selectivizr-min.js~ver=4.3.1'></script>
<script type='text/javascript' src='<?php echo $this->res_url; ?>js/jquery.1.11.1.js~ver=4.3.1'></script>
<script type='text/javascript' src='<?php echo $this->res_url; ?>js/main.js~ver=4.3.1'></script>
</head>
<body>
<!-- Copyright ? 2005. Spidersoft Ltd -->
<style>
A.applink:hover {border: 2px dotted #DCE6F4;padding:2px;background-color:#ffff00;color:green;text-decoration:none}
A.applink       {border: 2px dotted #DCE6F4;padding:2px;color:#2F5BFF;background:transparent;text-decoration:none}
A.info          {color:#2F5BFF;background:transparent;text-decoration:none}
A.info:hover    {color:green;background:transparent;text-decoration:underline}
</style>
<!-- /Copyright ? 2005. Spidersoft Ltd -->
<?php echo $head; ?>


<div id="main">
       <div id="soutab">
  <form method="get" class="search" action="" >
    <input class="text" type="text" name="s" placeholder=" 请输入关键词" value="">
    <input class="butto" value="" type="submit">
  </form>
</div>
     <div id="container">
       <section class="list">
       <!-- <a href="javascript:;" class="up" >*</a>    -->   
       <div class="mecc">
        <h2 class="mecctitle"> <a href="javascript:;" target="_blank">
          <?php echo $article_info['title']; ?> 
          </a> </h2>
        <address class="meccaddress">
        <time> <?php echo date('Y-m-d',$article_info['create_time']); ?> </time>
        -
        <a href="javascrpt:;" rel="category tag"><?php echo $article_info['type_name']; ?></a>
                - 阅 <?php echo $article_info['pv']; ?> 　
        </address>
      </div>
      <!--        
      <span class="titleimg">
        <a href="javascript:;" target="_blank">
           <img width="600" height="366" src="javascript:;" class="attachment- Large wp-post-image" alt="htht" />
        </a>
      </span> 
      -->
          
      <div class="clear"></div>
    </section>
    <div class="clear"></div>
    <div class="" style="line-height:30px;padding:30px">
      <?php echo $article_info['content']; ?>
    </div>


    <!--list-->
        <div class="pagenavi">
    
     </div>
        <!--Page End-->
    	<!-- <nav class="navigation"><div class="nav-previous"><a href="" >下一页</a></div></nav> -->
      <!-- .navigation -->
	    <!--phonepage--> 
  </div>
  <!--Container-->
  <aside id="sitebar"> 
  <!--erweima-->
  <div class="sitebar_list">
    <div class="wptag"> 
      <span class="tagtitle">热门标签 ...</span>
      <div class="tagg">
        <ul id="menu-tag" class="menu"><li id="menu-item-2882" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2882"><a href="http://www.yzipi.com/tag/%e6%89%a7%e8%a1%8c%e5%8a%9b">执行力</a></li>
<li id="menu-item-2711" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2711"><a href="http://www.yzipi.com/tag/o2o">O2O</a></li>
<li id="menu-item-2709" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2709"><a href="http://www.yzipi.com/tag/%e7%b2%89%e4%b8%9d%e7%bb%8f%e6%b5%8e">粉丝经济</a></li>
<li id="menu-item-2707" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2707"><a href="http://www.yzipi.com/tag/%e4%ba%92%e8%81%94%e7%bd%91%e6%80%9d%e7%bb%b4">互联网思维</a></li>
<li id="menu-item-1323" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1323"><a href="http://www.yzipi.com/category/marketing/psychology">营销心理学</a></li>
<li id="menu-item-2881" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2881"><a href="http://www.yzipi.com/tag/%e5%86%b7%e5%90%af%e5%8a%a8">冷启动</a></li>
<li id="menu-item-2712" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2712"><a href="http://www.yzipi.com/tag/%e9%a9%ac%e4%ba%91">马云</a></li>
<li id="menu-item-2883" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2883"><a href="http://www.yzipi.com/tag/%e4%ba%ba%e6%80%a7%e5%bc%b1%e7%82%b9">人性弱点</a></li>
<li id="menu-item-2842" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2842"><a href="http://www.yzipi.com/?s=%E5%BE%AE%E4%BF%A1">微信</a></li>
<li id="menu-item-2841" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2841"><a href="http://www.yzipi.com/?s=%E4%BA%92%E8%81%94%E7%BD%91%2B">互联网 +</a></li>
<li id="menu-item-2708" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2708"><a href="http://www.yzipi.com/tag/%e5%91%a8%e9%b8%bf%e7%a5%8e">周鸿祎</a></li>
<li id="menu-item-2715" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2715"><a href="http://www.yzipi.com/tag/%e5%a4%a7%e6%95%b0%e6%8d%ae">大数据</a></li>
<li id="menu-item-3224" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3224"><a href="http://www.yzipi.com/tag/%e5%b7%ae%e5%bc%82%e5%8c%96">差异化</a></li>
<li id="menu-item-3225" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3225"><a href="http://www.yzipi.com/tag/%e5%ae%9a%e4%bd%8d">定位</a></li>
<li id="menu-item-3227" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3227"><a href="http://www.yzipi.com/category/experience/duanzi">柚段子</a></li>
</ul>      </div>
    </div>
  </div>
      <div class="widget-tab">
    <input type="radio" name="widget-tab" id="new" checked="checked"/>
    <input type="radio" name="widget-tab" id="hot"/>
    <div class="widget-title">
      <ul>
        <li class="new">
          <label for="new">热门文章</label>
        </li>
      <!--         <li class="hot">
        <label for="hot">最新文章</label>
      </li> -->
      </ul>
    </div>
    <div class="widget-box">
      <ul class="new-list">
          <?php foreach($hotArticle_li  as $k => $v): ?>
             <li><a href="<?php echo site_url().'index/article_detail/'.$v['id']; ?>" title="<?php echo $v['title']; ?>" target="_blank"><?php echo $v['title']; ?></a></li>              
          <?php endforeach ?>
       </ul>

      <ul class="hot-list">
     
      <li><a href="javascript:;" title="" target="_blank">1111111111111</a></li>  


  

      </ul>
    </div>
  </div>
    <a href="javascript:;" class="yund" target="_blank"><img src="<?php echo $this->res_url; ?>images/yund.png" ></a>
</aside>
  <div class="clear"></div>
</div>
<!--main-->
<?php echo $footer; ?>
</body></html>
