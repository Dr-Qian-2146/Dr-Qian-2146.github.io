<!doctype html> <html> <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <title>摆摊证在线生成 - 小刀娱乐网www.x6d.com</title>
 <meta name="description" content="摆摊证在线生成"/>
    <meta name="keywords" content="摆摊证在线生成"/>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- 页面通用自定义css文件 -->
  <link rel="stylesheet" href="js/style.css" />
<script src="js/maker.js?123"></script>
<script src="js/jquery-2.1.3.min.js"></script><script src="js/iscroll-zoom.js"></script>
<script src="js/hammer.js"></script>
<script src="js/jquery.photoClip.js"></script></head> <body>
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container"><div class="container-fluid"><div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar-collapse" aria-expanded="false">
<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
 <a class="navbar-brand" title="点击回首页" href="#">首页</a>
</div>
<div class="collapse navbar-collapse" id="my-navbar-collapse">
    <ul class="nav navbar-nav">
        <!-- 导航栏链接开始 -->
        <li>
            <a href="https://www.x6d.com/" title="返回首页">
               摆摊证生成
            </a>
        </li>
        
        <li>
            <a href="http://www.qsjsc.com/" target="_blank" title="商城">
                优惠券商城
            </a>
        </li>
        
        <li>
            <a href="http://www.xiaodao.biz/" target="_blank" title="授权查询">
                授权查询
            </a>
        </li>
        <!--导航栏链接结束-->
    </ul>
</div></div></div></nav>
<div class="container">
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">参数设置</div>
            <div class="panel-body"><div class="demo" id="content">
                <div id="clipArea"></div>
                <input type="file" id="file"/>
                <button id="clipBtn" class="btn">裁剪上传</button>
                <div id="view"></div></div>
<a href="javascript:void(0);" id="lol2" class="btn btn-success btn-block" style="color: #fff;background-color:#478dc5;border-color:#478dc5;margin:12px 0;">上传照片</a>
<form id="m_imgSet">

<div class="form-group">
  <label for="m_str1">姓名：（<font color=red>*</font>必填 如王小八）</label>
    <input name="n" type="text" class="form-control" id="m_str1" placeholder="王小八" value="王小八" maxlength="6" onclick="this.focus();this.select()">
</div>
<div class="form-group">
  <label for="m_str2">经营业务：（<font color=red>*</font>必填 如专业摆摊）</label>
    <input name="y" type="text" class="form-control" id="m_str2" placeholder="摆摊" value="专业摆摊" maxlength="6" onclick="this.focus();this.select()">
</div>

<div class="form-group">
    <label for="m_str3">证书编号：（如：51120256395）</label>
    <input name="h" type="text" class="form-control" id="m_str3" placeholder="编号" value="51120256395" onclick="this.focus();this.select()">
</div>

<div class="form-group">
    <input id="m_random" name="i" type="text" class="btn btn-success btn-block" value="https://ae01.alicdn.com/kf/U5cdf6a0c104b4231bf7cfdff9fa38619V.jpg">
</div>

<div class="form-group">
    <button type="submit" id= "m_submit" class="btn btn-primary btn-block" style="padding:10px 15px;font-size:16px">立即生成</button>
</div>
<div class="form-group"> <a href="#f121" class="btn btn-success btn-block" onclick="xyccx();" style="color: #fff;background-color: #9E9E9E;border-color: #9E9E9E;">清空输入</a></div>
</form>
<script type="text/javascript">
function xyccx()
  {
   document.getElementById("m_str1").value="";
    document.getElementById("m_str2").value="";
    document.getElementById("m_str3").value="";
  } 
$(function(){
    // 表单被提交
    $("#m_imgSet").submit(function(){
        picBuild(); //调用图像生成函数
        return false;
    });
$("#m_random").click(); // 一开始就显示随机值
});
// 通用图像生成函数
function picBuild(){
    $("#m_submit").html("生成中...");$("#wuisox").show();
    $('#m_submit').attr('disabled',"true");    // 生成过程中不许再次点击
    var imgUrl = "template/01?" + $("#m_imgSet").serialize();
    if($("#m_color").is(':checked') == true) imgUrl = imgUrl + fRandomBy(0, 100000);    // 保证随机颜色每次都不一样
    updatePic(imgUrl);}
// 通用图像生成完毕后回调函数
function buildOver(){
    $("#m_submit").html("立即生成");
    $('#m_submit').removeAttr("disabled");     // 恢复生成按钮的使用
}
// 默认显示封面
updatePic("<?php echo 'images/'.rand(1,4).'.gif';?>");
// picBuild(); //调用图像生成函数
</script> <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <p class="m-title">如何保存图片？</p>
                    <p>电脑上：在图片上点击鼠标右键，选择“复制图片”即可直接粘贴到QQ等聊天工具窗口，发送给朋友；</p>
                    <p>手机上：长按生成的图片，选择“保存到本地”。</p>
                </div>
            </div>
        </div>
    </div>
  <div class="col-md-6 output"><div id="wuisox"><div class="alert alert-success alert-dismissible" role="alert" style="color: #fff;background-color:#4CAF50;border-color: #d6e9c6;font-size: 14px;    padding: 10px 12px;">
<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="right: 0;"><span aria-hidden="true">&times;</span></button>
<p class="m-title">生成中.请耐心等待.长按保存&转发.</p>
</div></div><b id="day"><img id="outputPic" src="images/loading.gif" title="在线制作图片生成区(点击鼠标右键保存图片)"></b></div></div>
<!--站长统计代码（您可以将这里的代码改为您自己的站点统计代码）-->
<!--站长统计代码（您可以将这里的代码改为您自己的站点统计代码）-->
</body> 
</html> 