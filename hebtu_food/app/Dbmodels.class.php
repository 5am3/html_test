<?php
class DBModel{
	public function conn()

	{
		$dbms='mysql';     //数据库类型
		$host='qdm******.com'; //数据库主机名
		$dbName='qdm1******';    //使用的数据库
		$user='qd*****480';      //数据库连接用户名
		$pass='****';          //对应的密码
		$dsn="$dbms:host=$host;dbname=$dbName";


		try {
		    $dbh = new PDO($dsn, $user, $pass); //初始化一个PDO对象
		    // echo "连接成功<br/>";
		    /*你还可以进行一次搜索操作
		    foreach ($dbh->query('SELECT * from FOO') as $row) {
		        print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
		    }
		    */
		    $dbh->exec("SET names utf8");
			return $dbh;
		} catch (PDOException $e) {
		    die ("Error!: " . $e->getMessage() . "<br/>");
		}

	}
	public function SaveFood($name,$price,$pic1,$pic2,$pic3,$pic4,$list1,$list2,$place){
		$dbcon=$this->conn();
		$sqlR="insert `food_list`(`name`,`price`,`pic1`,`pic2`,`pic3`,`pic4`,`list1`,`list2`,`place`) values('$name ','$price','$pic1','$pic2','$pic3','$pic4','$list1','$list2','$place')";
		$dbcon->exec($sqlR);
		
		// $dbcon=null
		return $dbcon->lastInsertId();
	}
	public function SaveComment($pid,$name,$comment,$time,$score){
		$dbcon=$this->conn();
		$sqlR="insert `food_comment`(`pid`,`name`,`comment`,`waitTime`,`star`) values('$pid','$name','$comment','$time','$score')";
		// echo $sqlR.'<br>';
		$dbcon->exec($sqlR);
		// $dbcon=null
		return $pid;
	}
	public function LoadFood($id){
		$dbcon=$this->conn();
		$sqlR="SELECT * FROM `food_list` WHERE id = ".$id."";
		$request=$dbcon->query($sqlR);
		return $request;
	}
	public function LoadComment($pid){
		$dbcon=$this->conn();
		$sqlR="SELECT * FROM `food_comment` WHERE pid = ".$pid."";
		$request=$dbcon->query($sqlR);
		return $request;
	}
	public function LoadSelect($select,$title,$select2='',$title2='')
	{
		$dbcon=$this->conn();
		if($title2==''){

		$sqlR="SELECT * FROM `food_list` WHERE ".$title." = '".$select."'";
		}else{
		$sqlR="SELECT * FROM `food_list` WHERE ".$title." = '".$select."'and ".$title2." = '".$select2."'";
		}
		$request=$dbcon->query($sqlR);
		return $request;
	}

}