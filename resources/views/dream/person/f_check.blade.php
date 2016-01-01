@extends('dream.master')
@section('title')人员档案@stop
@section('style')

.white_content {
    position: absolute;
    top: 8%;
    left: 7%;
    width: 800px;
    height:450px;
    padding: 20px;
    border: 1px solid #4183c4;
    background-color: white;
    z-index:1002;
    overflow: auto;
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

@stop
@section('content')
<div class="white_content">
    <form action="/dream/file/check" method="get">
        <div class="content"><i class="big blue check icon"></i>查询条件 </div>
            <hr>
        <div id=con>
                <table class="ui celled center aligned table adjust">
                    <thead>
                      <tr>
                        <th></th>
                        <th>条件名称</th>
                        <th>关系符</th>
                        <th>条件</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                           <td>1</td>
                           <td>编码</td>
                           <td>等于</td>
                           <td><input type="text" name="id" value="{{$persons['id']}}"> </td>
                      </tr>
                      <tr>
                             <td>2</td>
                             <td>名称</td>
                             <td>等于</td>
                             <td><input type="text" name="name" value="{{$persons['name']}}"></td>

                      </tr>
                      <tr>
                             <td>3</td>
                             <td>性别</td>
                             <td>等于</td>
                             <td><input type="text" name="sex" value="{{$persons['sex']}}"></td>
                      </tr>
                       <tr>
                               <td>4</td>
                               <td>所属部门</td>
                               <td>等于</td>
                               <td><input type="text" name="department" value="{{$persons['department']}}"></td>
                       </tr>
                        <tr>
                                <td>5</td>
                                <td>人员类别</td>
                                <td>等于</td>
                                <td><input type="text" name="p_category" value="{{$persons['p_category']}}"></td>
                        </tr>
                         <tr>
                                 <td>6</td>
                                 <td>人员属性</td>
                                 <td>等于</td>
                                 <td><input type="text" name="p_attribute" value="{{$persons['p_attribute']}}"></td>
                         </tr>
                          <tr>
                                  <td>7</td>
                                  <td>职称</td>
                                  <td>等于</td>
                                  <td><input type="text" name="title" value="{{$persons['title']}}"></td>
                          </tr>
                    </tbody>
                </table>
        </div>
         <div style="position:absolute; bottom:20px; right: 20px;">
            <button class="ui blue submit button"><i class="check icon"></i>查询 </button>
         </div>
    </form>
</div>
@stop

