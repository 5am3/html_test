<?php
class JiSuanModel{

	public function star($id)

	{	
		$DB=new DBModel;
		$DB->conn();
		$sum=0;
		$i=0;
		$Comment_R=$DB->LoadComment($id);
		$DB->DElconn();
		if($Comment_R){
			while($row = mysql_fetch_array($Comment_R,MYSQL_ASSOC)){
				$sum+=$row['star'];
				$i+=1;
			}
			return $sum/$i ;
		}else return '';
		
	}

	public function waittime($id)
	{
		$DB=new DBModel;
		$DB->conn();
		$sum=0;
		$i=0;
		$Comment_R=$DB->LoadComment($id);
		$DB->DElconn();
		if($Comment_R){
			while($row = mysql_fetch_array($Comment_R,MYSQL_ASSOC)){
				$sum+=$row['waitTime'];
				$i+=1;
			}
			return $sum/$i ;
		}else return '';
	}
}