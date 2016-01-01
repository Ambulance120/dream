@extends('dream.master')
@section('title')人员类别@stop
@section('style')

.white_content {
    position: absolute;
    top: 8%;
    left: 20%;
    width: 50%;
    height: 45%;
    padding: 20px;
    border: 1px solid #4183c4;
    background-color: white;
    z-index:1002;
    overflow: auto;
}
@stop
@section('content')
<div class="white_content">
<div class="content"><i class="big blue payment icon"></i>人员类别 — 查看 </div>
<hr>
<br/>
    <div class="ui form">
    <div class="inline field">
      <label>类别编码:</label>
      <input name="ID" value="{{$person->id}}" readonly="" type="text" style="width: 500px;">
    </div>
    <div class="inline field">
      <label>类别名称:</label>
      <input name="name" value="{{$person->name}}" readonly="" type="text" style="width: 500px;">
    </div>
    <div class="inline field">
      <label>父类别:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input name="higher" value="{{$person->higher}}" readonly="" type="text" style="width: 500px;">
    </div>
    </div>
    <div style="position:absolute; bottom:20px; right: 20px;">
          <a href="/dream/category"> <button class="ui blue submit button"><i class="reply icon"></i>返回</button></a>
          </div>
</form>
</div>
@stop

