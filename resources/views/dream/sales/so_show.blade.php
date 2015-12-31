@extends('dream.master')
@section('title')销售单@stop
@section('style')

.white_content {
    position: absolute;
    top: 8%;
    left: 20%;
    width: 650px;;
    height: 410px;
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
<div class="content"><i class="big blue edit icon"></i>销售单 — 查看 </div>
<hr>
<br/>
    <div class="ui form">
    <div class="inline field">
      <label>单据号:&nbsp;&nbsp;&nbsp;</label>
      <input name="number" value="{{$sales->number}}" type="text" style="width: 500px;">
    </div>
    <div class="inline field">
      <label>销售部门:</label>
      <input name="department" value="{{$sales->department}}" type="text" style="width: 500px;">
    </div>
    <div class="inline field">
      <label>客&nbsp;&nbsp;&nbsp;户:&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input name="client" value="{{$sales->client}}" type="text" style="width: 500px;">
    </div>
     <div class="inline field">
      <label>销售员:&nbsp;&nbsp;&nbsp;</label>
      <input name="seller" value="{{$sales->seller}}" type="text" style="width: 500px;">
    </div>
     <div class="inline field">
      <label>销售金额:</label>
      <input name="amount" value="{{$sales->amount}}" type="text" style="width: 500px;">
    </div>
    </div>

    <div style="position:absolute; bottom:20px; right: 20px;">
       <a href="/dream/sorder"> <button class="ui blue button"><i class="reply icon"></i>返回 </button></a>
      </div>
</div>
@stop

