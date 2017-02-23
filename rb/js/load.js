	var arr = new Array();
	arr[0] = new Array();
	arr[1] = new Array();
	arr[2] = new Array();
	arr[3] = new Array();
	var s,m;
function l_time(){
	var xq=new Array("一","二","三","四","五","六","日");
	var now = new Date();    
    var year = now.getFullYear();       //年   
    var month = now.getMonth() + 1;     //月   
    var day = now.getDate();            //日
    var xingqi = now.getDay(); 
    var hours = now.getHours(); //获取当前小时数(0-23)
	var minutes = now.getMinutes(); //获取当前分钟数(0-59)
	var seconds = now.getSeconds(); //获取当前秒数(0-59)
	s=year+"年"+month+"月"+day+"日";
	return year+"年"+month+"月"+day+"日\t"+hours+":"+minutes+":"+seconds+"\t星期"+xq[xingqi-1];

}

function l_title(){
	var title = document.getElementById("t_title");
	return title.value;
}

function l_brief(id){
	var brief = document.getElementById(id);
	return brief.value;
}
function l_main(id){
	var main = document.getElementById(id);
	return main.value;
}

/*
 * 2001 brief的Input标签
 * 2011	brief的li标签
 * 2021 main的div块标签
 * 2031 main的textarea标签
 */

	
/*
 * arr内容分布
 * 1.标题	时间	辅助线
 * 2.简述
 * 3.内容
 */
	
function l_add(){
	i=0;
	b=a-10;
	arr[0][0]="# "+l_title()+"\n";
	arr[0][1]=l_time()+"\n";
	arr[0][2]="\n------------"+"\n";
	arr[0][3]=arr[0][0]+arr[0][1];
	arr[0][4]="";
	arr[0][5]="";
	while (i<b-2000) {
		arr[1][i]="- **"+l_brief(2001+i)+"**\n";
		arr[2][i]="### "+l_brief(2001+i)+"\n";
		arr[3][i]=l_main(i+2031)+"\n";
		arr[0][4]=arr[0][4]+arr[1][i];
		arr[0][5]=arr[0][5]+arr[2][i]+arr[3][i];
		i=i+1;
	}
	return arr[0][3]+arr[0][4]+arr[0][2]+arr[0][5];

}
function load(){
	m=l_add();
	var init_url="receiveString.php"
	$.post(init_url,{m:m,s:s},function(date){
		window.open("./upload/md/downloadMD.php");
	});
}
