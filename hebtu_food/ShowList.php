<?php
require_once 'app/ShowController.class.php';
require_once ('lib/smarty/Smarty.class.php');
require_once 'app/DBModels.class.php';
require_once 'app/JiSuanModel.class.php';
if($_GET){
	if(preg_match("/.*'.*/i",$_GET['s'])||preg_match("/.*'.*/i",$_GET['t'])){
		$select="第一食堂";
		$title="place";
		$title2='';
		$select2='';
	}else{
		$select=$_GET['s'];
		$title=$_GET['t'];

		if(isset($_GET['t2'])&&isset($_GET['s2'])){
			if(preg_match("/.*'.*/i",$_GET['s'])||preg_match("/.*'.*/i",$_GET['t'])){
				$title2="";
				$select2="";
			}else{
				$title2=$_GET['t2'];
				$select2=$_GET['s2'];
			}
		}else{
			$title2='';
			$select2='';
		}
	}
	
	
}else{
	$select="第一食堂";
	$title="place";
	$title2='';
	$select2='';
}

	$sc=new ShowController;
	$sc->ShowList($select,$title,$select2,$title2);
