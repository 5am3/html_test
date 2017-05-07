<?php
/* Smarty version 3.1.30, created on 2017-05-07 10:53:16
  from "C:\wamp\www\hebtu_food\tpl\foodupload.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590efc9cad3772_78821733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b03ec546e88fb054c9d0d5c2f6edd016049b2e6d' => 
    array (
      0 => 'C:\\wamp\\www\\hebtu_food\\tpl\\foodupload.html',
      1 => 1494152342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590efc9cad3772_78821733 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>上传食品资料</title>
</head>
<body>
<table>
<form action="UploadFood.php" method="POST" enctype="multipart/form-data" >
<tr>
	<td><label for="name">食品名称：</label></td>
	<td><input type="text" id="name" name="name"></td>
</tr>
<tr>
	<td><label for="price">食品价格：</label></td>
	<td><input type="text" placeholder="例:6.00" name="price" id="price"></td>
</tr>
<tr>
	<td><label for="place">地点：</label></td>
	<td>
		<!-- <input type="text" placeholder="例：一期三楼4号窗口" name="place" id="place"> -->
	<select name="place" id="place">   
        <option value="一食堂">一期食堂一楼</option>
        <option value="二食堂">一期食堂二楼</option>   
        <option value="三食堂">一期食堂三楼</option> 
        <option value="四食堂">二期食堂一楼</option>   
        <option value="五食堂">二期食堂二楼</option> 
        <option value="清真食堂">清真食堂</option>   
    </select>
	</td>
</tr>
<tr>
	<td>食品分类:</td>
	<td>
		<select name="list1" id="list1" onchange="showlist()">   
	        <option value="主食">主食</option>
	        <option value="菜品">菜品</option>
	        <option value="粥类">粥类</option>      
	        <option value="小吃">饮品小吃</option>
	           
	    </select>
	    <select name="list2" id="list2">
	    	
	    </select>
	</td>
</tr>	
<tr>
	<td><label for="opentime">营业时间：</label></td>
	<td><textarea placeholder="例：早饭7:00-9:00 午饭12：00-14:00" name="opentime" id="opentime"></textarea></td>
</tr>
<tr>
	<td><label for="pic1">上传图片:</label></td>
	<td id="loadfiles">
		<input type="file" id="pic1" name="pic1"><br>
		<input type="file" id="pic2" name="pic2"><br>
		<input type="file" id="pic3" name="pic3"><br>
		<input type="file" id="pic4" name="pic4">

	</td>
</tr>
<tr><td colspan="2" align="center"><a href="javascript:void(0);" onclick="addpic()">继续添加图片</a></td></tr>
<tr><td colspan="2" align="center">（最多四张）请上传XX*XX像素500k以下照片<br/>其他可能无法显示。</td></tr>

<tr><td colspan="2" align="center"><input type="submit"></td></tr>
</form>
</table>
<?php echo '<script'; ?>
 src="js/jquery-3.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/foodUplod.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
