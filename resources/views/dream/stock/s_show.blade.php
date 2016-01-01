@extends('dream.master')
@section('title')仓库设置@stop
@section('style')

.white_content {
    position: absolute;
    top: 8%;
    left: 20%;
    width: 650px;;
    height: 560px;
    padding: 20px;
    border: 1px solid #4183c4;
    background-color: white;
    z-index:1002;
    overflow: auto;
}
.checkbox {
  position: relative;
  top:22px;
  left:20%;
  display: inline-block;
}
.checkbox:after, .checkbox:before {
  font-family: FontAwesome;
  -webkit-font-feature-settings: normal;
     -moz-font-feature-settings: normal;
          font-feature-settings: normal;
  -webkit-font-kerning: auto;
     -moz-font-kerning: auto;
          font-kerning: auto;
  -webkit-font-language-override: normal;
     -moz-font-language-override: normal;
          font-language-override: normal;
  font-stretch: normal;
  font-style: normal;
  font-synthesis: weight style;
  font-variant: middle;
  font-weight: normal;
  text-rendering: auto;
}
.checkbox label {
  width: 50px;
  height: 25px;
  background: #ccc;
  position: relative;
  display: inline-block;
  border-radius: 46px;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
.checkbox label:after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  border-radius: 100%;
  left: 0;
  top: 0px;
  z-index: 2;
  background: #fff;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
.checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 5;
  opacity: 0;
  cursor: pointer;
}
.checkbox input:hover + label:after {
  box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2), 0 3px 8px 0 rgba(0, 0, 0, 0.15);
}
.checkbox input:checked + label:after {
  left: 25px;
}

.model-1 .checkbox input:checked + label {
  background: #376ecb;
}
.model-1 .checkbox input:checked + label:after {
  background: #4285F4;
}
@stop
@section('content')
<div class="white_content">
<div class="content"><i class="big blue payment icon"></i>仓库设置 — 查看 </div>
<hr>
<br/>
    <div class="ui form">
    <div class="inline field">
      <label>仓库编码:</label>
      <input name="ID" value="{{$stock->id}}" readonly="" type="text" style="width: 500px;">
    </div>
    <div class="inline field">
      <label>仓库名称:</label>
      <input name="name" value="{{$stock->name}}" type="text" readonly="" style="width: 500px;">
    </div>
    <div class="inline field">
      <label>助记码:&nbsp;&nbsp;&nbsp;</label>
      <input name="help" value="{{$stock->help}}" type="text" readonly="" style="width: 500px;">
    </div>
     <div class="inline field">
      <label>负责人:&nbsp;&nbsp;&nbsp;</label>
      <input name="pic" value="{{$stock->pic}}" type="text" readonly="" style="width: 500px;">
    </div>
     <div class="inline field">
      <label>联系电话:</label>
      <input name="phone" value="{{$stock->phone}}" type="text" readonly="" style="width: 500px;">
    </div>
     <div class="inline field">
      <label>地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址:</label>
      <input name="address" value="{{$stock->address}}" type="text" readonly="" style="width: 500px;">
    </div>
     <div class="inline field">
      <label>备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注:</label>
      <input name="note" value="{{$stock->note}}" type="text" readonly="" style="width: 500px;">
    </div>
    <div class="inline field">
          <label>是否默认:</label>
          <input name="default" value="{{$stock->default}}" type="text" readonly="" style="width: 500px;">
    </div>
    </div>
    <div style="position:absolute; bottom:20px; right: 20px;">
      <a href="/dream/setup"> <button class="ui blue submit button"><i class="reply icon"></i>返回 </button></a>
      </div>
</div>
@stop

