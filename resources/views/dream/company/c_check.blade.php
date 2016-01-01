@extends('dream.master')
@section('title')往来单位@stop
@section('style')
.white_content {
    position: absolute;
    top: 8%;
    left: 7%;
    width: 800px;
    height:350px;
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
    <form action="/dream/contact/check" method="get">
        <div class="content"><i class="big blue check icon"></i>查询条件</div>
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
                           <td>单位类别</td>
                           <td>等于</td>
                           <td><input type="text" name="category" value="{{$companys['category']}}"> </td>
                      </tr>
                      <tr>
                             <td>2</td>
                             <td>单位编码</td>
                             <td>等于</td>
                             <td><input type="text" name="id" value="{{$companys['id']}}"></td>

                      </tr>
                      <tr>
                             <td>3</td>
                             <td>单位名称</td>
                             <td>等于</td>
                             <td><input type="text" name="name" value="{{$companys['name']}}"></td>
                      </tr>
                      <tr>
                           <td>4</td>
                           <td>业务员</td>
                           <td>等于</td>
                           <td><input type="text" name="salesman" value="{{$companys['salesman']}}"></td>
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

