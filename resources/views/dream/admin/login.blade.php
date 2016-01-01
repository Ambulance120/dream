<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>登录</title>
<link rel="stylesheet" type="text/css" class="ui" href="/semantic/semantic.min.css">
<script src="/javascript/jquery-2.1.1.min.js"></script>
<script src="/semantic/semantic.min.js"></script>
<style>
.menu{
    background-color: #00719b !important;
    height: 70px;
    margin-bottom: 20px;

}
.logo{
    padding-left: 120px;
    padding-top: 12px;
}
.right.menu{
    color: #ffffff;
    padding-top: 5px;
    padding-right: 34px;
}
.topright_content{
    line-height: 32px;
    padding-right: 40px;
    font-size: 13px;
    font-family: "Microsoft YaHei", "SimHei", "SimSun";
}
.topright_content a{
    color: #ffffff;
    padding-left: 15px;
}
.con{
    width: 100%;
	margin: 120px auto;
	position: relative;
}
.con_right{
    text-align: center;
}
.from_style{
    width: 430px;
    height: 400px;
    display: block;
    font: 15px/1.5 arial, "Microsoft Yahei", "Hiragino Sans GB", sans-serif;
    line-height: 30px;
}
.form_title{
    margin-top: 0px;
    line-height: 38px;
    padding-top: 10px;
}
.button{
    width: 100%;
}
.fonths{
    color: #666;
    padding-left: 130px;
    padding-top: 50px;
    line-height: 50px;
    text-align: center;
}
.button_a{
    padding-top: 20px;
    padding-right: 30px;
    text-align: center;
    float: right;
    color: #9a9a9a;
    font-family: "Microsoft YaHei", "SimHei", "SimSun";
}
.button_b{
    line-height:40px;
    font-size:15px;
    text-align: left
}
.massage{
    color: red;
    font-family: "Microsoft YaHei", "SimHei", "SimSun";
    font-size: 15;
    line-height: 10px;
}
</style>
</head>
<boay>

<div  class="ui top fixed secondary menu">
    <a class="logo">
            <img src="/images/mxlogo.png" />
    </a>

    <div class="right menu">
        <p class="topright_content">
            您好,欢迎光临梦想云!  <i class="phone icon"></i>400-0791-803<br/>
            <a href="#"> 帮助中心</a>
            <a href="#"> 反馈建议</a>
        </p>
    </div>
</div>


<div class="con">
  <div class="ui grid">
        <div class="nine wide column con_right">
     <img src="/images/logonban.jpg">
     </div>
        <div class="seven wide column">
            <form class="ui form segment from_style" action="/auth/login" method="post">
                {!! csrf_field() !!}
                <h3 class="form_title">会员登录</h3>
                 <div class="field">
                       <label>梦想云账号:</label>
                       <input name="number" type="text" value="{{ old('number')}}">
                 </div>
                 <div class="field">
                       <label>密码:</label>
                       <input name="password" type="password" >
                 </div>

                 @if(Session::has('message'))
                 <p class="massage">{{Session::get('message')}}</p>
                 @endif
                 <br/>
               <button class="ui blue button" type="submit">登录</button>
               <br/>
               <a href="/dream" style="line-height: 50px;">免费注册</a>
            </form>
         </div>
         <hr style="width: 100%;"/>
  </div>
  <div class="ui grid">
      <div class="six wide column">
          <p class="fonths"> ©2015梦想云 赣ICP备12005879号<br/>
          您浏览时，请确保使用IE9以上或 其他主流的浏览器</p>
      </div>
      <div class="eight wide column" >
         <a class="button_a">
            <img src="/images/mxxzewm.png" width="110px" height="110px" >
            <p>APP安装</p>
         </a>
          <a class="button_a">
             <p class="button_b">
                 <i class="apple icon"></i>ios<br/>
                 <i class="android icon"></i>android<br/>
                 <i class="windows icon"></i>WP
             </p>
          </a>
         <a class="button_a">
            <img src="/images/loginm.jpg" width="110px" height="110px">
            <p>登录网址</p>
         </a>
      </div>
  </div>
</div>

</boay>
</html>