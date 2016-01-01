@extends('dream.master')
@section('title')发运方式@stop
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
<div class="content"><i class="big blue payment icon"></i>发运方式 — 查看 </div>
<hr>
<br/>
    <div class="ui form">
    <div class="inline field">
      <label>编码:</label>
      <input name="id" value="{{$other->id}}" readonly="" type="text" style="width: 500px;">
    </div>
    <div class="inline field">
      <label>名称:</label>
      <input name="name" value="{{$other->name}}" readonly="" type="text" style="width: 500px;">
    </div>
    </div>

    <div style="position:absolute; bottom:20px; right: 20px;">
      <a href="/dream/shipping"><button class="ui blue submit button"><i class="reply icon"></i>返回</button></a>
      </div>
</div>
@stop

