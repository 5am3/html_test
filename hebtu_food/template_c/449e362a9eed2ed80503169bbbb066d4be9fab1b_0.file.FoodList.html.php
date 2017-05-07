<?php
/* Smarty version 3.1.30, created on 2017-05-07 10:19:04
  from "C:\wamp\www\hebtu_food\tpl\FoodList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590ef498ebbf32_23485245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '449e362a9eed2ed80503169bbbb066d4be9fab1b' => 
    array (
      0 => 'C:\\wamp\\www\\hebtu_food\\tpl\\FoodList.html',
      1 => 1494152332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590ef498ebbf32_23485245 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>test1</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="main">
   <div class="nav">
     	<div class="nav_content">
        <!-- <img src="image1/5.png" width="150px"> -->
		    <ul class="nav_title">
		        <li><a href="#" class="checked">首页</a></li>
			    <li><a href="#">第一餐厅</a></li>
			    <li><a href="#">第二餐厅</a></li>
			    <li><a href="#">第三餐厅</a></li>
			    <li><a href="#">第四餐厅</a></li>
			    <li><a href="#">第五餐厅</a></li>
			    <li><a href="#">清真餐厅</a></li>
			    <li><a href="#">餐饮服务</a></li>
		    </ul>
    	</div>
   </div>
   <div class="content">
   		<img src="img/1_wai.jpg" width="100%">
	    <div class="menu">
			<h1>MENU</h1>
			<ul>
				<li><a href="ShowList.php?t=list1&s=主食">主食</a></li>
				<li><a href="#">粥类</a></li>
				<li><a href="#">菜品</a></li>
				<li><a href="#">饮品小吃</a></li>
			</ul> 
		</div>
		
		<div class="right">
       	<?php if ($_smarty_tpl->tpl_vars['Food']->value == '') {?>
		<h2 align="center">抱歉哎，暂时还没有数据。</h2>
		<?php } else { ?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Food']->value, 'cid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cid']->value) {
?>
       	<a href="showfood.php?p=<?php echo $_smarty_tpl->tpl_vars['cid']->value['id'];?>
">
		    <div class="food">
			    <img src="upload/img<?php echo $_smarty_tpl->tpl_vars['cid']->value['pic1'];?>
">
				<div class="food_c">
					<h4><?php echo $_smarty_tpl->tpl_vars['cid']->value['name'];?>
</h4>
					<p>价格：<?php echo $_smarty_tpl->tpl_vars['cid']->value['price'];?>
元</p>
					<p>好评度：<span class="star_o min_star"><span></span></span></p>
					<p>地址：<?php echo $_smarty_tpl->tpl_vars['cid']->value['place1'];?>
</p>
				</div>
			</div>
		</a>
		<?php
}
} else {
?>

				<h2 align="center">抱歉哎，暂时还没有数据。</h2>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<?php }?>	

		</div>
		
	</div>
	<div class="bottom">
	    <p>地址：河北师范大学餐厅</p>
	    <p>联系电话：XXXXXXXXXXX</p>
	    <p>邮箱：XXXXXXXXXX@163.com</p>
	</div>
</div>
</body>
</html><?php }
}
