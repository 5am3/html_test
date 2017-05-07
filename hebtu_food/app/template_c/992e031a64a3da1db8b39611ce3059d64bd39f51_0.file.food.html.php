<?php
/* Smarty version 3.1.30, created on 2017-05-07 09:04:00
  from "C:\wamp\www\hebtu_food\tpl\food.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590ee30010e6b1_74190077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '992e031a64a3da1db8b39611ce3059d64bd39f51' => 
    array (
      0 => 'C:\\wamp\\www\\hebtu_food\\tpl\\food.html',
      1 => 1494120067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590ee30010e6b1_74190077 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['FoodObj']->value->name;?>
-<?php echo $_smarty_tpl->tpl_vars['FoodObj']->value->place1;?>
</title>
	<link rel="stylesheet" href="../css/food.css">
	<link rel="stylesheet" href="../css/main.css">
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
   			<div class="content">
   				<p class="BN"><?php echo $_smarty_tpl->tpl_vars['FoodObj']->value->list1;?>
>><?php echo $_smarty_tpl->tpl_vars['FoodObj']->value->list2;?>
>><?php echo $_smarty_tpl->tpl_vars['FoodObj']->value->name;?>
</p>
   				<div class="content_banner">
   					<h2><?php echo $_smarty_tpl->tpl_vars['FoodObj']->value->name;?>
</h2>
   					<p><?php echo $_smarty_tpl->tpl_vars['FoodObj']->value->place1;?>
</p>
   					<div class="star">
   						<p>评分：<span id="all_star"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['star']->value);?>
</span></p>
   						<span class="star_o"><span> </span></span>
   					</div>
   					<!-- <div class="place_content"><div class="place"></div></div> -->
   				</div>
   				<div class="show">
   					<div class="food_show">
   						<div class="b_food_show">
   							<?php if ($_smarty_tpl->tpl_vars['FoodObj']->value->pic1 == '') {?>
   							<img src="../img/notfound.jpg">
   							<?php } else { ?>
   							<img src="../upload/img<?php echo $_smarty_tpl->tpl_vars['FoodObj']->value->pic1;?>
">
   							<?php }?>
   						</div>

   						<div class="s_food_show">
   						<?php if ($_smarty_tpl->tpl_vars['FoodObj']->value->pic1 == '') {?>
   						<img src="../img/notfound.jpg">
   						<?php } else { ?>
   						<img src="../upload/img<?php echo $_smarty_tpl->tpl_vars['FoodObj']->value->pic1;?>
">
   						<?php }?>
   						<?php if ($_smarty_tpl->tpl_vars['FoodObj']->value->pic2 == '') {?>
   						<img src="../img/notfound.jpg">
   						<?php } else { ?>
   						<img src="../upload/img<?php echo $_smarty_tpl->tpl_vars['FoodObj']->value->pic2;?>
">
   						<?php }?>
   						<?php if ($_smarty_tpl->tpl_vars['FoodObj']->value->pic3 == '') {?>
   						<img src="../img/notfound.jpg">
   						<?php } else { ?>
   						<img src="../upload/img<?php echo $_smarty_tpl->tpl_vars['FoodObj']->value->pic3;?>
">
   						<?php }?>
   						<?php if ($_smarty_tpl->tpl_vars['FoodObj']->value->pic4 == '') {?>
   						<img src="../img/notfound.jpg">
   						<?php } else { ?>
   						<img src="../upload/img<?php echo $_smarty_tpl->tpl_vars['FoodObj']->value->pic4;?>
">
   						<?php }?>
   						</div>
   					</div>
   					<div class="brief">
   						<h2>美食价：<span id="price">￥<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['FoodObj']->value->price);?>
</span></h2>
   						<p>ID:<span id="foodID"><?php echo $_smarty_tpl->tpl_vars['FoodObj']->value->id;?>
</span></p>
   						<p>人均等待时间：<?php if ($_smarty_tpl->tpl_vars['waittime']->value == '') {?>暂无数据<?php } else {
echo $_smarty_tpl->tpl_vars['waittime']->value;?>
分钟<?php }?></p>
   						<p>营业时间：<?php echo $_smarty_tpl->tpl_vars['FoodObj']->value->open_time;?>
</p>
   					</div>
   					<br clear="all">
   				</div>
   				<div class="comment">
   					<div class="c_title">
   						<h2>评论</h2>
   						<span><a href="javascript:void(0);" onclick="Open_comment()">点击评论此食品</a></span>
   					</div>
   					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value, 'cid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cid']->value) {
?>
   						<div class="c_card">
   							<div class="c_card_pic">
   								<img src="../img/pic.jpg">
   								<h4 align="center"><?php echo $_smarty_tpl->tpl_vars['cid']->value['name'];?>
</h4>
   							</div>
   							<div class="user_top">
   								<ul class="user_star">
   								<?php if ($_smarty_tpl->tpl_vars['cid']->value['star'] == 1) {?>
   						            <li class="active"></li><li></li><li></li><li></li><li></li>
   								<?php } elseif ($_smarty_tpl->tpl_vars['cid']->value['star'] == 2) {?>
   									<li class="active"></li><li class="active"></li><li></li><li></li><li></li>
   								<?php } elseif ($_smarty_tpl->tpl_vars['cid']->value['star'] == 3) {?>
   									<li class="active"></li><li class="active"></li><li class="active"></li></li><li></li><li></li>
   								<?php } elseif ($_smarty_tpl->tpl_vars['cid']->value['star'] == 4) {?>
   									<li class="active"></li><li class="active"></li><li class="active"></li><li class="active"></li><li></li>
   								<?php } elseif ($_smarty_tpl->tpl_vars['cid']->value['star'] == 5) {?>
   									<li class="active"></li><li class="active"></li><li class="active"></li><li class="active"></li><li class="active"></li>
   								<?php } else { ?>
   									<li></li><li></li><li></li><li></li><li></li>
   								<?php }?>
   						        </ul>  
   								<span>等待时间：<?php echo $_smarty_tpl->tpl_vars['cid']->value['waitTime'];?>
分钟</span>
   							</div>
   							<p class="comment_r"><?php echo $_smarty_tpl->tpl_vars['cid']->value['comment'];?>
</p>
   						</div>
   						<hr>
   						<?php
}
} else {
?>

   						<h2 align="center">还没有人评论哎、你要不要当第一个？</h2>
   					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

   				</div>
   			</div>

   		<div id="CM">

   		<h3>评价食品<span><a href="javascript:void(0);" onclick="Close_comment()"">关闭</a></span></h3>
   			<form action="../app/UploadComment.php" method="POST">
   				<table>
   				<tr>
   					<td><label for="name">昵称</label></td>
   					<td><input type="text" cols="30" name="name"></td>
   				</tr>
   					<tr>
   						<td><label for="comment">你的评价：</label></td>
   						<td><textarea name="comment" id="comment" cols="30" rows="8"></textarea></td>
   					</tr>
   					<tr>
   						<td><label for="waittime">就餐等待时间：</label></td>
   						<td><input type="text" placeholder="例：3" width="235px" name="waittime" id="waittime"></td>
   					</tr>
   					<tr>
   						<td><label for="score">评分：</label></td>
   						<td>
   							<input type="hidden" name="pid" id="pid">
   							<input type="hidden" name="score" id="score">
   							<div id="rank" class="pingfen">  
   							        <ul>  
   							            <li></li>  
   							            <li></li>  
   							            <li></li>  
   							            <li></li>  
   							            <li></li>  
   							        </ul>  
   							        <p>加载中</p>  
   							    </div>
   						</td>
   					</tr>
   					<tr><td colspan="2" align="center"><input type="submit"></td></tr>
   					
   					
   				</table>
   			</form>
   		</div>
	</div>
	<div class="bottom">
	    <p>地址：河北师范大学餐厅</p>
	    <p>联系电话：XXXXXXXXXXX</p>
	    <p>邮箱：XXXXXXXXXX@163.com</p>
	</div>
</div>
</body>
</html>
	
<?php echo '<script'; ?>
 src="../js/jquery-3.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
