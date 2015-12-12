<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta content="telephone=no" name="format-detection" />
  <meta name="keywords" content="HeyJuice,轻断食果汁,纤体,冷榨蔬果汁,轻断食蔬果汁,HeyJuice轻断食蔬果汁,果汁,果蔬汁,轻断食果蔬汁,冷榨果汁" />
  <meta name="description" content="轻断食果蔬汁HeyJuice，3天变美计划。营养学家设计的冷压鲜榨果蔬汁餐单，每天6瓶连续3天，排出体内毒素，激发细胞修复力，减去多余脂肪、美颜、身体变轻盈，充满青春活力！新鲜水果与蔬菜冷压鲜榨，全程冷链免费送达。" />
  <title>轻断食果蔬汁HeyJuice，3天变美计划</title>
  <script type="text/javascript" src="/Public/Common/js/base.js?v=1.3"></script>
  <script type="text/javascript" src="/Public/Common/js/common.js?v=1.3"></script>
  <script type="text/javascript" src="/Public/Home/js/global.js?v=1.3"></script>
  <script type="text/javascript" src="/Public/Common/js/jquery.lazyload.min.js?v=1.3"></script>
  <script type="text/javascript">
    var NTKF_PARAM = {
      siteid:"kf_9700",
      settingid:"kf_9700_1410331097630",
      itemid:"",
      uid:"",
      uname:"",
      orderid:"<",
      orderprice:"",
      userlevel:""
    }
  </script>
  <script type="text/javascript" src="http://download.ntalker.com/t2d2/ntkfstat.js?" charset="utf-8"></script>
  <link rel="stylesheet" type="text/css" href="/Public/Home/css/global.css?v=1.3">
  <link rel="stylesheet" type="text/css" href="/Public/Common/css/base.css?v=1.3">
  <link rel="stylesheet" type="text/css" href="/Public/Home/css/jquery.fullPage.css">
  <script type="text/javascript" src="/Public/Common/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="/Public/Home/js/jquery.fullPage.min.js"></script>
  <script type="text/javascript" src="/Public/Home/js/jquery.easing.min.js"></script>
</head>
<body>
<div class="wrap Wrap">
<div class="navtop">
  <div class="navtop_box">
    <div class="login_bar">
      <a href="/Register">注册</a>／<a href="/Login">登录</a>
    </div>
    <div class="navtop_info">为更好的自己，Better Me!</div>
  </div>
</div>
<div class="header ">
  <div class="heard_warp clearfix">
    <div class="logo">
      <a href="/"></a>
      <img src="/Public/Home/images/re_index_logo.png"/ width="70px">
    </div>
    <div class="header_bar HeaderBar">
      <ul>
        <li><a class="" href="/Index">首页</a></li>
        <li><a class="" href="/Product">产品</a></li>
        <li><a class="" href="/Comments/index">顾客口碑</a></li>
        <li><a class="" href="/Brand">品牌活动</a></li>
        <li><a class="this" href="/Service">品牌理念</a></li>
      </ul>
      <div class="shoping_car">
        <a class="ShoppingCarLink" href="/ShoppingCar">
          <sapn class="shopping_num_1 ShoppingCarNum">1</span>
        </a>
      </div>
    </div>

  </div>
</div>
<div class="about_nav">
  <a href="/Service/index" class="">品牌信念</a>
  <a href="/Service/product" class=""> 产品工艺</a>
  <a href="/Service/hpp" class="this"> HPP技术</a>
</div>
<div class="main">

  <script>
    $(function(){
      $('#dowebok').fullpage({
        afterLoad: function(anchorLink, index){
          if(index == 1){
            $('.section1').addClass('this');
            $('.header').show();
            $('.about_nav').show();
            $('.navtop').show();
          }
          if(index == 2){
            $('.header').hide();
            $('.about_nav').hide();
            $('.navtop').hide();
            $('.section2').addClass('this');
            setTimeout(function(){
              $('.section_tit').addClass('this');
            },1200)
          }
          if(index == 3){
            $('.section3').addClass('this');
          }
          if(index == 4){
            $('.section4').addClass('this');
            setTimeout(function(){
              $('.section_info_img_02').addClass('this');
            },700)
          }
          if(index == 5){
            $('.section5').addClass('this');
          }
          if(index == 6){
            $('.header').show();
            $('.about_nav').show();
            $('.navtop').show();
            $('.animate-bounce-up').hide();
            $('.section6').addClass('this');
          }
        },
        onLeave: function(index, direction){
          if(index == 1){
            $('.section1').removeClass('this');
          }
          if(index == '2'){
            $('.section2').removeClass('this');
            $('.section_tit').removeClass('this');
          }
          if(index == '3'){
            $('.section3').removeClass('this');
          }
          if(index == '4'){
            $('.section4').removeClass('this');
            $('.section_info_img_02').removeClass('this');
            $('.HppMaskBox').removeClass('this');
          }
          if(index == '5'){
            $('.section5').removeClass('this');
          }
          if(index == '6'){
            $('.header').hide();
            $('.about_nav').hide();
            $('.navtop').hide();
            $('.animate-bounce-up').show();
            $('.section6').removeClass('this');
          }
        },
        'navigation': true,
        'navigationPosition': 'right',
        afterRender : function(){
          setTimeout(function(){
            $('.section1').addClass('this');
          },1000)
        }
      });
      $('.ImgBg img').on('mouseover',function(){
        $('.ImgBg img').removeClass('this');
        $(this).addClass('this');
        if($(this).index() == 0){
          $('.section1').css('background-image','url(/Public/Home/images/hpp_01.jpg)');
        }else if($(this).index() == 1){
          $('.section1').css('background-image','url(/Public/Home/images/hpp_17.jpg)')
        }else{
          $('.section1').css('background-image','url(/Public/Home/images/hpp_18.jpg)')
        }
      });
      $('.InfoBtn').on('click',function(){
        $('.HppMaskBox').height($('.section4').height());
        $('.HppMaskBox').slideDown();

      })
      $('.HppClose').on('click',function(){
        $('.HppMaskBox').slideUp();
      })
    });
  </script>
  <div id="dowebok">
    <div class="section section1">
      <div class="section_box">
        <div class="section_pos_01">
          <div class="section_info">
            <h3>高冷到没朋友</h3>
            <i></i>
            <p>不需要飞到纽约或马德里，在中国，你就能喝到新鲜的冷榨果蔬汁。<br>口感鲜活、营养饱满、灭菌充分，业内长期认为这三件事无法同时实现，今天，HeyJuice做到了。<br>
              HeyJuice率先引进了HPP超高压灭菌技术，完善保留果蔬营养并锁定新鲜口感。无须羡慕好莱坞明星手上<br>的洋品牌果蔬汁，每一瓶HeyJuice都使用相同的先进工艺制成。</p>
            <a href="javascript:;">参观更多HPP超高压灭菌设备</a>
            <div class="img_bg ImgBg">
              <img src="/Public/Home/images/hpp_14.jpg" class="this">
              <img src="/Public/Home/images/hpp_15.jpg">
              <img src="/Public/Home/images/hpp_16.jpg">
            </div>
          </div>

        </div>
      </div>

    </div>
    <div class="section section2">
      <div class="section_box">
        <div class="section_pos_02">
          <div class="section_info">
            <div class="section_tit">你常喝的<br>是果汤，还是<span>果汁</span></div>
            <i></i>
            <p>果蔬汁含大量微生物，包括真菌、细菌和部分酵母菌，因此很<br>容易变质，灭菌是所有灌装果蔬汁的必修课，然而，灭菌工艺<br>不同，果蔬汁品质也截然不同。</p>
          </div>
        </div>
      </div>

    </div>
    <div class="section section3">
      <div class="section_pos_03">
        <div class="section_info">
          <table>
            <tr>
              <td width="500px"><img src="/Public/Home/images/hpp_08.png"></td>
              <td width="500px"><img src="/Public/Home/images/hpp_09.png"></td>
            </tr>
            <tr>
              <td>
                <div class="section_info_text">
                  <h3>传统高温灭菌技术</h3>
                  <p>利用病原体不耐热的特点，高温加热果蔬汁，将细菌“烫死”。然而，与细菌“同归于尽”的还有大量宝贵的维生素，实验表明，高温加热后，维生素B1、C、B12和叶酸含量显著下降。果蔬汁的口感也变了，显得沉闷乏味。鲜果汁进去，熟果汤出来。</p>
                </div>
              </td>
              <td>
                <div class="section_info_text">
                  <h3>HPP超高压灭菌技术</h3>
                  <p>HeyJuice引进了HPP（High Pressure Processing）超高压灭菌技术，把封装果汁放在密封、充满水的容器内加压，使果汁承受超高压力，一举消灭细菌、酵母菌、微生物，而果汁营养几乎毫发无损，口感生鲜如初，新鲜与营养兼得。</p>
                </div>
              </td>
            </tr>
          </table>

        </div>
      </div>
    </div>
    <div class="section section4">
      <div class="section_box">
        <div class="section_pos_03">
          <div class="section_info">
            <p class="section_info_img_01"><img src="/Public/Home/images/hpp_11.png"></p>
            <div class="section_info_img_02">
              <div class="section_info_img_pos">
                <a href="" title="数据来源于University of Leuven, Belgium, thermal processing 98℃/10S,HPP 500MPa/90S.Iiu et al., 2013. Master et al., 2012."><img src="/Public/Home/images/hpp_12.png"></a>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- <div class="hpp_mask_box HppMaskBox"><p><img src="/Public/Home/images/hpp_19.png"></p><div class="hpp_close HppClose">x关闭</div></div> -->
    </div>
    <div class="section section5">
      <div class="section_box">
        <div class="section_pos_01">
          <div class="section_info">
            <h3><span>冷榨</span>果蔬汁的<span style="color:#f7614d;">好</span>，味蕾一秒就懂</h3>
            <i></i>
            <p>或许不需要懂这么多理论，喝一口HeyJuice，舌头立刻尝到橙子的清新，番茄的酸甜，<br>就连芹菜的生涩都如此可爱。<br>那是大自然泥土孕育的野生味道。毫无保留、不加修饰、淋漓尽致。</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section section6">
      <p>一瓶果汁不能改变世界,但我们使之成为可能。</p>
    </div>
  </div>
  <div class="animate-bounce-up"></div>
</div>
<div class="footer">
  <div class="footer_logo">
    <embed src="/Public/Home/images/footer_logo.svg" type="image/svg+xml" width="280px" />
  </div>
  <div class="footer_info">
    <div class="eq_code">
      <img src="/Public/Home/images/eqcode.png">
      <p>关注微信<br>关注更多活动信息</p>
    </div>
    <div class="about_we">
      <p class="about_h1">联系HeyJuice获得在线支持</p>
      <p class="f12">7x13小时专心服务,请通过任意方式联系我们</p>
      <ul class="iconfont">
        <li><a href="javascript:;" onclick="NTKF.im_openInPageChat()" class="icon-0001"></a>
        <li><a href="http://weibo.com/HeyJuiceCleanse" class="icon-0003"></a></li>
        <li><a href="http://wpa.qq.com/msgrd?v=3&uin=892280077&site=qq&menu=yes" class="icon-0002"></a></li>
        <li><a href="javascript:;" title="4006-123-666" class="icon-0004"></a></li>
      </ul>
      <p>010-60645096（9：00－22：00）</p>
      <p>4006-123-666（9：00－22：00）</p>
    </div>
    <div class="better_me">
      为更好的自己<br>Better Me!
    </div>
  </div>
</div>
<div class="friendly_link">
  <ul>
    <li><a href="/About/index">关于HeyJuice</a></li>
    <li><a href="/About/joinus">加入我们</a></li>
    <li><a href="/About/contact">联系我们</a></li>
    <li><a href="/Qa/index">帮助中心</a></li>
    <li><a href="/About/contact#bd">商务合作</a></li>
    <li><a href="/Brand/index">品牌活动</a></li>
    <li><a href="/Delivery/index">配送范围查询</a></li>
  </ul>
  <div class="f12 mt30 mb10" style="width:950px; margin-left:auto; margin-right:auto;">
    <table width="100%">
      <tr>
        <td>北京和聚网络科技有限公司&nbsp&nbsp&nbsp&nbsp京ICP备14009743号 ©HeyJuice 2014&nbsp&nbsp&nbsp&nbsp北京市朝阳区东三环北路丙2号18层21B06 </td>
        <td rowspan="2"><img src="/Public/Home/images/qs.png"></td>
      </tr>
      <tr>
        <td>营业执照注册号：110108016581054&nbsp&nbsp&nbsp&nbsp食品流通许可证编号：SP1101051410304043(1-1)&nbsp&nbsp&nbsp&nbsp产品标准号：GB/T31121&nbsp&nbsp&nbsp&nbsp生产许可证：QS1127 0601 0435</td>
      </tr>
    </table>
  </div>
</div>
</div>
<!-- 弹出层 -->
<div class="mask_pro MarkWrap"></div>
<div style="display:none;">
  <script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://":" http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fe1e9293140df80038214b7e8ebdc4ab7' type='text/javascript'%3E%3C/script%3E"));
  </script>
</div>
<script type="text/javascript" charset="utf-8">
  $(function() {
    $("img.lazy").lazyload({effect: "fadeIn"});
  });
</script>
</body>
</html>