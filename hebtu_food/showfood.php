<?php
require_once 'lib/smarty/Smarty.class.php';
require_once 'app/DBModels.class.php';
require_once 'app/JiSuanModel.class.php';
require_once 'app/ShowController.class.php';
require_once 'app/UploadModel.class.php';

require_once 'app/UploadController.class.php';
if($_GET){
	if(is_numeric($_GET['p'])){
		if (!get_magic_quotes_gpc()) {
			$id=addslashes($_GET['p']);
		} else {
			$id=$_GET['p'];
		}
	}else{
		$id=1;
	}
	
	
}else{
	$id=12;
}


	$sc=new ShowController;
	$sc->showFood($id);
