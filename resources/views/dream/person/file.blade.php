@extends('dream.master')
@section('title')人员档案@stop
@section('style')

.white_content {
    display: none;
    position: absolute;
    top: 15%;
    left: 7%;
    width: 500px;
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
ol li { margin: 8px }
#con {
    font-size: 12px;
    margin: 0px auto;
    width:98%;
}
#tags {
     padding:0px;
     margin: 0px 0px 0px 10px;
     width: 400px;
     height: 23px
 }
#tags li {
    float: left;
    list-style-type: none;
    height: 23px
}
#tags li a {
    padding:0px 28px;
    float: left;
    color: #999;
    line-height: 23px;
    height: 23px;
    text-decoration: none
}
#tags li.emptyTag {
    background: none transparent scroll repeat 0% 0%;
    width: 4px
}
#tags li.selectTag {
     background-position: left top;
     margin-bottom: -2px;
     position: relative;
     height: 25px
 }
#tags li.selectTag a {
    background-position: right top;
    color: #000;
    line-height: 25px;
    height: 25px
}
#tagContent {
    border: #aecbd4 1px solid;
    padding: 1px;
    height: 40%;
 }
.tagContent {
    padding: 10px;
    display: none;
    width: 98%;
    color: #474747;
    height: 45%;
}
#tagContent div.selectTag {
    display: block
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
    人员档案
  </a>
</div>

<div class="ui buttons">
  <a href="/dream/file/excel"><div class="ui blue basic button"><i class="file excle outline icon"></i> 输出</div></a>
  <a href="/dream/file/edit"><div class="ui purple basic button"><i class="plus icon"></i>增加</div></a>
  <a href="/dream/file/bcheck"><div class="ui pink basic button"><i class="search icon"></i>查询</div></a>
  <a href="javascript:location.reload();"><div class="ui green basic button"><i class="undo icon"></i>刷新</div></a>
  <div class="ui blue basic button"><i class="setting icon"></i>配置</div>
</div>
                     @if(Session::has('message'))
                        <p class="massage">{{Session::get('message')}}</p>
                     @endif
  <table class="ui celled center aligned table adjust">
    <thead>
      <tr>
        <th>编码</th>
        <th>姓名</th>
        <th>所属部门</th>
        <th>性别</th>
        <th>职务</th>
        <th>手机号码</th>
        <th>电话</th>
        <th>Email</th>
        <th>备注</th>
        <th>职称</th>
        <th>银行</th>
        <th>状态</th>
        <th  colspan="3">操作</th>
      </tr>
    </thead>

    <tbody>
    @foreach($persons as $p)
      <tr>
           <td>{{$p->id}}</td>
           <td>{{$p->name}}</td>
           <td>{{$p->department}}</td>
           <td>{{$p->sex}}</td>
           <td>{{$p->position}}</td>
           <td>{{$p->phone}}</td>
           <td>{{$p->telphone}}</td>
           <td>{{$p->email}}</td>
           <td>{{$p->note}}</td>
           <td>{{$p->title}}</td>
           <td>{{$p->bank}}</td>
           <td>{{$p->state}}</td>
           <td><a href="/dream/file/edit/{{$p->id}}"><i class="edit icon"></i>修改</a></td>

           <td><a href="/dream/file/delete/{{$p->id}}"><i class="remove icon"></i>删除</a></td>

           <td><a href="/dream/file/show/{{$p->id}}"><i class="payment icon"></i>查看</a> </td>
      </tr>
    @endforeach

    </tbody>
  </table>

</div>




@stop
