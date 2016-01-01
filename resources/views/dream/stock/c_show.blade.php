@extends('dream.master')
@section('title')单位换算@stop
@section('style')

.white_content {
    position: absolute;
    top: 8%;
    left: 20%;
    width: 50%;
    height: 70%;
    padding: 20px;
    border: 1px solid #4183c4;
    background-color: white;
    z-index:1002;
    overflow: auto;
}
@stop
@section('content')
<div class="white_content">
<div class="content"><i class="big blue payment icon"></i>单位换算 — 查看 </div>
<hr>
<br/>
    <div class="ui form">
    <div class="inline field">
      <label>主计量单位:</label>
      <input name="m_unit" value="{{$stock->m_unit}}" readonly="" type="text" style="width: 500px;">
    </div>
    <div class="inline field">
      <label>辅计量单位:</label>
      <input name="a_unit" value="{{$stock->a_unit}}" readonly="" type="text" style="width: 500px;">
    </div>
    <div class="inline field">
      <label>换算组名称:</label>
      <input name="name" value="{{$stock->name}}" readonly="" type="text" style="width: 500px;">
    </div>
     <div class="inline field">
      <label>换算率:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input name="rate" value="{{$stock->rate}}" readonly="" type="text" style="width: 500px;">
    </div>
    <div class="field" style="height: 35px; padding-left: 80px;">
    <label>注释:主计量单位数量=辅计量单位数量*换算率</label>
    </div>
     <div class="field">
    <label>例如：一箱有100包，主单位为"包"，辅单位为"箱"，换算率为100（包装数）, 或者 主单位为"箱"，辅单位为"包"，换算率为0.01（1/100）。</label>
    </div>
    </div>

    <div style="position:absolute; bottom:20px; right: 20px;">
      <a href="/dream/conversion"> <button class="ui blue submit button"><i class="reply icon"></i>返回 </button></a>
      </div>
</div>
@stop

