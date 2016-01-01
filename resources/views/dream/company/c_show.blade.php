@extends('dream.master')
@section('title')往来单位@stop
@section('style')

.white_content {
    position: absolute;
    top: 3%;
    left: 7%;
    width: 80%;
    height: 620px;;
    padding: 20px;
    border: 1px solid #4183c4;
    background-color: white;
    z-index:1002;
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

@stop
@section('content')
<div class="white_content">
<div class="content"><i class="big blue payment icon"></i>往来单位 — 查看 </div>
<hr>
<br/>
<div id=con>
  <ul id=tags>
    <li class=selectTag><a onClick="selectTag('tagContent1',this)"
    href="javascript:void(0)">基本信息</a> </li>
    <li><a onClick="selectTag('tagContent0',this)"
    href="javascript:void(0)">联系人信息</a> </li>
    <li><a onClick="selectTag('tagContent2',this)"
     href="javascript:void(0)">其他信息</a> </li>
  </ul>

    <div id=tagContent>

    <div class="tagContent selectTag" id=tagContent1>

<div class="ui form">

<br/>
    <div class="two fields">
        <div class="inline field">
          <label>单位编码:</label>
          <input name="number" type="text" value="{{$company->id}}" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>单位名称:</label>
          <input name="name" type="text" value="{{$company->name}}" style="width: 300px;">
        </div>
    </div>
    <div class="two fields">
        <div class="inline field">
          <label>单位分类:</label>
          <input name="category" type="text" value="{{$company->category}}" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>所属地区:</label>
          <input name="address" type="text" style="width: 300px;">
        </div>
    </div>
    <div class="two fields">
        <div class="inline field">
          <label>单位电话:</label>
          <input name="phone" type="text" value="{{$company->phone}}" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>单位地址:</label>
          <input name="address" type="text" value="{{$company->address}}" style="width: 300px;">
        </div>
    </div>
    <div class="two fields">
        <div class="inline field">
          <label>助&nbsp;&nbsp;记&nbsp;&nbsp;码:&nbsp;</label>
          <input name="help" type="text" value="{{$company->help}}" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注:</label>
          <input name="note" type="text" value="{{$company->note}}" style="width: 300px;">
        </div>
    </div>
    <br/>
    </div>
</div>
    <div class="tagContent" id=tagContent0>

    <div class="ui form">
    <br/>
    <br/>
        <div class="two fields">
            <div class="inline field">
              <label>联系人:</label>
              <input name="creater" type="text"readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>职务:</label>
              <input name="create_time" type="text" placeholder="2015-12-10" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话:</label>
              <input name="modifier" type="text" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>手机:</label>
              <input name="modifie_time" type="text" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>Email:&nbsp;&nbsp;&nbsp;</label>
              <input name="enable_person" type="text"  readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>Q&nbsp;&nbsp;Q:</label>
              <input name="enable_time" type="text"  readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址:</label>
              <input name="address" type="text" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>传真:</label>
              <input name="fax" type="text" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="field">
            <div class="inline field">
              <label>备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注:</label>
              <input name="note" type="text" readonly="" style="width: 750px;">
            </div>
        </div>
<br/>
    </div>
    </div>
    <div class="tagContent" id=tagContent2>

    <div class="ui form">
    <br/>
    <br/>
        <div class="two fields">
            <div class="inline field">
              <label>分管部门:</label>
              <input name="c_departmentr" type="text" value="{{$company->c_department}}" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>业&nbsp;&nbsp;务&nbsp;&nbsp;员:&nbsp;</label>
              <input name="salesmen" type="text"  value="{{$company->salesmen}}" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>税&nbsp;&nbsp;&nbsp;率&nbsp;&nbsp;&nbsp;%:</label>
              <input name="tax" type="text"  value="{{$company->tax}}" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>税&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号:&nbsp;</label>
              <input name="t_number" type="text"  value="{{$company->t_number}}" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>开&nbsp;&nbsp;户&nbsp;&nbsp;行:&nbsp;</label>
              <input name="bank" type="text"  value="{{$company->bank}}" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>银行账号:</label>
              <input name="b_number" type="text"  value="{{$company->b_number}}" readonly="" style="width: 300px;">
            </div>
        </div>
       <div class="two fields">
            <div class="inline field">
              <label>折扣率&nbsp;%:</label>
              <input name="discount" type="text"  value="{{$company->discount}}" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>信用额度:</label>
              <input name="credit" type="text"  value="{{$company->credit}}" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>创&nbsp;&nbsp;建&nbsp;&nbsp;人:&nbsp;</label>
              <input name="create_person" type="text"  value="{{$company->create_person}}" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>创建时间:</label>
              <input name="create_time" type="text"  value="{{$company->create_time}}" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>修&nbsp;&nbsp;改&nbsp;&nbsp;人:&nbsp;</label>
              <input name="change_person" type="text"  value="{{$company->change_person}}" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>修改时间:</label>
              <input name="change_time" type="text"  value="{{$company->change_time}}" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>停&nbsp;&nbsp;用&nbsp;&nbsp;人:&nbsp;</label>
              <input name="stop_person" type="text"  value="{{$company->stop_person}}" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>停用时间:</label>
              <input name="stop_time" type="text"  value="{{$company->stop_time}}" readonly="" style="width: 300px;">
            </div>
        </div>
<br/>
    </div>
    </div>

  </div>
      <div style="position:absolute; bottom:20px; right: 20px;">
      <a href="/dream/contact"><button class="ui blue submit button"><i class="reply icon"></i>返回 </button></a>
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
</form>
</div>
@stop

