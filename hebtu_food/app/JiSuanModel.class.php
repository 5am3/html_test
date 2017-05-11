<?php
class JiSuanModel{

	public function star($id)

	{	
		$DB=new DBModel;
		$DB->conn();
		$sum=0;
		$i=0;
		$Comment_R=$DB->LoadComment($id);
		foreach ($Comment_R as $key) {
			$sum+=$key['star'];
			$i=$i+1;
		}
		if($i==0){
			return 0;
		}
		$re=(float)$sum/$i;
		return $re;
		
	}

	public function waittime($id)
	{
		$DB=new DBModel;
		$DB->conn();
		$sum=0;
		$i=0;
		$Comment_R=$DB->LoadComment($id);

		foreach ($Comment_R as $key) {
			$sum+=$key['waitTime'];
			$i=$i+1;
		}
		if($i==0){
			return 0;
		}
		$re=(float)$sum/$i;
		return $re;

		
	}
}




