<?php
	/*
	本文件主要实现下载目录下md文档。
	By:丶诺熙
	Mail：i@5am3.com
	*/
	$file1 = '每日总结.md';
	header('Content-Type:text/md');
	header('Content-Disposition:attachment;filename="'.$file1.'"');
	header('Content-Length:'.filesize($file1));
	readfile($file1);
?>