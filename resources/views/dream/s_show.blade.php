@extends('dream.master')
@section('title')@stop
@section('style')

.white_content {
    position: absolute;
    top: 3%;
    left: 7%;
    width: 80%;
    height: 320px;;
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
<div class="content"><i class="big blue payment icon"></i>用户日志 — 查看 </div>
<hr>
<br/>
<div id=con>


    <div id=tagContent>

    <div class="tagContent selectTag" id=tagContent1>

<div class="ui form">

<br/>
    <div class="two fields">
        <div class="inline field">
          <label>操作时间</label>
          <input name="time" type="text" value="{{$j->time}}" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>操作用户</label>
          <input name="user" type="text" value="{{$j->user}}" style="width: 300px;">
        </div>
    </div>
    <div class="two fields">
        <div class="inline field">
          <label>操作内容</label>
          <input name="content" type="text" value="{{$j->content}}" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>用户IP</label>
          <input name="ip" type="text" value="{{$j->ip}}" style="width: 300px;">
        </div>
    </div>
    <br/>
    </div>
</div>


    </div>

  </div>
      <div style="position:absolute; bottom:20px; right: 20px;">
      <a href="/dream/setting2"><button class="ui blue submit button"><i class="reply icon"></i>返回 </button></a>
      </div>

</div>



</form>
</div>
@stop
