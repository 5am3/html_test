<?php
error_reporting(E_ALL & ~E_DEPRECATED);
header("Content-type:text/html;charset=utf-8");
	class UploadController{
		
		public function upfood()
		{
			$UP=new UploadModel;
			$DB=new DBModel;
			$DB->conn();
			if($_POST){

				$name=$UP->SEC($_POST['name']);
				$price=$UP->SEC($_POST['price']);
				$place=$UP->SEC($_POST['place']);
				$list1=$UP->SEC($_POST['list1']);
				$list2=$UP->SEC($_POST['list2']);


				if(!empty($_FILES['pic1']['tmp_name'])) $pic1=$UP->Img($_FILES['pic1']);
				else $pic1='';

				if(!empty($_FILES['pic2']['tmp_name'])) $pic2=$UP->Img($_FILES['pic2']);
				else $pic2='';
				
				if(!empty($_FILES['pic3']['tmp_name'])) $pic3=$UP->Img($_FILES['pic3']);
				else $pic3='';
				
				if(!empty($_FILES['pic4']['tmp_name'])) $pic4=$UP->Img($_FILES['pic4']);
				else $pic4='';

				$foodUid=$DB->SaveFood($name,$price,$pic1,$pic2,$pic3,$pic4,$list1,$list2,$place);

				echo "<script> var r=confirm(\"提交成功！<\br>当前食物id为".$foodUid."是否继续添加?\");if (r==true){window.location.href=\"upload.php\";}else{window.location.href=\"showfood.php?p=".$foodUid."\";};</script>";

			}
			else{
				echo "啥都没有！";
			}
		}
		public function upcomment($a){
			$UP=new UploadModel;
			$DB=new DBModel;
			$DB->conn();
			if($_POST){
				$pid=$UP->SEC($_POST['pid']);
				$name=$UP->SEC($_POST['name']);
				$comment=$UP->SEC($_POST['comment']);
				$waittime=$UP->SEC($_POST['waittime']);
				$score=$UP->SEC($_POST['score']);

				$DB->SaveComment($pid,$name,$comment,$waittime,$score);
				echo "<script>alert('successful');window.location.href='showfood.php?p=".$pid."';</script>";

				// echo $pid.'<br>'.$name.'<br>'.$comment.'<br>'.$waittime.'<br>'.$score;

			}
			else{				echo "<h1 align=\"center\">好像我把你的评论弄丢了。<br/>可不可以帮我再写一份<br/>委屈状。</h1>";
			}
		}
	}


