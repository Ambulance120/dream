@extends('dream.master')
@section('title')存货分类@stop
@section('style')
.white_content {
    display: none;
    position: absolute;
    top: 15%;
    left: 7%;
    width: 400px;
    height: 1000px;
    padding: 20px;
    border: 1px solid #4183c4;
    background-color: white;
    z-index:1002;
    overflow: auto;
}
.table.adjust{
    width:600px;
    margin-left:15px;
}
.massage{
    color: red;
    font-family: "Microsoft YaHei", "SimHei", "SimSun";
    font-size: 15;
    line-height: 10px;
    padding-left:200px;
    padding-top:20px;
}
@stop



@section('content')
<div class="ui top attached tabular menu">
  <a class="active item">
    存货分类
  </a>
</div>

<div class="ui buttons">
  <a href="/dream/inventory/excel"><div class="ui blue basic button"><i class="file excle outline icon"></i> 输出</div></a>
  <a href="/dream/inventory/edit"><div class="ui purple basic button"><i class="plus icon"></i>增加</div></a>
  <a href="javascript:location.reload();"><div class="ui green basic button"><i class="undo icon"></i>刷新</div></a>
  <div class="ui blue basic button"><i class="setting icon"></i>配置</div>
</div>
            @if(Session::has('message'))
                <p class="massage">{{Session::get('message')}}</p>
            @endif
  <table class="ui celled center aligned table adjust">
    <thead>
      <tr>

        <th>分类编码</th>
        <th>分类名称</th>
        <th>上级分类</th>
        <th  colspan="3">操作</th>
      </tr>
    </thead>

    <tbody>
    @foreach($stocks as $s)
      <tr>
           <td>{{$s->id}}</td>
           <td>{{$s->name}}</td>
           <td>{{$s->higher}}</td>
           <td><a href="/dream/inventory/edit/{{$s->id}}"><i class="edit icon"></i>修改</a></td>

           <td><a href="/dream/inventory/delete/{{$s->id}}"><i class="remove icon"></i>删除</a></td>

           <td><a href="/dream/inventory/show/{{$s->id}}"><i class="payment icon"></i>查看</a> </td>
      </tr>
    @endforeach



    </tbody>
  </table>

</div>




@stop
