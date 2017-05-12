<?php


class ShowController{
	var $list=array('第一食堂','第二食堂','第三食堂','第四食堂','第五食堂','清真食堂');
	var $default_list=array(array(
		'name'=>'',
		'comment'=>''
		));
	public function init(){
		$smarty = new Smarty();
		$smarty->left_delimiter = "{";
		$smarty->right_delimiter = "}";
		$smarty->template_dir = "tpl";
		// $smarty->compile_dir = "template_c";
		// $smarty->cache_dir = "cache";
		return $smarty;
	}


	public function showFood($id){
		//实例化并链接数据库
		$DB=new DBModel;
	
		//实例化计算模型
		$j= new JiSuanModel;
		//实例化smarty，并初始化。
		$smarty=$this->init();
		//取数据
		$Food_R=$DB->LoadFood($id);
		$Comment_R=$DB->LoadComment($id);

		$star=$j->star($id)?$j->star($id):3;
		$waittime=$j->waittime($id);
		// 循环遍历，取到数组中。

		foreach ($Food_R as $key) {
			$FoodObj=$key;
		}
		foreach ($Comment_R as $key) {
			$comment[]=$key;
		}
		if(empty($comment)){
			$comment=$this->default_list;
		}
		$smarty->assign('star',$star);
		$smarty->assign('waittime',$waittime);

		$smarty->assign('comment',$comment);
		$smarty->assign('list',$this->list);
		$smarty->assign('FoodObj',$FoodObj);
		
		$smarty->display('food.html');

	}
	public function ShowList($select,$title,$select2='',$title2='')
	{
		$DB=new DBModel;
		// $j= new JiSuanModel;
	
		$smarty=$this->init();
		
		$FoodList=$DB->LoadSelect($select,$title,$select2,$title2);
		foreach ($FoodList as $key) {
			$Food[]=$key;
		}
		if(empty($Food)){
			$Food="";
		}
		$smarty->assign('Food_s',$select);
		$smarty->assign('Food',$Food);
		$smarty->assign('list',$this->list);
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
	public function ShowServer()
	{
		$smarty=$this->init();
		$smarty->assign('list',$this->list);
		$smarty->display('foodserver.html');
	}
}