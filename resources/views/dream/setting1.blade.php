@extends('dream.master')
@section('content')
<div class="ui top attached tabular menu">
  <a class="active item">
   系统参数
  </a>
</div>


<div class="ui buttons">
  <div class="ui blue basic button"><i class=" icon edit"></i> 修改</div>
  <div class="ui purple basic button"><p><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"> <i class="icon save"></i>保存</a></p></div>
  <div class="ui teal basic button"><p><a href = "javascript:void(0)" onclick = "document.getElementById('light1').style.display='block';document.getElementById('fade1').style.display='block'"><i class="icon cancel"></i>取消</a></p></div>
  <div class="ui orange basic button"><p><a href = "javascript:void(0)" onclick = "document.getElementById('light2').style.display='block';document.getElementById('fade2').style.display='block'"><i class="icon refresh"></i>刷新</a></p></div>

</div>

<table class="ui celled center aligned table">
      <tr> <thead>
       <th>参数编码</th>
       <th>参数名称</th>
       <th>参数值</th>
       <th>参数说明</th>
       </thead></tr>
       <tbody>
       <tr>
       <td>采购管理</td></tr>
       <tr>
       <td>0206</td>
       <td>采购取价方式</td>
       <td>存货参考价</td>
       <td>设置采购业务中存货单价的默认取数来源</td>
       </tr>
       <tr>
       <td>销售管理</td></tr>
       <tr>
       <td>0306</td>
       <td>销售取价方式</td>
       <td>存货参考价</td>
       <td>设置销售业务中存货单价的默认取数来源</td>
       </tr>
       <tr>
       <td>库存管理</td></tr>
       <tr>
       <td>0404</td>
       <td>是否允许负库存</td>
       <td>是</td>
       <td>设置库存操作时是否允许存货库存量小于零</td>
       </tr>
       <tr>
       <td>0405</td>
       <td>是否启用条码管理</td>
       <td>否</td>
       <td>启用条码管理后，可扫码快速检索录入存货</td>
       </tr>
       <tr>
       <td>0407</td>
       <td>存货计价方式</td>
       <td>移动平均法</td>
       <td>设置库存中存货成本的核算方法</td></tr>
       <tr>
       <td>全局参数</td>
       </tr>
       <tr>
       <td>9903</td>
       <td>单价小数位</td>
       <td>2</td>
       <td>设置采购与销售时单价小数位</td>
       </tr>
       <tr>
        <td>9998</td>
        <td>系统启用日期</td>
        <td>&nbsp;</td>
        <td>设置系统期初数据的截止及系统业务初始时间点</td>
        </tr>
    </tbody>
</table>
@stop

