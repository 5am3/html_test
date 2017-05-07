function Open_comment() {
	$('#CM').show();
}
function Close_comment(){
	$('#CM').hide();
}

var aData =["很差","较差","一般","推荐","力推"];  
  
window.onload=function(){  
    var oDiv = document.getElementById("rank");  
    var aLi = oDiv.getElementsByTagName("li");  
    var oP = oDiv.getElementsByTagName("p")[0];  
    var i =0;  
    var k=0;
    $('#pid').val($('#foodID').text());
    $('.star_o span').css('width',($('#all_star').text()*135/5)+'px');

    for(i=0;i<aLi.length;i++){  
        aLi[i].index = i;  
        aLi[i].onmouseover = function(){  
        	if(k==0){
	            oP.style.display = "inline-block";  
	            oP.innerHTML=aData[this.index];  
	            for(i=0; i<=this.index;i++){  
	                aLi[i].className="active";  
	        	}  
        	}
        };  
        aLi[i].onmouseout = function(){  
        	if(k==0){
	            oP.style.display = "";  
	            for(i=0; i<aLi.length; i++){  
	                aLi[i].className="";  
	            } 
            }
        };  
        aLi[i].onclick=function(){
        	if(k==1){
        		k=0;
        		return 0;
        	}
          	$('#score').val(this.index +1);
          	k=1;
        };  
    }  
  
};  