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
          <li><a class="" href="/Service">品牌理念</a></li>
        </ul>
        <div class="shoping_car">
          <a class="ShoppingCarLink" href="/ShoppingCar">
            <sapn class="shopping_num_1 ShoppingCarNum">1</span>
          </a>
        </div>
      </div>

    </div>
  </div>
  <div class="main">

    <div class="login_main">
      <h2>欢迎登录HeyJuice</h2>
      <!--<p>HeyJuice什么什么吧啦吧啦写点什么的什么的什么的<br>什么的。HeyJuice什么什么吧啦吧啦写点什么的什么<br>的什么的什么的。</p> -->
      <div class="prersective">
        <div class="login_concent clearfix">
          <div class="password_tab clearfix">
            <a class="ispassword this LoginType" data-login-type="iskey" href="javascript:;">密码登录</a>
            <a class="nopassword LoginType" data-login-type="nokey" href="javascript:;">免密登录</a>
          </div>
          <div class="login_box KeyLoginContent">
            <div class="login">
              <div class="login_input">
                <input class="KeyLoginValue" type="text" name="username" value=""  placeholder="请输入您的手机号">
              </div>
              <div class="login_input">
                <input class="KeyLoginValue" type="password" value="" name="password" placeholder="请输入密码">
              </div>
              <div class="re_password clearfix">
                <label>
                  <input name="remember"  class="KeyLoginValue" type="checkbox">记住密码
                </label>
                <a href="/Login/forget">忘记密码?</a>
              </div>
              <div class="login_btn"><a class="KeyLogin" href="javascript:;">登录</a></div>
              <a href="/Register" class="register_go">现在注册</a>
            </div>
          </div>
          <div class="quick_login NoKeyLoginContent" style="display:none;">
            <div class="quick_input	">
              <input type="text" name="username" class="NoKeyLoginValue LoginCaptchaValue" placeholder="请输入您的手机号">
            </div>
            <div class="quick_input login_code">
              <input type="text" name="captcha" class="NoKeyLoginValue" placeholder="请输入验证码">
              <div class="LoginCaptcha send_code">
                发送验证码<span class="LoginCaptchaTime"></span>
              </div>
            </div>
            <div class="re_password clearfix">
              <a href="/Login/forget">忘记密码?</a>
            </div>
            <div class="login_btn"><a class="NoKeyLogin" href="javascript:;">登录</a></div>
            <a href="/Register" class="register_go">现在注册</a>
          </div>
        </div>
      </div>
    </div>
    <!-- <p class="login_foot_info">最好的轻断食果蔬汁</p> -->
    <script type="text/javascript">
      $(function(){
        //加载验证码类
        Common.Captcha($('.LoginCaptcha'),$('.LoginCaptchaValue'),'login',function(data){
          $('.LoginCaptcha').addClass('one');
          $('.LoginCaptchaTime').html(data['time']);
          Common.Timer($('.LoginCaptchaTime'));
        });
        var Login = {
          type : function(){
            $('.LoginType').removeClass('this');
            $(this).addClass('this');
            var type = $(this).attr('data-login-type');
            if (type=='iskey') {
              $('.KeyLoginContent').show();
              $('.NoKeyLoginContent').hide();
            }else if (type=='nokey') {
              $('.NoKeyLoginContent').show();
              $('.KeyLoginContent').hide();
            };
          },
          submit : function(){
            var type = $('.LoginType.this').attr('data-login-type');
            if (type=='iskey') {
              var form = $('.KeyLoginValue');
            }else if (type=='nokey') {
              var form = $('.NoKeyLoginValue');
            };
            var data = Base.Form.serialize(form);
            data['type'] = type;
            Base.Http.ajax({
              url : '/Login/submit',
              data : data,
              success : function(data){
                if (data['status']==1) {
                  window.location.href = data['data'];
                }else{
                  Common.Prompt.alert({
                    tips : data['info'],
                    enter_text : '确认'
                  });
                }
              }
            });
          }
        };
        $('.LoginType').click(Login.type);
        $('.KeyLogin').click(Login.submit);
        $('.NoKeyLogin').click(Login.submit);
        $(window).keydown(function(event){
          if(event.keyCode == 13) {
            $('.NoKeyLogin').click();
          }
        });
      });
    </script>
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