// JavaScript Document
var progressBarZone = document.getElementById('progressBarZone');

function sendFile(files) {
       if (!files || files.length < 1) {
             return;
      }
      
      var percent = document.createElement('div');
      progressBarZone.appendChild(percent);

       var formData = new FormData();             // 创建一个表单对象FormData
      formData.append( 'submit', '中文' );  // 往表单对象添加文本字段
      
       var fileNames = '' ;
      
     /*  for ( var i = 0; i < files.length; i++) {
             var file = files[i];    // file 对象有 name, size 属性
            
            formData.append( 'file[' + i + ']' , file);       // 往FormData对象添加File对象
            
            fileNames += '《' + file.name + '》， ' ;
      }*/
	   		var file = files[0];    // file 对象有 name, size 属性
            
            formData.append( 'myFile' , file);       // 往FormData对象添加File对象
            
            fileNames += '《' + file.name + '》， ' ;
      
       var xhr = new XMLHttpRequest();
      xhr.upload.addEventListener( 'progress',
             function uploadProgress(evt) {
                   // evt 有三个属性：
                   // lengthComputable – 可计算的已上传字节数
                   // total – 总的字节数
                   // loaded – 到目前为止上传的字节数
                   if (evt.lengthComputable) {
                        percent.innerHTML = fileNames + ' upload percent :' + Math.round((evt.loaded / evt.total)  * 100) + '%' ;
                  }
            }, false); // false表示在事件冒泡阶段处理

      xhr.upload.onload = function() {
            percent.innerHTML = fileNames + '上传完成。' ;
      };

      xhr.upload.onerror = function(e) {
            percent.innerHTML = fileNames + ' 上传失败。' ;
      };

      xhr.open( 'post', 'uploadIMG.php' , true);
      xhr.send(formData);            // 发送表单对象。
	  
	  xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                var status = xhr.status;
                if (status >= 200 && status < 300) {
                   alert(xhr.responseText);
                }
            }
        }

}

document.addEventListener("dragover", function(e) {
      e.stopPropagation();
      e.preventDefault();            // 必须调用。否则浏览器会进行默认处理，比如文本类型的文件直接打开，非文本的可能弹出一个下载文件框。
}, false);

document.addEventListener("drop", function(e) {
      e.stopPropagation();
      e.preventDefault();            // 必须调用。否则浏览器会进行默认处理，比如文本类型的文件直接打开，非文本的可能弹出一个下载文件框。

      sendFile(e.dataTransfer.files);
}, false);

var f_up_bt = document.getElementById("files_hiden");

f_up_bt.onchange=function(){
	sendFile(f_up_bt.files);
}
  
