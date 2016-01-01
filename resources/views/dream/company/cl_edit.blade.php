@extends('dream.master')
@section('title')单位分类@stop
@section('style')

.white_content {
    position: absolute;
    top: 8%;
    left: 20%;
    width: 50%;
    height: 54%;
    padding: 20px;
    border: 1px solid #4183c4;
    background-color: white;
    z-index:1002;
    overflow: auto;
}
@stop
@section('content')
<div class="white_content">
<form action="/dream/classify/save/{{$company['id']}}">
<div class="content"><i class="big blue edit icon"></i>单位分类 — 编辑 </div>
<hr>
<br/>
    <div class="ui form">
    <div class="inline field">
      <label>分类编码:</label>
      <input name="id" value="{{$company['id']}}" readonly placeholder="自动编号" type="text" style="width: 500px;">
    </div>
    <div class="inline field">
      <label>分类名称:</label>
      <input name="name" value="{{$company['name']}}" type="text" style="width: 500px;">
    </div>
    <div class="inline field">
      <label>单位类别:</label>
      <input name="category" value="{{$company['category']}}" type="text" style="width: 500px;">
    </div>
     <div class="inline field">
      <label>上级分类:</label>
      <input name="higher" value="{{$company['higher']}}" type="text" style="width: 500px;">
    </div>
    </div>

    <div style="position:absolute; bottom:20px; right: 20px;">
      <button class="ui blue submit button"><i class="save icon"></i>保存 </button>
      </div>
</form>
</div>
@stop

