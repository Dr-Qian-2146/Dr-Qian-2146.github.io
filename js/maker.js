// 判断浏览器
var Browser = new Object();
Browser.userAgent = window.navigator.userAgent.toLowerCase();
Browser.ie = /msie/.test(Browser.userAgent);
Browser.Moz = /gecko/.test(Browser.userAgent);
 
// 判断是否加载完成
function Imagess(url, imgid, callback){
    // document.getElementById(imgid).src = 'http://q.wuisou.com/images/loading.gif';
    
    var val = url;
    var img = new Image();
    if(Browser.ie){
        img.onreadystatechange =function(){ 
            if(img.readyState=="complete"||img.readyState=="loaded"){
                callback(img,imgid);
            }
        };    
    }else if(Browser.Moz){
        img.onload = function(){
            if(img.complete === true){
                callback(img,imgid);
            }
        };
    }  
    // 如果因为网络或图片的原因发生异常，则显示该图片
    img.onerror = function(){
        picLoaded();
        img.src = 'images/loading.gif';
    };
    img.src = val;
}
 
// 显示图片
function checkimg(obj, imgid){
    picLoaded();
    document.getElementById(imgid).src = obj.src;
}

// 更新图片显示区域的图片显示
function updatePic(img){
    Imagess(img, "outputPic", checkimg);
}

// 图片加载完毕了，会启用这个函数通知模板
function picLoaded(){
    try{ 
        if(buildOver&&typeof(buildOver)=="function"){ 
            buildOver();    // 调用模板的生成完毕函数处理
        }else{ 
            // alert("不存在的函数"); 
        } 
    }catch(e){ // 如果不存在，会抛出异常，所以要加try……catch。
    } 
}

//  以下是制作器模板中共用的 js 函数库

/*******************************
 * 函数名：格式化金额数值
 * 输入：  (s)原始金额  (n)保留的小数点位数
 * 输出： 格式化后的金额值
 * *****************************/
function fMoney(s, n)   
{   
    n = n > 0 && n <= 20 ? n : 2;   
    s = parseFloat((s + "").replace(/[^\d\.-]/g, "")).toFixed(n) + "";   
    var l = s.split(".")[0].split("").reverse(),   
    r = s.split(".")[1];   
    t = "";   
    for(i = 0; i < l.length; i ++ )   
    {   
        t += l[i] + ((i + 1) % 3 == 0 && (i + 1) != l.length ? "," : "");   
    }   
    return t.split("").reverse().join("") + "." + r;   
} 

/*******************************
 * 函数名：生成指定范围的随机数
 * 输入：  (under)下限   (over)上限
 * 输出： 所需要的数值
 * *****************************/
function fRandomBy(under, over){ 
   switch(arguments.length){ 
     case 1: return parseInt(Math.random()*under+1); 
     case 2: return parseInt(Math.random()*(over-under+1) + under); 
     default: return 0; 
   } 
} 
 //document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
            $(function() {
                $("#clipArea").photoClip({
                    width: 117,
                    height: 150,
                    file: "#file",
                    view: "#view",
                    ok: "#clipBtn",
                    loadStart: function() {
                        $(".photo-clip-rotateLayer").html("<img src='images/loading.gif'/>");
                        console.log("照片读取中");
                    },
                    loadComplete: function() {
                        console.log("照片读取完成");$("#view").show();
                    },
                    clipFinish: function(dataURL) {
                        $.ajax({
                            url: "upload.php",
                            data: {str: dataURL},
                            type: 'post',
                            dataType: 'json',
                            success: function (data) {
                            document.getElementById("m_random").value=data;
                                        },
                            error: function (XMLHttpRequest, textStatus, errorThrown) {
                                               alert("写入失败");}
                        })
                    }
                });
            })
$(function () {
            /** 音效*/
            $("#m_submit").click(function () {
                showSound("http://boscdn.bpc.baidu.com/v1/developer/b14db2b5-8b70-4183-a3e8-0447a6563c50.mp3");
            });
        });
 
        /**
         * 产生音效
         * @param audioSrc ：音频路径
         */
        function showSound(audioSrc) {
            /**因为音效元素是追加的，所以每次生成之前，将原来的删除掉*/
            $("#hint").remove();
            /**创建audio标签的Jquery对象，然后追加到body进行播放即可*/
            let audioJQ = $("<audio src='" + audioSrc + "' autoplay id='hint'/>");
            audioJQ.appendTo("body");
        }

$(function(){
		$("#lol2").click(function() {
			$("#content").toggle();
		});
	});
