@extends('dream.master')
@section('title')部门设置@stop
@section('style')

.white_content {
    position: absolute;
    top: 8%;
    left: 7%;
    width: 80%;
    height: 480px;
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
<div class="content"><i class="big blue payment icon"></i>部门设置 — 查看 </div>
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

<br/>
    <div class="two fields">
        <div class="inline field">
          <label>部门编码:</label>
          <input name="number" type="text" value="{{$person->id}}" readonly="" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>部门名称:</label>
          <input name="name" type="text" value="{{$person->name}}" readonly="" style="width: 300px;">
        </div>
    </div>
    <div class="two fields">
        <div class="inline field">
          <label>上级部门:</label>
          <input name="higher" type="text" value="{{$person->higher}}" readonly="" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>&nbsp;助&nbsp;&nbsp;记&nbsp;&nbsp;码:</label>
          <input name="help" type="text" placeholder="手工录入或自动生成" readonly="" style="width: 300px;">
        </div>
    </div>
    <div class="two fields">
        <div class="inline field">
          <label>部门属性:</label>
          <input name="attribute" type="text" readonly="" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>&nbsp;负&nbsp;&nbsp;责&nbsp;&nbsp;人:</label>
          <input name="charge" type="text" value="{{$person->charge}}" readonly="" style="width: 300px;">
        </div>
    </div>
    <div class="two fields">
        <div class="inline field">
          <label>&nbsp;电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话:</label>
          <input name="phone" type="text" value="{{$person->phone}}" readonly="" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>&nbsp;传&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;真:</label>
          <input name="fax" type="text" value="{{$person->fax}}" readonly="" style="width: 300px;">
        </div>
    </div>
    <div class="field">
    <div class="inline field">
      <label>&nbsp;备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注&nbsp;:</label>
      <input name="remark" type="text" value="{{$person->note}}" readonly="" style="width: 704px;">
    </div>
    <br/>
    </div>

</div>
</div>

    <div class="tagContent" id=tagContent0>

    <div class="ui form">
    <br/>
    <br/>
        <div class="two fields">
            <div class="inline field">
              <label>创建人:</label>
              <input name="creater" type="text" value="{{$person->create_person}}" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>创建时间:</label>
              <input name="create_time" type="text" value="{{$person->create_at}}" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>修改人:</label>
              <input name="modifier" type="text" value="{{$person->change_person}}" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>修改时间:</label>
              <input name="modifie_time" type="text" value="{{$person->update_at}}" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>启用人:</label>
              <input name="enable_person" type="text"  readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>启用时间:</label>
              <input name="enable_time" type="text"  readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>停用人:</label>
              <input name="disable_person" type="text" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>停用时间:</label>
              <input name="disable_time" type="text" readonly="" style="width: 300px;">

            </div>

        </div>

    </div>
    <br/> <br/>
    </div>

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
<div style="position:absolute; bottom:8px; right: 20px;">
      <a href="/dream/setting"> <div class="ui blue submit button"><i class="reply icon"></i> 返回 </div></a>
      </div>
</div>
@stop

