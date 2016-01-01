@extends('dream.master')
@section('title')存货分类@stop
@section('style')

.white_content {
    position: absolute;
    top: 8%;
    left: 20%;
    width: 50%;
    height: 300px;;
    padding: 20px;
    border: 1px solid #4183c4;
    background-color: white;
    z-index:1002;
    overflow: auto;
}
@stop
@section('content')
<div class="white_content">
<div class="content"><i class="big blue payment icon"></i>存货分类 — 查看 </div>
<hr>
<br/>
    <div class="ui form">
    <div class="inline field">
      <label>分类编码:</label>
      <input name="id" value="{{$stock['id']}}" type="text" style="width: 85%;">
    </div>
    <div class="inline field">
      <label>分类名称:</label>
      <input name="name" value="{{$stock['name']}}" type="text" style="width: 85%;">
    </div>
    <div class="inline field">
      <label>上级分类:</label>
      <input name="higher" value="{{$stock['higher']}}" type="text" style="width: 85%;">
    </div>
    </div>
    <div style="position:absolute; top:240px; right: 36px;">
      <a href="/dream/inventory"> <button class="ui blue submit button"><i class="reply icon"></i>返回 </button></a>
      </div>
</div>
@stop

