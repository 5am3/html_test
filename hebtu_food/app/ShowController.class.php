<?php


class ShowController{
	var $list=array('第一食堂','第二食堂','第三食堂','第四食堂','第五食堂','清真食堂');
	public function init(){
		$smarty = new Smarty();
		$smarty->left_delimiter = "{";
		$smarty->right_delimiter = "}";
		$smarty->template_dir = "tpl";
		$smarty->compile_dir = "template_c";
		$smarty->cache_dir = "cache";
		return $smarty;
	}


	public function showFood($id){
		//实例化并链接数据库
		$DB=new DBModel;
		$DB->conn();
		//实例化计算模型
		$j= new JiSuanModel;
		//实例化smarty，并初始化。
		$smarty=$this->init();
		//取数据
		$FoodObj=$DB->LoadFood($id);
		$Comment_R=$DB->LoadComment($id);
		$star=$j->star($id)?$j->star($id):3;
		$waittime=$j->waittime($id);
		// 循环遍历，取到数组中。
		while($row = mysql_fetch_array($Comment_R,MYSQL_ASSOC)){
			$comment[]= $row;
		}
		$smarty->assign('star',$star);
		$smarty->assign('waittime',$waittime);

		$smarty->assign('comment',$comment);
		$smarty->assign('list',$this->list);
		$smarty->assign('FoodObj',$FoodObj);
		
		$smarty->display('food.html');
		$DB->DElconn();


	}
	public function ShowList($select,$title)
	{
		$DB=new DBModel;
		// $j= new JiSuanModel;
		$DB->conn();
		$smarty=$this->init();
		
		$FoodList=$DB->LoadSelect($select,$title);
		while($row = mysql_fetch_array($FoodList,MYSQL_ASSOC)){
			$Food[]= $row;
			// $isw_r[]=$row['id'];
			// $isw_r[]=$j->star($row['id']);
			// $isw_r[]=$j->waittime($row['id']);
			// $isw[]=$isw_r;
		}
		if(empty($Food)){
			$Food="";
		}

		$smarty->assign('Food',$Food);
		$smarty->assign('list',$this->list);
		$DB->DElconn();
		$smarty->display('FoodList.html');
	}
	public function ShowIndex()
	{
		# code...
		$smarty=$this->init();
		$smarty->assign('list',$this->list);
		$smarty->display('index.html');
	}
	public function ShowUPload()
	{
		$smarty=$this->init();
		$smarty->display('foodupload.html');
	}
}