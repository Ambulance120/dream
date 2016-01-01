@extends('dream.master')
@section('style')
.table.adjust{
width:800px;
}

@stop
@section('content')
<div class="ui top attached tabular menu">
  <a class="active item">
   用户日志
  </a>
</div>


<div class="ui buttons">
  <div class="ui blue basic button"><i class=" icon refresh"></i> 刷新</div>
  <div class="ui purple basic button"><p><a href = "/dream/s_show"> <i class="icon find"></i>查看</a></p></div>
</div>

<br/>操作人<div class="ui input">
       <input type="text" placeholder="">
</div>

&nbsp;&nbsp;&nbsp;&nbsp;操作内容<div class="ui input">
       <input type="text" placeholder="">
</div>
<table class="ui celled center aligned table adjust">
        <tr> <thead>
         <th>操作时间</th>
         <th>操作用户</th>
         <th>操作内容</th>
         <th>用户IP</th>
        <th>操作</th>
         </thead>
         </tr>
         <tbody>

         @foreach($persons as $j)
         <tr>
              <td>{{$j->time}}</td>
              <td>{{$j->user}}</td>
              <td>{{$j->content}}</td>
              <td>{{$j->ip}}</td>
               <td><a href="/dream/s_show/{{$j->id}}">查看</a></td>
              </tr>
              @endforeach
              </tbody>
        </table>

@stop