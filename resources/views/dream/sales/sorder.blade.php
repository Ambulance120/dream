@extends('dream.master')
@section('title')销售单@stop
@section('style')
.white_content {
    position: absolute;
    top: 15%;
    left: 7%;
    padding: 20px;
    border: 1px solid #4183c4;
}
.table.adjust{
    width:1100px    ;
    margin-left:15px;
}
.inline.field{
    padding-top: 20px;
    padding-left: 20px;
    font-size: 16px;

}
.inline.field select{
     border: solid 1px orange;
     width: 200px;
     height: 30px;
     font-size: 13px;
     padding: 0px 10px;
     border-radius:0px;
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
    销售单
  </a>
</div>
<div class="ui buttons">
  <a href="/dream/sorder/excel"><div class="ui blue basic button"><i class="file excle outline icon"></i> 输出</div></a>
  <a href="/dream/sorder/edit"><div class="ui purple basic button"><i class="plus icon"></i>增加</div></a>
  <a href="/dream/sorder/bcheck"><div class="ui pink basic button"><i class="search icon"></i>查询</div></a>
  <a href="javascript:location.reload();"><div class="ui green basic button"><i class="undo icon"></i>刷新</div></a>
</div>
  <table class="ui celled center aligned table adjust">
                   @if(Session::has('message'))
                   <p class="massage">{{Session::get('message')}}</p>
                   @endif
    <thead>
      <tr>
        <th></th>
        <th>单据状态</th>
        <th>退货标志</th>
        <th>单据号</th>
        <th>单据日期</th>
        <th>销售部门</th>
        <th>客户</th>
        <th>销售员</th>
        <th>销售金额</th>
        <th>制单人</th>
        <th>创建时间</th>
        <th  colspan="4">操作</th>
      </tr>
    </thead>

    <tbody>
    @foreach($sales as $s)
      <tr>
           <td>{{$s->id}}</td>
           <td>{{$s->state}}</td>
           <td>{{$s->flag}}</td>
           <td>{{$s->number}}</td>
           <td>{{$s->updated_date}}</td>
           <td>{{$s->department}}</td>
           <td>{{$s->client}}</td>
           <td>{{$s->seller}}</td>
           <td>{{$s->amount}}</td>
           <td>{{$s->maker}}</td>
           <td>{{$s->created_at}}</td>
           <td><a href="/dream/sorder/edit/{{$s->id}}"><i class="edit icon"></i>修改</a></td>
           <td><a href="/dream/sorder/delete/{{$s->id}}"><i class="remove icon"></i>删除</a></td>
           <td><a href="/dream/sorder/show/{{$s->id}}"><i class="payment icon"></i>查看</a> </td>
      </tr>
   @endforeach
    </tbody>
  </table>
</div>




@stop
