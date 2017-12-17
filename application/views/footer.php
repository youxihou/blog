<footer id="dibu">
  <div class="about">
    <div class="right">
      <!-- <ul id="menu-bottom-nav" class="menu">
             <li id="menu-item-69" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69"><a href="http://www.yzipi.com/about">关于我们</a></li>
             <li id="menu-item-3013" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3013"><a href="http://www.yzipi.com/contaxt">联系我们</a></li>
             <li id="menu-item-1953" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1953"><a href="http://www.yzipi.com/link">友情连接</a></li>
             <li id="menu-item-1758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1758"><a href="http://www.yzipi.com/juanz">打赏柚皮</a></li>
             <li id="menu-item-3150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3150"><a href="http://www.yzipi.com/contribute">文章投稿</a></li>
           </ul>  -->     
  <p class="banquan">
        程序猴子
        专注web开发技术！      </p>
    </div>
    <div class="left">
      <ul class="bottomlist">
        <li> <a href="http://weibo.com/p/1005055866293073" target="_blank"　title=""><img src="<?php echo $this->res_url; ?>images/weibo.png" alt=""></a> </li>
        <li> <a href="javascript:;" class="cd-popup-trigger"><img src="<?php echo $this->res_url; ?>images/weixin.png" alt=""></a> </li>
      </ul>
      <div class="cd-popup" >
        <!-- <div class="cd-popup-container">
          <h1>扫描二维码，加柚子皮微信公众号</h1>
          <img src="<?php echo $this->res_url; ?>images/yzipi6.png"> <a href="#" class="cd-popup-close"></a> 
        </div> -->
        <!-- cd-popup-container --> 
      </div>
      <!-- cd-popup --> 
      
    </div>
  </div>
  <!--about-->
  <div class="bottom">
   <a href="<?php echo site_url(); ?>">程序猴</a> / <a href="javascript:;" target="_blank">php程序员</a> / <a href="javascript:;" target="_blank">web开发工程师</a> / <a href="javascript:;" target="_blank">web程序员</a>
    / <a href="http://www.miitbeian.gov.cn/" rel="external nofollow" target="_blank"> 京ICP备14353443号</a>
  
  </div>
  <!--bottom-->
  <div class="scroll" id="scroll" style="display:none;"> ︿ </div>
  <script type="text/javascript">
  $(function(){
    showScroll();
    function showScroll(){
      $(window).scroll( function() { 
        var scrollValue=$(window).scrollTop();
        scrollValue > 500 ? $('div[class=scroll]').fadeIn():$('div[class=scroll]').fadeOut();
      } );  
      $('#scroll').click(function(){
        $("html,body").animate({scrollTop:0},200);  
      }); 
    }
  })
  </script> 
</footer>
<!--dibu-->