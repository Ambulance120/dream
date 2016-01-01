<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>注册</title>
<link rel="stylesheet" media="screen" href="scroll.css" />
<link rel="stylesheet" type="text/css" class="ui" href="/semantic/semantic.min.css">
<script src="/javascript/jquery-2.1.1.min.js"></script>
<script src="/semantic/semantic.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="js/easyform.js"></script>
</head>
<boay>
<div  class="ui top fixed secondary menu" style="background-color: #00719b !important;">

    <div class="item launch">
        <i class="ui icon"></i>
    </div>
    <a class="logo" href="/dream/index">
            <img src="/images/mxlogo.png" />
    </a>
<div class="top_title">梦想云——在线服务管理品牌</div>

    <div class="right  menu">
    <div class="right menu1"><a href="/dream" style="color: #ffffff">注册</a></div>
    <div class="right menu2"><a href="/auth/login" style="color: #ffffff">登录</a></div>
    </div>
</div>
<form id="msform" action="/auth/register" method="post">
     {!! csrf_field() !!}
	<ul id="progressbar">
		<li class="active">填写注册信息</li>
		<li>完善注册信息</li>
	</ul>

	<fieldset>
                 @if(Session::has('message'))
                 <p class="massage">{{Session::get('message')}}</p>
                 @endif
		<div class="field">
              <label style="padding-left: 0px; margin-left: 0px;" >梦想云账号:</label>
              <input name="number" type="text" value="{{ old('number')}}" placeholder="推荐使用手机号或邮箱注册" >
        </div>
		<div class="field">
              <label>你的姓名:</label>
              <input name="name" type="text" value="{{ old('name')}}"  placeholder="请填写真实姓名" >
         </div>
        <div class="field">
              <label>密码:</label>
              <input name="password" type="password" placeholder="6-8位字母数字符号">
        </div>
        <div class="field">
              <label>密码确认:</label>
              <input name="password_confirmation" type="password" placeholder="请再次输入密码">
        </div>
        <div class="field">
              <label>手机号码:</label>
              <input name="phone" type="text" placeholder="请输入手机号码">
        </div>
            <input type="button" name="next" class="next action-button" value="下一步>>" />
	</fieldset>
	<fieldset>
		<div class="field">
              <label>所属行业:</label>
              <input type="text" name="industry" placeholder="请输入行业名称">
        </div>
        <div class="field">
              <label>单位名称:</label>
              <input type="text" name="company" placeholder="请输入单位或企业名称">
        </div>
        <div class="field">
            <div class="inline field">
              <label>地址:</label>
              <input type="text" name="address" 请输入地址>
            </div>
        </div>
        <div class="field">
            <div class="inline field">
              <label>联系电话:</label>
              <input type="text" name="cnumber" placeholder="手机或固定电话号码">
            </div>
        </div>
        <div class="field">
            <div class="inline field">
              <label>QQ号码:</label>
              <input type="text" name="qq" placeholder="请输入QQ">
            </div>
        </div>
        <div class="field">
            <div class="inline field">
              <label>电子邮箱:</label>
              <input type="text" name="email" placeholder="例如mx@mxsoft.com">
            </div>
        </div>
		<input type="button" name="previous" class="previous action-button" value="<<上一步" />
		<input type="submit" name="next" class="next action-button" value="完成>>">
	</fieldset>
</form>
<script src="javascript/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="javascript/jquery.easing.min.js" type="text/javascript"></script>
<script src="scroll.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#reg-form').easyform();
});
</script>
</boay>
</html>