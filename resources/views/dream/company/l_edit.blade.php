@extends('dream.master')
@section('title')地区设置@stop
@section('style')

.white_content {
    position: absolute;
    top: 8%;
    left: 20%;
    width: 50%;
    height: 300px;
    padding: 20px;
    border: 1px solid #4183c4;
    background-color: white;
    z-index:1002;
    overflow: auto;
}
@stop
@section('content')
<div class="white_content">
<form action="/dream/locale/save/{{$company['id']}}">
<div class="content"><i class="big blue edit icon"></i>地区设置 — 编辑 </div>
<hr>
<br/>
    <div class="ui form">
    <div class="inline field">
      <label>地区编码:</label>
      <input name="id" value="{{$company['id']}}" readonly placeholder="自动编码" type="text" style="width: 85%;">
    </div>
    <div class="inline field">
      <label>地区名称:</label>
      <input name="name" value="{{$company['name']}}" type="text" style="width: 85%;">
    </div>
     <div class="inline field">
      <label>上级地区:</label>
      <input name="higher" value="{{$company['higher']}}" type="text" style="width: 85%;">
    </div>
    </div>

    <div style="position:absolute; top:240px; right: 36px;">
      <button class="ui blue submit button"><i class="save icon"></i>保存 </button>
      </div>
</form>
</div>
@stop

