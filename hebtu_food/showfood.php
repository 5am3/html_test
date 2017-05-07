<?php
require ('lib/smarty/Smarty.class.php');
require_once 'app/DBModel.class.php';
require_once 'app/JiSuanModel.class.php';
require_once 'app/ShowController.class.php';
require_once 'app/UploadModel.class.php';

require_once 'app/UploadController.class.php';
if($_GET){
	$id=$_GET['p'];
}else{
	$id=12;
}


	$sc=new ShowController;
	$sc->showFood($id);
