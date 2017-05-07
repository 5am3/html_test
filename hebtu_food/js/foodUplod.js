var picnum=1;
window.onload=function(){
	$('#list2').hide();
	$('#list3').hide();
	$('#pic2').hide();
	$('#pic3').hide();
	$('#pic4').hide();
	showlist();
		
	
}
function showlist(){
	if($('#list1').val()=='主食'){
		$('#list2').show();
		$('#list2').html('');	
		$('#list2').append("<option value=\"面条\">面条</option>");
		$('#list2').append("<option value=\"米饭\">米饭</option>");
		$('#list2').append("<option value=\"面制类\">面制类</option>");

	}  
	if($('#list1').val()=='菜品'){
		$('#list2').show();
		$('#list2').html('');	
		$('#list2').append("<option value=\"荤菜\">荤菜</option>");
		$('#list2').append("<option value=\"素菜\">素菜</option>");
	}  
	if($('#list1').val()=='粥类'){
		$('#list2').show();
		$('#list2').html('');	
		$('#list2').append("<option value=\"粥类\">粥类</option>");
		
	}  
	if($('#list1').val()=='饮品小吃'){
		$('#list2').show();
		$('#list2').html('');	
		$('#list2').append("<option value=\"肉类\">肉类</option>");
		$('#list2').append("<option value=\"面制品类\">面制品类</option>");
		$('#list2').append("<option value=\"雪糕冷饮类\">雪糕冷饮类</option>");
		$('#list2').append("<option value=\"水果类\">水果类</option>");
		$('#list2').append("<option value=\"杂粮类\">杂粮类</option>");
	}  
	

	
}
function addpic() {
	if(picnum<4){
		picnum+=1;
		$('#pic'+picnum+'').show();
	}else alert("最多上传4张图片，谢谢配合");
	
}