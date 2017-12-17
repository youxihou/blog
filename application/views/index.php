<!DOCTYPE html>
<html>
<head>
<title> 程序猿|程序员如何提升自己 - 如何成为优秀的程序员 - 程序猴子 </title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
<meta name="keywords" content="程序猿，程序猴子，程序员如何提升自己" />
<meta name="description" content="让程序猿们更懂品质生活，更懂自我学习，努力从优秀到卓越，发现美好的自己！" />
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
  <form method="get" class="search" action="<?php echo site_url(); ?>" >
    <input class="text" type="text" name="keywords" placeholder=" 请输入关键词" value="">
    <input class="butto" value="" type="submit">
  </form>
</div>
     <div id="container">
        <!-- 
        <section class="list">
          <a href="http://www.yzipi.com/3249.htm#respond" class="up" >*</a>      
          <div class="mecc">
            <h2 class="mecctitle"> <a href="http://www.yzipi.com/3249.htm" target="_blank">
              团队管理的核心，做管理必须要知道的（九点） 
              </a> </h2>
            <address class="meccaddress">
            <time>
              12.24        </time>
            -000402
            <a href="http://www.yzipi.com/category/experience/entrepreneurship-manage" rel="category tag">创业/管理</a>        - 阅
             714 　
            </address>
          </div>
          <span class="titleimg">
          <a href="http://www.yzipi.com/3249.htm" target="_blank">
          <img width="600" height="366" src="wp-content/uploads/2015/12/htht.png" class="attachment- Large wp-post-image" alt="htht" /></a>
          </span>
                 <p>1、明确的架构。接手任何一个部门的最重要的事情，是明确或者重新调整组织架构。架构的关键是：谁在什么位置，负责什么内容，一定要明确。所谓“明确”的意思是：不允许两个人交叉负责！也不允许集体领导！不允许有模糊的领域！出了问题，大家都清楚谁应该出来承担责任。取得了成绩&#8230;</p>
          <div class="clear"></div>
        </section> -->
    <div class="clear"></div>
    <?php foreach($article_li as $k => $v): ?>
    <section class="list">
      <a style="width:100px;" href="<?php echo site_url().'index/article_detail/'.$v['id'].'.html'; ?>" class="up" > 阅 <?php echo $v['pv']; ?> 　</a>      
      <div class="mecc" <?=!$v['img']?'style="float:left"':''; ?>>
        <h2 class="mecctitle"> 
          <a href="<?php echo site_url().'index/article_detail/'.$v['id'].'.html '; ?>" target="_blank">
          <?php echo $v['title']; ?> 
          </a> 
        </h2>
        <address class="meccaddress">

        <time>
         <?php echo date('Y-m-d H:i',$v['create_time']); ?> 
        </time>
         -
        <a href="javascript;;" rel="category tag"><?php echo $v['type_name']; ?></a>        
        </address>
      </div>

      <?php if($v['img']): ?>
       <span class="titleimg">
       <a href="" target="_blank">
      <img width="270" height="165" src="<?=base_url().'uploads/'.date('Ymd',$v['create_time']).'/'.$v['img']; ?>" class="attachment-thumbnail wp-post-image" alt="ff" /></a>
      </span>
      <?php endif; ?>
     <p><?php echo $v['intro']; ?></p> 
      <div class="clear"></div>
    </section>
    <div class="clear"></div>
    <?php endforeach; ?>

    <!-- <section class="list">
      <a href="http://www.yzipi.com/3239.htm#respond" class="up" >0</a>      <div class="mecc">
        <h2 class="mecctitle"> <a href="http://www.yzipi.com/3239.htm" target="_blank">
          营销传递第一声“沉锚”效应（不错的故事） 
          </a> </h2>
        <address class="meccaddress">
        <time>
          12.21        </time>
        -
        <a href="http://www.yzipi.com/category/experience/duanzi" rel="category tag">柚段子</a>        - 阅
         692 　
        </address>
      </div>
       <span class="titleimg">
       <a href="http://www.yzipi.com/3239.htm" target="_blank">
    <img width="270" height="165" src="wp-content/uploads/2015/12/effefefe-270x165.png" class="attachment-thumbnail wp-post-image" alt="effefefe" /></a>
      </span>
      
               <p>心理学上有个名词叫做“沉锚”效应。在人们做决策时，思维往往会被得到的第一信息所左右，第一信息会像沉入海底的锚一样把你的思维固定在某处。第一信息的不同，使你做出的决策也就不同。左边粥店的聪明之处在于做事既给别人留有余地，更为自己争取了尽可能大的领地，所以，才会不声..</p>
      
      <div class="clear"></div>
    </section>
    <div class="clear"></div>
    <section class="list">
      <a href="http://www.yzipi.com/3231.htm#respond" class="up" >0</a>      <div class="mecc">
        <h2 class="mecctitle"> <a href="http://www.yzipi.com/3231.htm" target="_blank">
          周鸿祎在360新员工入职的讲话（适合所有同学） 
          </a> </h2>
        <address class="meccaddress">
        <time>
          12.20        </time>
        -
        <a href="http://www.yzipi.com/category/experience/view" rel="category tag">名家看点</a>        - 阅
         1,139 　
        </address>
      </div>
       <span class="titleimg">
       <a href="http://www.yzipi.com/3231.htm" target="_blank">
    <img width="270" height="165" src="wp-content/uploads/2015/12/fertghjk-270x165.png" class="attachment-thumbnail wp-post-image" alt="fertghjk" /></a>
      </span>
      
               <p>想一想，你35岁以后还能混么？那个时候会有更多的年轻人，他们比你更努力，比你更能干，要求也比你低。你要是没学到东西，没锻炼出来能力，他们会代替你的。能力是不能混出来的，而是学习出来的，是锻炼出来的。结果，你在企业里只把年龄混大了，能力没有提升，那么你人生道路会越来越窄.</p>
      
      <div class="clear"></div>
    </section>
    <div class="clear"></div>
    <section class="list">
      <a href="http://www.yzipi.com/3211.htm#comments" class="up" >1</a>      <div class="mecc">
        <h2 class="mecctitle"> <a href="http://www.yzipi.com/3211.htm" target="_blank">
          四步教你如何引入核心用户 
          </a> </h2>
        <address class="meccaddress">
        <time>
          12.17        </time>
        -
        <a href="http://www.yzipi.com/category/experience" rel="category tag">运营经验</a>        - 阅
         1,509 　
        </address>
      </div>
       <span class="titleimg">
       <a href="http://www.yzipi.com/3211.htm" target="_blank">
    <img width="270" height="165" src="wp-content/uploads/2015/12/fefeefeeeee-270x165.png" class="attachment-thumbnail wp-post-image" alt="fefeefeeeee" /></a>
      </span>
      
               <p>做用户运营的人都干过拉人的活儿，这件事很重要，因为产品的生命周期就是用户『来→玩→走』的循环。虽然用户会有自然增长，但真正有价值的用户仍需要定向引入。引入这件事在用户类产品的运营中随处可见，如美丽说的时尚潮人、知乎各领域的牛人、滴滴打车的司机、百度百科的权威编辑者…</p>
      
      <div class="clear"></div>
    </section>
    <div class="clear"></div>
    <section class="list">
      <a href="http://www.yzipi.com/3204.htm#comments" class="up" >4</a>      <div class="mecc">
        <h2 class="mecctitle"> <a href="http://www.yzipi.com/3204.htm" target="_blank">
          深悟营销,一定要抓核心点 
          </a> </h2>
        <address class="meccaddress">
        <time>
          12.16        </time>
        -
        <a href="http://www.yzipi.com/category/experience/marketing/marketing-idea" rel="category tag">营销思想</a>        - 阅
         1,080 &nbsp;&nbsp;<span class="zan">推荐</span>　
        </address>
      </div>
       <span class="titleimg">
       <a href="http://www.yzipi.com/3204.htm" target="_blank">
    <img width="270" height="165" src="wp-content/uploads/2015/12/jijijiij-270x165.png" class="attachment-thumbnail wp-post-image" alt="jijijiij" /></a>
      </span>
      
               <p>什么是核心？当产品同质化严重时，创新并迎合市场需求就是核心。当运营结果不理想时，诊断并找到问题的根就是核心。当公司竞争激烈时，找到突破点错开竞争就是核心。当市场布局完整时，比对手更细致化管理就是核心。当对手不营销时，你主动营销就是核心。营销要找到核心点！找到核心就是…</p>
      
      <div class="clear"></div>
    </section>
    <div class="clear"></div>
    <section class="list">
      <a href="http://www.yzipi.com/3187.htm#comments" class="up" >3</a>      <div class="mecc">
        <h2 class="mecctitle"> <a href="http://www.yzipi.com/3187.htm" target="_blank">
          “定位准，够存粹”简书的简约而不简单 
          </a> </h2>
        <address class="meccaddress">
        <time>
          12.15        </time>
        -
        <a href="http://www.yzipi.com/category/experience" rel="category tag">运营经验</a>        - 阅
         882 　
        </address>
      </div>
       <span class="titleimg">
       <a href="http://www.yzipi.com/3187.htm" target="_blank">
    <img width="270" height="165" src="wp-content/uploads/2015/12/fe-270x165.png" class="attachment-thumbnail wp-post-image" alt="fe" /></a>
      </span>
      
               <p>首先，这个平台的用户定位和产品定位非常准确；产品定位就是存粹的写作阅读平台，模式也很简单：注册账号—写文章－发表－阅读别人的文章。用户群体更简单：热爱写作与阅读的人，在简书，你会发现原来自己的文字被很多人喜欢并不是一件很难的事。简书鼓励每一个文字爱好者动笔去写…</p>
      
      <div class="clear"></div>
    </section>
    <div class="clear"></div>
    <section class="list">
      <a href="http://www.yzipi.com/3151.htm#comments" class="up" >2</a>      <div class="mecc">
        <h2 class="mecctitle"> <a href="http://www.yzipi.com/3151.htm" target="_blank">
          原来“坑爹”这么简单！星巴克不为人知的“勾当” 
          </a> </h2>
        <address class="meccaddress">
        <time>
          12.14        </time>
        -
        <a href="http://www.yzipi.com/category/experience/marketing/marketing-idea" rel="category tag">营销思想</a>        - 阅
         1,274 　
        </address>
      </div>
       <span class="titleimg">
       <a href="http://www.yzipi.com/3151.htm" target="_blank">
    <img width="270" height="165" src="wp-content/uploads/2015/12/grfd-270x165.png" class="attachment-thumbnail wp-post-image" alt="grfd" /></a>
      </span>
      
               <p>当你走进COSTA咖啡点了一杯36元的拿铁咖啡，准备掏出钱包付款时，服务员告诉你“先生你知道吗?这边价格36元的咖啡，你今天可以免费得到。”此时你一定会很想知道，于是会问：“怎么得到?”然后服务员会接着说：“很简单，你办理一张88元的打折卡，这杯咖啡今天就是免费的。</p>
      
      <div class="clear"></div>
    </section>
    <div class="clear"></div>
    <section class="list">
      <a href="http://www.yzipi.com/3135.htm#comments" class="up" >1</a>      <div class="mecc">
        <h2 class="mecctitle"> <a href="http://www.yzipi.com/3135.htm" target="_blank">
          比投广告还要牛B百倍手段“内容运营” 
          </a> </h2>
        <address class="meccaddress">
        <time>
          12.12        </time>
        -
        <a href="http://www.yzipi.com/category/experience" rel="category tag">运营经验</a>        - 阅
         1,124 &nbsp;&nbsp;<span class="zan">推荐</span>　
        </address>
      </div>
       <span class="titleimg">
       <a href="http://www.yzipi.com/3135.htm" target="_blank">
    <img width="270" height="165" src="wp-content/uploads/2015/12/feeffe-270x165.png" class="attachment-thumbnail wp-post-image" alt="feeffe" /></a>
      </span>
      
               <p>在做内容运营之前，必须有清晰明确的方向和规则，这是内容运营的主心骨。以下问题若没有想清楚，那么运营工作就很容易迷失自我。1、网站或者产品上有哪些内容（定位）；2、这些内容从哪里来，由谁提供（来源）；3、内容给谁看，达到什么样的目标（受众）；4、内容要如何组织与呈现；</p>
      
      <div class="clear"></div>
    </section>
    <div class="clear"></div>
      -->
    <!--list-->
    <div class="pagenavi" style="height:60px">
    <?php echo $links; ?>
    </div>
      <!-- <div class="pagenavi">
        <span class="page-numbers">1 / 31 </span> 
        <span class='page-numbers current'>1</span> 
        <a class='page-numbers' href='http://www.yzipi.com/page/2' title='第 2 页'>2</a> 
        <a class='page-numbers' href='http://www.yzipi.com/page/3' title='第 3 页'>3</a> 
        <span class="page-numbers">...</span><a class='page-numbers' href='http://www.yzipi.com/page/31' title='最末页'>31</a> 
        <a class='page-numbers' href='http://www.yzipi.com/page/2' title='下一页'>下一页</a>     
      </div> -->
        <!--Page End-->
    	<!-- <nav class="navigation">
              <div class="nav-previous"><a href="http://www.yzipi.com/page/2" >下一页</a></div>
            
      </nav> -->
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
        <ul id="menu-tag" class="menu"><li id="menu-item-2882" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2882"><a href="<?php echo site_url(); ?>index.html?keywords=观察者模式">观察者模式</a></li>


<li id="menu-item-2707" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2707"><a href="<?php echo site_url(); ?>index.html?keywords=排序算法">排序算法</a></li>
<li id="menu-item-1323" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1323"><a href="<?php echo site_url(); ?>index.html?keywords=程序猿">程序猿</a></li>
<li id="menu-item-2881" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2881"><a href="<?php echo site_url(); ?>index.html?keywords=web开发者">web开发者</a></li>
<li id="menu-item-2712" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2712"><a href="<?php echo site_url(); ?>index.html?keywords=PHP">PHP</a></li>
<li id="menu-item-2883" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2883"><a href="<?php echo site_url(); ?>index.html?keywords=软技能">软技能</a></li>
<li id="menu-item-2842" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2842"><a href="<?php echo site_url(); ?>index.html?keywords=http">http</a></li>
<li id="menu-item-2841" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2841"><a href="<?php echo site_url(); ?>index.html?keywords=时间复杂度">时间复杂度</a></li>
<li id="menu-item-2708" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2708"><a href="<?php echo site_url(); ?>index.html?keywords=线性表">线性表</a></li>


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
               <li class="hot">
        <label for="hot">最新文章</label>
      </li> 
      </ul>
    </div>
    <div class="widget-box">
      <ul class="new-list">
          <?php foreach($hotArticle_li  as $k => $v): ?>
             <li><a href="<?php echo site_url().'index/article_detail/'.$v['id'].'.html'; ?>" title="<?php echo $v['title']; ?>" target="_blank"><?php echo mb_substr($v['title'],0,20,'utf8'); ?></a></li>              
          <?php endforeach ?>

          <!-- <li><a href="http://www.yzipi.com/1505.htm" title="从泡妞段子看你的资金运作水平" target="_blank">
                   从泡妞段子看你的资金运作水平</a></li>
          <li><a href="http://www.yzipi.com/2420.htm" title="【小编推荐】企业优秀人才的标准 - 简单" target="_blank">
                   【小编推荐】企业优秀人才的标准 - 简单</a></li>
          <li><a href="http://www.yzipi.com/1613.htm" title="牛逼的标题如何起?不能说的秘密(10条)" target="_blank">
                   牛逼的标题如何起?不能说的秘密(10条)</a></li>
          <li><a href="http://www.yzipi.com/2344.htm" title="你现在的位置决定了你未来的位置？" target="_blank">
                   你现在的位置决定了你未来的位置？</a></li>
          <li><a href="http://www.yzipi.com/1257.htm" title="嗅觉营销：人的情绪有75％是由嗅觉产生" target="_blank">
                   嗅觉营销：人的情绪有75％是由嗅觉产生</a></li> -->
       </ul>

      <ul class="hot-list">
     
      <?php foreach($newestArticle_li as $v): ?>
      <li>
        <a href="<?php echo site_url().'index/article_detail/'.$v['id'].'.html'; ?>" title="" target="_blank"><?php echo $v['title']; ?></a>
      </li>    
      <?php endforeach; ?>

      </ul>
    </div>
  </div>
    <a href="<?php echo site_url(); ?>" class="yund" target="_blank"><img src="<?php echo $this->res_url; ?>images/yund.png" ></a>
</aside>
  <div class="clear"></div>
</div>
<!--main-->
<?php echo $footer; ?>
</body></html>
