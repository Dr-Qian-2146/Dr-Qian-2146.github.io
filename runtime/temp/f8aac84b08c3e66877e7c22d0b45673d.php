<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"E:\MrF\FyNavigation\public/../application/admin\view\login\login.html";i:1586694962;}*/ ?>
<!doctype html>
<html  class="x-admin-sm">
<head>
  <meta charset="UTF-8">
  <title>风影导航管理后台</title>
  <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/static/admin/css/font.css">
    <link rel="stylesheet" href="/static/admin/css/login.css">
    <link rel="stylesheet" href="/static/admin/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-bg">
    
    <div class="login layui-anim layui-anim-up">
        <div class="message">风影导航v1.0管理后台</div>
        <div id="darkbannerwrap"></div>
        
        <form method="post" class="layui-form" >
            <input name="admin_name" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
            <hr class="hr15">
            <input name="password" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
            <hr class="hr15">
            <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit">
            <hr class="hr20" >
        </form>
    </div>

    <script>
        $(function  () {
            layui.use('form', function(){
              var form = layui.form;
              //监听提交
              form.on('submit(login)', function(data){
                
                $.post('/dologinaaa.html',data.field,function(res, textStatus, xhr){
                  
                  if (res.code == 1) {
                    layer.msg(res.msg,{icon:1,time:1000},function(){
                        location.href='/admin/home.html';
                    });
                  }else{
                    layer.msg(res.msg,{icon:5,time:1000});
                  }
                }, 'json');
                
                return false;
              });
            });
        });
    </script>
    <!-- 底部结束 -->
    
</body>
</html>