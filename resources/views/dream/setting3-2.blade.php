@extends('dream.master')
@section('style')
.table.adjust{
width:900px;
}

@stop
@section('content')
<div class="ui top attached tabular menu">
  <a class="active item">
   编码规则
  </a>
</div>


<div class="ui buttons">
  <div class="ui blue basic button"><i class=" icon check"></i> 查看</div>
  <div class="ui purple basic button"><p><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"> <i class="icon refresh"></i>刷新</a></p></div>
</div>

<div class="tagContent" id=tagContent4>

    <div class="ui form">
    <br/>
    <br/>
        <div class="two fields">
            <div class="inline field">
              <label>选择模块:</label>
              <input name="creater" type="text" placeholder="销售管理" readonly="" style="width: 150px;">

            </div>

        </div>
        <table class="ui celled center aligned table adjust">
        <tr> <thead>
         <th>对象编码</th>
         <th>对象名称</th>
         <th>编码预览</th>
         <th>编码方式</th>
         <th>第一前缀</th>
         <th>格式</th>
          <th>操作</th>

         </thead>
         </tr>
         <tbody>

         @foreach($persons as $s)
         <tr>

              <td>{{$s->id}}</td>
              <td>{{$s->name}}</td>
              <td>{{$s->yulan}}</td>
              <td>{{$s->way}}</td>
              <td>{{$s->first}}</td>
              <td>{{$s->style}}</td>
              <td><a href="/dream/s5_show/{{$s->id}}">查看</a></td>
              </tr>
              @endforeach
              </tbody>
        </table>

</div></div>


@stop