<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>用户信息</title>
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
.topright_content a{
    color: #ffffff;
    padding-left: 15px;
}

.ui.header{
    padding-right: 100px;
    margin-top: 13px;
}
.ms{
    text-align: left;
    padding-left: 100px;
    width: 90%;
}
.m-title{
    padding-top: 100px;
    font-family: "Microsoft YaHei", "SimHei", "SimSun";
    font-size: 18px;
    width: 80%;
}
.m-content{
    border: solid 1px #ffa602;
    width: 90%;
    height: 1030px;
    padding:50px 50px;
    margin: 50px 50px;
    font-size: 20px;
}
.ui.grid{
    font-family: "Microsoft YaHei", "SimHei", "SimSun";
    font-size: 15px;
    text-align: left;
    font-weight:bold;
}
.ui.form{
    width: 100%;
    height: 400px;
    display: block;
    font: 15px/1.5 arial, "Microsoft Yahei", "Hiragino Sans GB", sans-serif;
    line-height: 30px;
    margin-top: 80px;
    padding-left: 40px;
}
.br{
    width: 90%;
    height:1px;
    border:none;
    border-top:1px dashed #bababa;
    margin-top: 50px;
}
.ui.blue.button{
    height: 40px;
    width: 100px;
    margin-top: 10px;
    margin-left: 300px;
}
.top.menu .userinfo{
    padding:5px !important;
    margin:0px 20px 0px 0px;
    width:150px;
    cursor: pointer;
}
.top.menu .userinfo img{
    height:50px;
}
.bottom.menu .footer{
    width:100%;
    border-radius: 0px;
    padding:0;
}

</style>
</head>
<boay>

<div  class="ui top fixed secondary menu">
    <a class="logo">
            <img src="/images/mxlogo.png" />
    </a>

   <div class="right  menu">
           <div class="ui header userinfo">
               <img class="ui circular image" src="/images/default_user.jpg">
               <div class="content">Sara</div>
           </div>

           <div class="ui popup ">
               <div class="ui teal inverted vertical icon menu">
                   <a class="icon item" href="/admin/user/profile/1"><i class="user icon"></i>用户信息</a>
                   <a class="icon item" href="/user/logout"><i class="key icon"></i>退出</a>
               </div>
           </div>
   </div>
</div>
    <div class="ms">
            <div class="m-title">我的信息</div>
            <hr>
        <fieldset class="m-content">
        <legend>基本资料</legend>

                <div class="ui grid">
                    <div class="four wide column">
                        <img style="height: 120px; width: 120px;" class="ui medium circular image" src="/images/default_user.jpg">
                        <a><p style="margin-top: 10px; padding-left: 30px;">修改头像</p></a>
                    </div>
                    <div class="four wide column">
                        <p>云账号:</p>
                        <p>姓名：</p>
                        <p>注册时间:</p>
                        <a href="#1F" name="1F"><p><i class="write icon"></i>编辑信息 </p></a>
                    </div>
                </div>
                <hr class="br">
                <form name="1F" class="ui form"  action="/auth/message">
                    <div class="inline field">
                        <label>姓名:</label>
                        <input  type="text" style="width: 550px; margin-left: 50px;">
                    </div>
                    <div class="inline field">
                        <label style="margin-right: 80px;">性别:</label>
                        <input type="radio"><label style="margin-right: 80px;" >男</label>
                        <input type="radio"><label>女</label>
                    </div>
                    <div class="inline field">
                        <label>年龄:</label>
                        <input type="text" style="width: 550px; margin-left: 50px;">
                    </div>
                    <div class="inline field">
                        <label>生日:</label>
                        <input type="text" style="width: 550px; margin-left: 50px;">
                    </div>
                    <div class="inline field">
                        <label>单位名称:</label>
                        <input type="text" style="width: 550px; margin-left: 22px;">
                    </div>
                    <div class="inline field">
                        <label>所属行业:</label>
                        <input type="text" style="width: 550px; margin-left: 22px;">
                    </div>
                    <div class="inline field">
                        <label>地址:</label>
                        <input type="text" style="width: 550px; margin-left: 50px;">
                    </div>
                    <div class="inline field">
                        <label>手机号码:</label>
                        <input type="text" style="width: 550px; margin-left: 22px;">
                    </div>
                    <div class="inline field">
                        <label>QQ号码:</label>
                        <input type="text" style="width: 550px; margin-left: 28px;" >
                    </div>
                    <div class="inline field">
                        <label>联系电话:</label>
                        <input type="text" style="width: 550px;margin-left: 22px;">
                    </div>
                    <div class="inline field">
                        <label>联系地址:</label>
                        <input type="text" style="width: 550px; margin-left: 22px;">
                    </div>
                    <input class="ui blue button" type="submit" value="保存">
                </form>
        </fieldset>
    </div>

</boay>
</html>