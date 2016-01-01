@extends('dream.master')
@section('title')采购类型@stop
@section('style')
.white_content {
    position: absolute;
    top: 15%;
    left: 7%;
    width: 800px;
    padding: 20px;
    border: 1px solid #4183c4;
}
.table.adjust{
    width:700px;
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
    采购类型
  </a>
</div>
<div class="ui buttons">
  <a href="/dream/type/excel"><div class="ui blue basic button"><i class="file excle outline icon"></i> 输出</div></a>
  <a href="/dream/type/edit"><div class="ui purple basic button"><i class="plus icon"></i>增加</div></a>
  <a href="javascript:location.reload();"><div class="ui green basic button"><i class="undo icon"></i>刷新</div></a>
</div>
                 @if(Session::has('message'))
                    <p class="massage">{{Session::get('message')}}</p>
                 @endif
  <table class="ui celled center aligned table adjust">
    <thead>
      <tr>
        <th>类型编码</th>
        <th>类型名称</th>
        <th  colspan="4">操作</th>
      </tr>
    </thead>

    <tbody>
    @foreach($purchase as $p)
      <tr>
           <td>{{$p->id}}</td>
           <td>{{$p->name}}</td>
           <td><a href="/dream/type/edit/{{$p->id}}"><i class="edit icon"></i>修改</a></td>

           <td><a href="/dream/type/delete/{{$p->id}}"><i class="remove icon"></i>删除</a></td>

           <td><a href="/dream/type/show/{{$p->id}}"><i class="payment icon"></i>查看</a> </td>
      </tr>
   @endforeach
    </tbody>
  </table>
</div>




@stop
