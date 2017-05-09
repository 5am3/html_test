<?php
class DBModel{

	var $conn;

	public function conn(){
		$this->conn = mysql_connect('0000','000','0000');
		if(!$this->conn){
			echo "数据库链接失败";
			exit;
		}
		mysql_select_db('qdm117251480_db');
		mysql_query("set names 'utf8'");
		return $this->conn;
	}
	public function DElconn()
	{
		mysql_close($this->conn);
	}
	public function SaveFood($name,$price,$time,$pic1,$pic2,$pic3,$pic4,$list1,$list2,$place1){

		$sqlR="insert `food_list`(`name`,`price`,`open_time`,`pic1`,`pic2`,`pic3`,`pic4`,`list1`,`list2`,`place1`) values('$name ','$price','$time','$pic1','$pic2','$pic3','$pic4','$list1','$list2','$place1')";
		mysql_query($sqlR);
		$uid = mysql_insert_id();
		return $uid;
		

	}
	public function SaveComment($pid,$name,$comment,$time,$score){

		$sqlR="insert `food_comment`(`pid`,`name`,`comment`,`waitTime`,`star`) values('$pid','$name','$comment','$time','$score')";
		mysql_query($sqlR);
		return $pid;
		

	}

	public function LoadFood($id){
		$sqlR="SELECT * FROM `food_list` WHERE id = ".$id."";
		$request=mysql_query($sqlR);
		$foodobj=mysql_fetch_object($request);
		return $foodobj;
	}
	public function LoadComment($pid){
		$sqlR="SELECT * FROM `food_comment` WHERE pid = ".$pid."";
		$request=mysql_query($sqlR);
		return $request;
	}
	public function LoadSelect($select,$title)
	{
		$sqlR="SELECT * FROM `food_list` WHERE ".$title." = '".$select."'";
		$request=mysql_query($sqlR);
		return $request;
	}

}

