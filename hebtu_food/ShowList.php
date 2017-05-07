<?php
require_once 'app/ShowController.class.php';
require ('lib/smarty/Smarty.class.php');
require_once 'app/DBModel.class.php';
require_once 'app/JiSuanModel.class.php';
if($_GET){
	$select=$_GET['s'];
	$title=$_GET['t'];
	
}else{
	$select="第一食堂";
	$title="place1";

}

	$sc=new ShowController;
	$sc->ShowList($select,$title);
