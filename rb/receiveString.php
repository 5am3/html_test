<?php
	/*
	本文件主要实现接收字符串并转为md文档。
	By:丶诺熙
	Mail：i@5am3.com
	*/
	$content = $_POST['m'];
	$file1 = '每日总结.md';
	$path = "./upload/md/".$file1;
	$fp = fopen($path, 'w');
	fwrite($fp, $content);
	fclose($fp);
?>