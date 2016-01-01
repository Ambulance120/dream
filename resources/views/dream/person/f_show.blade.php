@extends('dream.master')
@section('title')人员档案@stop
@section('style')

.white_content {
    position: absolute;
    top: 8%;
    left: 7%;
    width: 85%;
    height: 90%;
    padding: 20px;
    border: 1px solid #4183c4;
    background-color: white;
    overflow: auto;
}
ol li { margin: 8px }
#con {
    font-size: 12px;
    margin: 0px auto;
    width:98%;
}
#tags {
     padding:0px;
     margin: 0px 0px 0px 10px;
     width: 400px;
     height: 23px
 }
#tags li {
    float: left;
    list-style-type: none;
    height: 23px
}
#tags li a {
    padding:0px 28px;
    float: left;
    color: #999;
    line-height: 23px;
    height: 23px;
    text-decoration: none
}
#tags li.emptyTag {
    background: none transparent scroll repeat 0% 0%;
    width: 4px
}
#tags li.selectTag {
     background-position: left top;
     margin-bottom: -2px;
     position: relative;
     height: 25px
 }
#tags li.selectTag a {
    background-position: right top;
    color: #000;
    line-height: 25px;
    height: 25px
}
#tagContent {
    border: #aecbd4 1px solid;
    padding: 1px;
    height: 40%;
 }
.tagContent {
    padding: 10px;
    display: none;
    width: 98%;
    color: #474747;
    height: 45%;
}
#tagContent div.selectTag {
    display: block
}

.img_position{
    padding-left: 25px;
    line-height: 100px;
}

@stop
@section('content')
<div class="white_content">
<form action="/dream/file/save/{{$person['id']}}">
<div class="content"><i class="big blue payment icon"></i>人员档案 — 查看 </div>
<hr>
<div id=con>
  <ul id=tags>
    <li class=selectTag><a onClick="selectTag('tagContent1',this)"
    href="javascript:void(0)">基本信息</a> </li>
    <li><a onClick="selectTag('tagContent0',this)"
    href="javascript:void(0)">其他信息</a> </li>
  </ul>

    <div id=tagContent>

    <div class="tagContent selectTag" id=tagContent1>

<div class="ui form">
<div class="ui equal width grid">
    <div class="column">
    <br/>
      <div class="img_position">
        <img name="image" src="/images/default_user.jpg">
      </div>
      <div class="inline field">
        <label>&nbsp;电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话:&nbsp;</label>
        <input name="telphone" type="text" value="{{$person->telphone}}" readonly="" style="width: 200px;">
      </div>
      <div class="inline field">
        <label>&nbsp;银&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;行:&nbsp;</label>
        <input name="bank" type="text" value="{{$person->bank}}" readonly="" style="width: 200px;">
      </div>
      <div class="inline field">
        <label>&nbsp;备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注:&nbsp;</label>
        <input name="note" type="text" value="{{$person->note}}" readonly="" style="width: 200px;">
      </div>
    </div>


  <div class="column">
  <div class="inline field">
    <label>人员编码:</label>
    <input name="id" type="text" value="{{$person->id}}" readonly="" style="width: 200px;">
  </div>
  <div class="inline field">
    <label>&nbsp;性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别:&nbsp;</label>
   <input name="sex" type="text" value="{{$person->sex}}" readonly="" style="width: 200px;">
  </div>
  <div class="inline field">
    <label>证件号码:</label>
    <input name="dnumber" value="{{$person->d_number}}" readonly="" type="text" style="width: 200px;">
  </div>
  <div class="inline field">
    <label>&nbsp;职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;务:&nbsp;</label>
    <input name="position" type="text" value="{{$person->position}}" readonly="" style="width: 200px;">
  </div>
  <div class="inline field">
    <label>&nbsp;职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称:&nbsp;</label>
    <input type="text" value="{{$person->title}}" readonly="" style="width: 200px;">
  </div>
  <div class="inline field">
    <label>E&nbsp;m&nbsp;a&nbsp;i&nbsp;l:</label>
    <input name="email" type="text" value="{{$person->email}}" readonly="" style="width: 200px;">
  </div>
  <div class="inline field">
    <label>银行账号:</label>
    <input name="bank_number" value="{{$person->bank_number}}" readonly="" type="text" style="width: 200px;">
  </div>
  </div>
  <div class="column">
  <div class="inline field">
    <label>&nbsp;姓&nbsp;&nbsp;&nbsp;&nbsp;名:&nbsp;</label>
    <input name="name" type="text" value="{{$person->name}}" readonly="" style="width: 200px;">
  </div>
  <div class="inline field">
    <label>证件类型:</label>
    <input type="text" value="{{$person->d_type}}" readonly="" style="width: 200px;">
  </div>
  <div class="inline field">
    <label>所属部门:</label>
    <input name="department" type="text" value="{{$person->department}}" readonly="" style="width: 200px;">
  </div><div class="inline field">
      <label>人员类别:</label>
      <input type="text" value="{{$person->p_category}}" readonly="" style="width: 200px;">
    </div>
    <div class="inline field">
      <label>手机号码:</label>
      <input name="phone" type="text" value="{{$person->phone}}" readonly="" style="width: 200px;">
    </div>
    <div class="inline field">
      <label>出生日期:</label>
      <input name="birthday" value="{{$person->birthday}}" readonly="" type="text" style="width: 200px;">
    </div>
    <div class="inline field">
      <label>助&nbsp;&nbsp;记&nbsp;&nbsp;码:</label>
      <input name="help" value="{{$person->help_number}}" readonly="" type="text" style="width: 200px;">
    </div>
  </div>
<br/>

</div>
</div>
    </div>

    <div class="tagContent" id=tagContent0>

    <div class="ui form">
    <br/>
        <div class="three fields">
            <div class="inline field">
              <label>人员属性:</label>
              <input type="text" value="{{$person->attribute}}" readonly="" style="width: 200px;">
            </div>
            <div class="inline field">
              <label>职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业:</label>
              <input name="occupation" value="{{$person->occupation}}" readonly="" type="text" style="width: 200px;">
            </div>
            <div class="inline field">
              <label>学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;历:</label>
             <input value="{{$person->education}}" readonly="" type="text" style="width: 200px;">
            </div>
        </div>
        <div class="three fields">
            <div class="inline field">
              <label>专&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业:&nbsp;</label>
              <input name="major" value="{{$person->major}}" readonly="" type="text" style="width: 200px;">
            </div>
            <div class="inline field">
              <label>籍&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;贯:</label>
              <input name="place" value="{{$person->place}}" readonly="" type="text" style="width: 200px;">
            </div>
            <div class="inline field">
              <label>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编:</label>
              <input name="zip_code" value="{{$person->zip_code}}" readonly="" type="text" style="width: 200px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>家庭电话:</label>
              <input name="home_number" value="{{$person->home_number}}" readonly="" type="text" style="width: 200px;">
            </div>
            <div class="inline field">
              <label>通&nbsp;讯&nbsp;地&nbsp;址:</label>
              <input name="address" value="{{$person->address}}" readonly="" type="text" style="width: 200px;">
            </div>
            <div class="inline field">
              <label>紧急联系人:</label>
              <input name="contact" value="{{$person->urgent_contact}}" readonly="" type="text" style="width: 200px;">
            </div>
        </div>
        <div class="three fields">
            <div class="inline field">
              <label>紧急电话:</label>
              <input name="urgent_call" value="{{$person->urgent_call}}" readonly="" type="text" style="width: 200px;">
            </div>
            <div class="inline field">
              <label>公积金编号:</label>
              <input name="fund" value="{{$person->fund_number}}" readonly="" type="text"  style="width: 200px;">
            </div>
            <div class="inline field">
              <label>社&nbsp;保&nbsp;编&nbsp;号:</label>
              <input name="insurance" value="{{$person->insurance_number}}" readonly="" type="text" style="width: 200px;">
            </div>
        </div>
        <div class="three fields">
            <div class="inline field">
              <label>银&nbsp;&nbsp;行&nbsp;&nbsp;2:&nbsp;</label>
              <input name="bank2" value="{{$person->bank2}}" readonly="" type="text" style="width: 200px;">
            </div>
            <div class="inline field">
              <label>&nbsp;银行账号2:&nbsp;</label>
              <input name="bank_number2" value="{{$person->bank_number2}}" readonly="" type="text" style="width: 200px;">
            </div>
            <div class="inline field">
              <label>停&nbsp;用&nbsp;时&nbsp;间:</label>
              <input name="stop_time" value="{{$person->stop_time}}" type="text" placeholder="2015-12-10" readonly="" style="width: 200px;">
            </div>
        </div>
        <div class="three fields">
            <div class="inline field">
              <label>创建时间:</label>
              <input name="create_time" value="{{$person->create_time}}" type="text" readonly="" style="width: 200px;">
            </div>
            <div class="inline field">
              <label>修&nbsp;改&nbsp;时&nbsp;间:&nbsp;</label>
              <input name="change_time" value="{{$person->change_time}}" type="text" readonly="" style="width: 200px;">
            </div>
            <div class="inline field">
              <label>启&nbsp;用&nbsp;时&nbsp;间:</label>
              <input name="start_time" value="{{$person->start_time}}" type="text" placeholder="2015-12-10" readonly="" style="width: 200px;">
            </div>
        </div>
        <div class="three fields">
            <div class="inline field">
              <label>创&nbsp;建&nbsp;人:&nbsp;</label>
              <input name="create_person" value="{{$person->create_person}}" type="text" placeholder="基础版体验用户" readonly="" style="width: 200px;">
            </div>
            <div class="inline field">
              <label>修&nbsp;&nbsp;&nbsp;改&nbsp;&nbsp;&nbsp;人:&nbsp;</label>
              <input name="change_person" value="{{$person->change_person}}" type="text" placeholder="基础版体验用户" readonly="" style="width: 200px;">
            </div>
            <div class="inline field">
              <label>启&nbsp;&nbsp;&nbsp;用&nbsp;&nbsp;&nbsp;人:&nbsp;</label>
              <input name="start_person" value="{{$person->start_person}}" type="text" placeholder="2015-12-10" readonly="" style="width: 200px;">
            </div>
        </div>
        <div class="field">
            <div class="inline field">
              <label>停&nbsp;用&nbsp;人:&nbsp;</label>
              <input name="stop_person" value="{{$person->stop_person}}" type="text" readonly="" style="width: 200px;">

        </div>
    </div>
    </div>

  </div>
      <div style="position:absolute; bottom:20px; right: 20px;">
      <a href="/dream/file"> <div class="ui blue submit button"><i class="reply icon"></i> 返回 </div></a>
      </div>

</div>


<p>
  <script type=text/javascript>
function selectTag(showContent,selfObj){
	// 操作标签
	var tag = document.getElementById("tags").getElementsByTagName("li");
	var taglength = tag.length;
	for(i=0; i<taglength; i++){
		tag[i].className = "";
	}
	selfObj.parentNode.className = "selectTag";
	// 操作内容
	for(i=0; j=document.getElementById("tagContent"+i); i++){
		j.style.display = "none";
	}
	document.getElementById(showContent).style.display = "block";
	}

</script>


</p>
</div>
</form>
</div>
@stop

