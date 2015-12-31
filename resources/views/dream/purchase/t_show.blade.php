@extends('dream.master')
@section('title')采购类型@stop
@section('style')

.white_content {
    position: absolute;
    top: 8%;
    left: 20%;
    width: 50%;
    height: 38%;
    padding: 20px;
    border: 1px solid #4183c4;
    background-color: white;
    z-index:1002;
    overflow: auto;
}

@stop
@section('content')
<div class="white_content">
     <div class="content"><i class="big blue edit icon"></i>采购类型 — 编辑 </div>
            <hr>
            <br/>
     <div class="ui form">
         <div class="inline field">
            <label>类型编码:</label>
             <input name="ID" value="{{$purchase->id}}" readonly="" type="text" style="width: 500px;">
         </div>
         <div class="inline field">
            <label>类型名称:</label>
            <input name="name" value="{{$purchase->name}}" readonly="" type="text" style="width: 500px;">
         </div>
     </div>
     <div style="position:absolute; bottom:20px; right: 20px;">
        <a href="/dream/type"> <button class="ui blue button"><i class="reply icon"></i>返回 </button></a>
     </div>
</div>
@stop

