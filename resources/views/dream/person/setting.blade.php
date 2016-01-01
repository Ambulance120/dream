@extends('dream.master')
@section('title')部门设置@stop
@section('style')
.white_content {
    position: absolute;
    top: 15%;
    left: 7%;
    width: 800px;
    height: 500px;
    padding: 20px;
    border: 1px solid #4183c4;
}
.table.adjust{
    width:800px;
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
.red{
background-color:red;
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
    部门设置
  </a>
</div>
<div class="ui buttons">
  <a href="/dream/setting/excel"> <div class="ui blue basic button"><i class="file excle outline icon"></i> 输出</div></a>
  <a href="/dream/setting/edit"><div class="ui purple basic button"><i class="plus icon"></i>增加</div></a>
  <a href="/dream/setting/bcheck"><div class="ui pink basic button"><i class="search icon"></i>查询</div></a>
  <a href="javascript:location.reload();"><div class="ui green basic button"><i class="undo icon"></i>刷新</div></a>
</div>
  <table class="ui celled center aligned table adjust">
    <thead>
      <tr>
        <th>部门名称</th>
        <th>部门编码</th>
        <th>上级部门</th>
        <th>部门负责人</th>
        <th>电话</th>
        <th>传真</th>
        <th>状态</th>
        <th  colspan="4">操作</th>
      </tr>
    </thead>

    <tbody>
    @foreach($persons as $p)
      <tr>
           <td><i class="orange file outline icon"></i> {{$p->name}}</td>
           <td>{{$p->id}}</td>
           <td>{{$p->higher}}</td>
           <td>{{$p->charge}}</td>
           <td>{{$p->phone}}</td>
           <td>{{$p->fax}}</td>
           <td>{{$p->state}}</td>
           <td><a href="/dream/setting/edit/{{$p->id}}"><i class="edit icon"></i>修改</a></td>

           <td><a href="/dream/setting/delete/{{$p->id}}"><i class="remove icon"></i>删除</a></td>

           <td><a href="/dream/setting/show/{{$p->id}}"><i class="payment icon"></i>查看</a> </td>
      </tr>
   @endforeach


    </tbody>
  </table>
<script>
$("#btn1").on("click",function(){
   if( $(this).hasClass("red")){
        $(this).removeClass("red");
    }else{
        $(this).addClass("red");
    }
})
</script>
</div>




@stop
