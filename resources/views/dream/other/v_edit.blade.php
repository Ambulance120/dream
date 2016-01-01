@extends('dream.master')
@section('title')常用词汇@stop
@section('style')

.white_content {
    position: absolute;
    top: 8%;
    left: 20%;
    width: 50%;
    height: 40%;
    padding: 20px;
    border: 1px solid #4183c4;
    background-color: white;
    z-index:1002;
    overflow: auto;
}
@stop
@section('content')
<div class="white_content">
<form action="/dream/vocabulary/save/{{$other['id']}}">
<div class="content"><i class="big blue edit icon"></i>常用词汇 — 编辑 </div>
<hr>
<br/>
    <div class="ui form">
    <div class="inline field">
      <label>编码:</label>
      <input name="id" value="{{$other['id']}}" placeholder="自动编码" readonly="" type="text" style="width: 90%;">
    </div>
    <div class="inline field">
      <label>内容:</label>
      <input name="content" value="{{$other['content']}}" type="text" style="width: 90%;">
    </div>
    </div>

    <div style="position:inherit; padding-top: 30px; padding-left: 82%;">
      <button class="ui blue submit button"><i class="save icon"></i>保存 </button>
      </div>
</form>

</div>
@stop

