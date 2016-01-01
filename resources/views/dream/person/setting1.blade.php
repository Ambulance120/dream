
@extends('...master')

@section('style')

.black_overlay{
    display: none;
    position: absolute;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color:black;
    z-index:1001;
    -moz-opacity: 0.8;
    opacity:.80;
    filter: alpha(opacity=88);
}
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
.close{
   position:absolute;
   right:10px;
   top:5px;
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
<div class="ui top attached tabular menu">
  <a class="active item">
    部门设置
  </a>
</div>


<div class="ui buttons">
  <div class="ui blue basic button"><i class="file excle outline icon"></i> 输出</div>
  <div class="ui purple basic button"><p><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"> <i class="plus icon"></i>增加</a></p></div>
  <div class="ui teal basic button"><p><a href = "javascript:void(0)" onclick = "document.getElementById('light1').style.display='block';document.getElementById('fade1').style.display='block'"><i class="edit icon"></i>修改</a></p></div>
  <div class="ui orange basic button"><p><a href = "javascript:void(0)" onclick = "document.getElementById('light2').style.display='block';document.getElementById('fade2').style.display='block'"><i class="remove icon"></i>删除</a></p></div>
  <div class="ui pink basic button"><p><a href = "javascript:void(0)" onclick = "document.getElementById('light3').style.display='block';document.getElementById('fade3').style.display='block'"><i class="search icon"></i>查询</a></p></div>
  <div class="ui teal basic button"><p><a href = "javascript:void(0)" onclick = "document.getElementById('light4').style.display='block';document.getElementById('fade4').style.display='block'"><i class="payment icon"></i>查看</a></p></div>
  <div class="ui green basic button"><i class="undo icon"></i>刷新</div>
  <div class="ui red basic button"><p><a href = "javascript:void(0)" onclick = "document.getElementById('light5').style.display='block';document.getElementById('fade5').style.display='block'"><i class="stop icon"></i>停用</a></p></div>
  <div class="ui blue basic button"><i class="setting icon"></i>配置</div>
</div>



<div id="light" class="white_content"> <a class="close" href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">X</a>
    <form action="/dream/setting1/save/">
        <div class="content"><i class="big blue plus icon"></i>部门设置 — 新增 </div>
        <hr>
        <div id=con>
              <ul id=tags>
                <li class=selectTag><a onClick="selectTag('tagContent1',this)"
                href="javascript:void(0)">基本信息</a> </li>
                <li><a onClick="selectTag('tagContent0',this)"
                href="javascript:void(0)">其他信息</a> </li>
              </ul>
              <div id=tagContent>
                <div class="tagContent selectTag" id=tagContent1>
                    <div class="ui form">
                        <br/>
                            <div class="two fields">
                                <div class="inline field">
                                  <label>部门编码:</label>
                                  <input name="number" value="" type="text" style="width: 300px;">
                                </div>
                                <div class="inline field">
                                  <label>部门名称:</label>
                                  <input name="name" value="" type="text" style="width: 300px;">
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="inline field">
                                  <label>上级部门:</label>
                                  <input name="higher" type="text" style="width: 300px;">
                                </div>
                                <div class="inline field">
                                  <label>&nbsp;助&nbsp;&nbsp;记&nbsp;&nbsp;码:</label>
                                  <input name="help" type="text" placeholder="手工录入或自动生成" style="width: 300px;">
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="inline field">
                                  <label>部门属性:</label>
                                  <input name="attribute" type="text" style="width: 300px;">
                                </div>
                                <div class="inline field">
                                  <label>&nbsp;负&nbsp;&nbsp;责&nbsp;&nbsp;人:</label>
                                  <input name="charge" type="text" style="width: 300px;">
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="inline field">
                                  <label>&nbsp;电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话:</label>
                                  <input name="phone" type="text" style="width: 300px;">
                                </div>
                                <div class="inline field">
                                  <label>&nbsp;传&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;真:</label>
                                  <input name="fax" type="text" style="width: 300px;">
                                </div>
                            </div>
                            <div class="field">
                                <div class="inline field">
                                    <label>&nbsp;备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注&nbsp;:</label>
                                    <input name="remark" type="text" style="width: 704px;">
                                </div>
                            </div>
                    </div>
                </div>
                <div class="tagContent" id=tagContent0>
                    <div class="ui form">
                        <br/>
                        <br/>
                        <div class="two fields">
                            <div class="inline field">
                                <label>创建人:</label>
                                <input name="creater" type="text" placeholder="基础版体验用户" readonly="" style="width: 300px;">
                            </div>
                            <div class="inline field">
                                <label>创建时间:</label>
                                <input name="create_time" type="text" placeholder="2015-12-10" readonly="" style="width: 300px;">
                            </div>
                        </div>
                        <div class="two fields">
                            <div class="inline field">
                              <label>修改人:</label>
                              <input name="modifier" type="text" readonly="" style="width: 300px;">
                            </div>
                            <div class="inline field">
                              <label>修改时间:</label>
                              <input name="modifie_time" type="text" readonly="" style="width: 300px;">
                            </div>
                        </div>
                        <div class="two fields">
                            <div class="inline field">
                              <label>启用人:</label>
                              <input name="enable_person" type="text"  readonly="" style="width: 300px;">
                            </div>
                            <div class="inline field">
                              <label>启用时间:</label>
                              <input name="enable_time" type="text"  readonly="" style="width: 300px;">
                            </div>
                        </div>
                        <div class="two fields">
                            <div class="inline field">
                              <label>停用人:</label>
                              <input name="disable_person" type="text" readonly="" style="width: 300px;">
                            </div>
                            <div class="inline field">
                              <label>停用时间:</label>
                              <input name="disable_time" type="text" readonly="" style="width: 300px;">
                            </div>
                        </div>

                    </div>
                </div>
              </div>
              <div style="position:absolute; bottom:30px; right: 20px;">
              <button class="ui blue submit button" type="submit"><i class="save icon"></i>保存 </button>
              </div>
        </div>
    </form>


<p>
  <script type=text/javascript>
function selectTag(showContent,selfObj){
	// 操作标签
	var tag = document.getElementById("tags").getElementsByTagName("li");
	var taglength = tag.length;
	for(i=0; i<taglength; i++){
		tag[i].className = "";
	}
	selfObj.parentNode.className = "selectTag";
	// 操作内容
	for(i=0; j=document.getElementById("tagContent"+i); i++){
		j.style.display = "none";
	}
	document.getElementById(showContent).style.display = "block";
	}

</script>

</p>
</div>
<div id="fade" class="black_overlay"></div>


<div id="light1" class="white_content"> <a class="close" href = "javascript:void(0)" onclick = "document.getElementById('light1').style.display='none';document.getElementById('fade1').style.display='none'">X</a>

<div class="content"><i class="big blue plus icon"></i>部门设置 — 修改 </div>
<hr>
<div id=con>
  <ul id=tags>
    <li class=selectTag><a onClick="selectTag('tagContent3',this)"
    href="javascript:void(0)">基本信息</a> </li>
    <li><a onClick="selectTag('tagContent2',this)"
    href="javascript:void(0)">其他信息</a> </li>
  </ul>

    <div id=tagContent>
    <div class="tagContent selectTag" id=tagContent3>

<div class="ui form">
<br/>
    <div class="two fields">
        <div class="inline field">
          <label>部门编码:</label>
          <input name="id"  type="text"  style="width: 300px;">
        </div>
        <div class="inline field">
          <label>部门名称:</label>
          <input name="name" type="text" style="width: 300px;">
        </div>
    </div>
    <div class="two fields">
        <div class="inline field">
          <label>上级部门:</label>
          <input name="higher" type="text" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>&nbsp;助&nbsp;&nbsp;记&nbsp;&nbsp;码:</label>
          <input name="help" type="text" placeholder="手工录入或自动生成" style="width: 300px;">
        </div>
    </div>
    <div class="two fields">
        <div class="inline field">
          <label>部门属性:</label>
          <input name="attribute" type="text" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>&nbsp;负&nbsp;&nbsp;责&nbsp;&nbsp;人:</label>
          <input name="charge" type="text" style="width: 300px;">
        </div>
    </div>
    <div class="two fields">
        <div class="inline field">
          <label>&nbsp;电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话:</label>
          <input name="phone" type="text" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>&nbsp;传&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;真:</label>
          <input name="fax" type="text" style="width: 300px;">
        </div>
    </div>
    <div class="field">
    <div class="inline field">
      <label>&nbsp;备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注&nbsp;:</label>
      <input name="remark" type="text" style="width: 704px;">
    </div>
    </div>
</div>
</div>
    <div class="tagContent" id=tagContent2>

    <div class="ui form">
    <br/>
    <br/>
        <div class="two fields">
            <div class="inline field">
              <label>创建人:</label>
              <input name="creater" type="text" placeholder="基础版体验用户" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>创建时间:</label>
              <input name="create_time" type="text" placeholder="2015-12-10" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>修改人:</label>
              <input name="modifier" type="text" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>修改时间:</label>
              <input name="modifie_time" type="text" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>启用人:</label>
              <input name="enable_person" type="text" placeholder="基础版体验用户" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>启用时间:</label>
              <input name="enable_time" type="text" placeholder="2015-12-10" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>停用人:</label>
              <input name="disable_person" type="text" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>停用时间:</label>
              <input name="disable_time" type="text" readonly="" style="width: 300px;">
            </div>
        </div>

    </div>
    </div>

  </div>
</div>
</form>
</div>
<div id="fade1" class="black_overlay"></div>

<div id="light2" class="white_content"> <a class="close" href = "javascript:void(0)" onclick = "document.getElementById('light2').style.display='none';document.getElementById('fade2').style.display='none'">X</a></div>
<div id="fade2" class="black_overlay"></div>

<div id="light3" class="white_content"> <a class="close" href = "javascript:void(0)" onclick = "document.getElementById('light3').style.display='none';document.getElementById('fade3').style.display='none'">X</a></div>
<div id="fade3" class="black_overlay"></div>

<div id="light4" class="white_content"> <a class="close" href = "javascript:void(0)" onclick = "document.getElementById('light4').style.display='none';document.getElementById('fade4').style.display='none'">X</a>
<div class="content"><i class="big blue payment icon"></i>部门设置 — 查看 </div>
<hr>
<div id=con>
  <ul id=tags>
    <li class=selectTag><a onClick="selectTag('tagContent5',this)"
    href="javascript:void(0)">基本信息</a> </li>
    <li><a onClick="selectTag('tagContent4',this)"
    href="javascript:void(0)">其他信息</a> </li>
  </ul>

    <div id=tagContent>
    <div class="tagContent selectTag" id=tagContent5>
<div class="ui form">
<br/>
    <div class="two fields">
        <div class="inline field">
          <label>部门编码:</label>
          <input name="number"  type="text" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>部门名称:</label>
          <input name="name" type="text" style="width: 300px;">
        </div>
    </div>
    <div class="two fields">
        <div class="inline field">
          <label>上级部门:</label>
          <input name="higher" type="text" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>&nbsp;助&nbsp;&nbsp;记&nbsp;&nbsp;码:</label>
          <input name="help" type="text" placeholder="手工录入或自动生成" style="width: 300px;">
        </div>
    </div>
    <div class="two fields">
        <div class="inline field">
          <label>部门属性:</label>
          <input name="attribute" type="text" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>&nbsp;负&nbsp;&nbsp;责&nbsp;&nbsp;人:</label>
          <input name="charge" type="text" style="width: 300px;">
        </div>
    </div>
    <div class="two fields">
        <div class="inline field">
          <label>&nbsp;电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话:</label>
          <input name="phone" type="text" style="width: 300px;">
        </div>
        <div class="inline field">
          <label>&nbsp;传&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;真:</label>
          <input name="fax" type="text" style="width: 300px;">
        </div>
    </div>
    <div class="field">
    <div class="inline field">
      <label>&nbsp;备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注&nbsp;:</label>
      <input name="remark" type="text" style="width: 704px;">
    </div>
    </div>
</div>
</div>

    <div class="tagContent" id=tagContent4>

    <div class="ui form">
    <br/>
    <br/>
        <div class="two fields">
            <div class="inline field">
              <label>创建人:</label>
              <input name="creater" type="text" placeholder="基础版体验用户" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>创建时间:</label>
              <input name="create_time" type="text" placeholder="2015-12-10" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>修改人:</label>
              <input name="modifier" type="text" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>修改时间:</label>
              <input name="modifie_time" type="text" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>启用人:</label>
              <input name="enable_person" type="text" placeholder="基础版体验用户" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>启用时间:</label>
              <input name="enable_time" type="text" placeholder="2015-12-10" readonly="" style="width: 300px;">
            </div>
        </div>
        <div class="two fields">
            <div class="inline field">
              <label>停用人:</label>
              <input name="disable_person" type="text" readonly="" style="width: 300px;">
            </div>
            <div class="inline field">
              <label>停用时间:</label>
              <input name="disable_time" type="text" readonly="" style="width: 300px;">
            </div>
        </div>

    </div>
    </div>

  </div>
</div>

</div>
<div id="fade4" class="black_overlay"></div>

<div id="light5" class="white_content"> <a class="close" href = "javascript:void(0)" onclick = "document.getElementById('light5').style.display='none';document.getElementById('fade5').style.display='none'">X</a></div>
<div id="fade5" class="black_overlay"></div>


 <table class="ui celled center aligned table">
    <thead>
      <tr>
        <th>部门名称</th>
        <th>部门编码</th>
        <th>上级部门</th>
        <th>部门负责人</th>
        <th>电话</th>
        <th>传真</th>
        <th>状态</th>
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
     <td><a href = "javascript:void(0)" onclick = "document.getElementById('light1').style.display='block';document.getElementById('fade1').style.display='block'"><i class="edit icon"></i>修改</a></td>

     <td><i class="remove icon"></i>删除</td>

     <td><i class="payment icon"></i>查看</td>

 </tr>
@endforeach
    </tbody>
  </table>


@stop
