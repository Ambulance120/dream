@extends('dream.master')
@section('title')销售类型@stop
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
.message{
color:red;
font-family: "Microsoft YaHei", "SimHei", "SimSun";
padding-left:300px;
margin-top:0px;
}
@stop


@section('content')
<div class="ui top attached tabular menu">
  <a class="active item">
    销售类型
  </a>
</div>
<div class="ui buttons">
  <a href="/dream/stype/excel"><div class="ui blue basic button"><i class="file excle outline icon"></i> 输出</div></a>
  <a href="/dream/stype/edit"><div class="ui purple basic button"><i class="plus icon"></i>增加</div></a>
  <a href="javascript:location.reload();"><div class="ui green basic button"><i class="undo icon"></i>刷新</div></a>
</div>
                @if(Session::has('message'))
                 <p class="message">{{Session::get('message')}}</p>
                 @endif
  <table class="ui celled center aligned table adjust">
    <thead>
      <tr>
        <th>名称</th>
        <th>编码</th>
        <th  colspan="4">操作</th>
      </tr>
    </thead>

    <tbody>
    @foreach($sales as $s)
      <tr>
           <td>{{$s->name}}</td>
           <td>{{$s->id}}</td>
           <td><a href="/dream/stype/edit/{{$s->id}}"><i class="edit icon"></i>修改</a></td>

           <td><a href="/dream/stype/delete/{{$s->id}}"><i class="remove icon"></i>删除</a></td>

           <td><a href="/dream/stype/show/{{$s->id}}"><i class="payment icon"></i>查看</a> </td>
      </tr>
   @endforeach
    </tbody>
  </table>
</div>




@stop
