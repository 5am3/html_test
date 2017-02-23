var a=2011;
var l_i=1
function jia(){
	a=a+1;var fuhao="<a onclick=\"jian()\">-</a><a onclick=\"jia()\">+</a>";
	var b =a-10;
	var c =a+10;
	var d =c+10;
	var b_nr="<li id=\"" + a +"\"><input type=\"text\" maxlength=\"50\" onchange=\"brief_load(" + b +")\" id=\"" + b +"\" class=\"t_brief\" placeholder=\"学习概况\"></li>";
	var m_nr="<div class=\"m_u\" id=\"" + c +"\"><div class=\"m_title\">学习概况</div><div class=\"m_main\"><textarea id=\"" + d +"\" style=\"width: 100%;\" rows=\"15\" placeholder=\"请输入内容\"></textarea></div></div>"
	$(".brief a").remove();
	$(".brief").append(b_nr);
	$(".brief").append(fuhao);
	$(".m_u").append(m_nr);
	l_i=l_i+1;
}
function jian(){
	var b=a+10;
	var c=a+20;
	$("#"+b).remove();
	$(".m_u").remove("#"+c);
	$("li").remove("#"+a);
	a=a-1;
	l_i=l_i-1;
}

function brief_load(b){
	var el=document.getElementById(b);
	c=b+20;
	$("#"+c+" div:first-child").text(el.value);
}