<?php $csrf = csrf_field(); ?>
<html>
<head>
<title> New Document </title>
</head>
<body >
<div>
<form action="/foo/bar" method="post" >
{{$csrf}}
<legend>表单的注册</legend>
<table width=100% >
<tbody>
<tr ><td width=40% align="right"><label for="t1">姓 名：</label></td>
<td><input type="text" id="t1" name="Name"></td>
</tr>
<tr><td width=40% align="right"><label for="Password1">密 码：</label></td>
<td><input id="Password1" type="password" name="Password" /></td>
</tr>
<tr><td width=40% align="right"><label for="e1">邮 箱：</label></td>
<td><input type="email" id="e1" name="youxiang" ></td>
</tr>
<tr><td width=40% align="right"><label for="1">性 别：</label></td>
<td><input type="radio" id="1" name="ssex" value="nan" />男<!-- name设置成一样的就行了-->
<input type="radio" id="2" name="ssex" value="nv" />女
</td>
</tr>
<tr><td width=40% align="right">地 区：</td>
<td><select id="selc" name="place">
<option value="quanzhou">泉州</option>
<option value="xiamen">厦门</option>
<option value="zhangzhou" >漳州</option>
</select>
</td>
</tr>
<tr><td width=40% align="right"><label for="txtarea">简 介：</label></td>
<td><textarea id="txtarea"></textarea></td>
</tr>
<tr><td width=40% align="right">兴 趣：</td>
<td><input type="checkbox" id="cbox1" name="dushu" value="c1">读书
<input type="checkbox" id="cbox2" name="yundong" value="c2">运动
<input type="checkbox" id="cbox3"name="chihe" value="c3">吃喝
</td>
</tr>
<tr><td width=40% align="right">上 传：</td>
<td> <input type="file" id="f1" name="shangchuan" value="File1" /></td>
</tr>
<tr><td width=40% align="right" rowspan=2>
<input id="Submit1" type="submit" value="提 交" />
</td>
<td> <input id="Reset1" type="reset" value="重 置" />
</td>
</tr>
</tbody>
</table>
</form>
</div>


</body>
</html>

