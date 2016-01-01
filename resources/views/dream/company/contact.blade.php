@extends('dream.master')
@section('title')往来单位@stop
@section('style')

.white_content {
    display: none;
    position: absolute;
    top: 15%;
    left: 7%;
    width: 80%;
    height: 500px;
    padding: 20px;
    border: 1px solid #4183c4;
    background-color: white;
    z-index:1002;
    overflow: auto;
}

.table.adjust{
    width:1100px;
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
    往来单位
  </a>
</div>

<div class="ui buttons">
  <a href="/dream/contact/excel"><div class="ui blue basic button"><i class="file excle outline icon"></i> 输出</div></a>
  <a href="/dream/contact/edit"><div class="ui purple basic button"><i class="plus icon"></i>增加</div></a>
  <a href="/dream/contact/bcheck"><div class="ui pink basic button"><i class="search icon"></i>查询</div></a>
  <a href="javascript:location.reload();"><div class="ui green basic button"><i class="undo icon"></i>刷新</div></a>
  <div class="ui blue basic button"><i class="setting icon"></i>配置</div>
</div>
                @if(Session::has('message'))
                    <p class="massage">{{Session::get('message')}}</p>
                 @endif
  <table class="ui celled center aligned table adjust">
    <thead>
      <tr>
        <th>单位名称</th>
        <th>单位编码</th>
        <th>单位类别</th>
        <th>单位分类</th>
        <th>单位电话</th>
        <th>单位地址</th>
        <th>首要联系人</th>
        <th>备注</th>
        <th>业务员</th>
        <th>状态</th>
        <th  colspan="3">操作</th>
      </tr>
    </thead>

    <tbody>
    @foreach($companys as $c)
      <tr>
           <td>{{$c->name}}</td>
           <td>{{$c->id}}</td>
           <td>{{$c->category}}</td>
           <td>{{$c->classification}}</td>
           <td>{{$c->phone}}</td>
           <td>{{$c->address}}</td>
           <td>{{$c->p_contact}}</td>
           <td>{{$c->note}}</td>
           <td>{{$c->salesmen}}</td>
           <td>{{$c->state}}</td>
           <td><a href="/dream/contact/edit/{{$c->id}}"><i class="edit icon"></i>修改</a></td>
           <td><a href="/dream/contact/delete/{{$c->id}}"><i class="remove icon"></i>删除</a></td>
           <td><a href="/dream/contact/show/{{$c->id}}"><i class="payment icon"></i>查看</a> </td>
      </tr>
    @endforeach



    </tbody>
  </table>

</div>




@stop
