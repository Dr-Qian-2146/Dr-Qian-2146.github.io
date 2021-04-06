<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"E:\MrF\FyNavigation\public/../application/admin\view\index\index.html";i:1586696437;}*/ ?>
<!DOCTYPE html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>风影导航 - 后台主页</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="/static/admin/css/font.css">
        <link rel="stylesheet" href="/static/admin/css/xadmin.css">
        <script src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
          <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
          <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="layui-fluid">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-body ">
                            <blockquote class="layui-elem-quote">欢迎您：
                                <span class="x-red"><?php echo $admin_name; ?></span>！当前时间:<?php echo $time; ?>
                            </blockquote>
                        </div>
                    </div>
                </div>
                
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-header">系统信息</div>
                        <div class="layui-card-body ">
                            <table class="layui-table">
                                <tbody>
                                    <tr>
                                        <th>后台版本</th>
                                        <td><?php echo $info['后台版本']; ?></td></tr>
                                    <tr>
                                        <th>服务器时间</th>
                                        <td><?php echo $info['服务器时间']; ?></td></tr>
                                    <tr>
                                        <th>服务器系统</th>
                                        <td><?php echo $info['服务器系统']; ?></td></tr>
                                    <tr>
                                        <th>服务器解释引擎</th>
                                        <td><?php echo $info['服务器解释引擎']; ?></td></tr>
                                    <tr>
                                        <th>服务器IP</th>
                                        <td><?php echo $info['服务器IP']; ?></td></tr>
                                    <tr>
                                        <th>PHP版本</th>
                                        <td><?php echo $info['PHP版本']; ?></td></tr>
                                    <tr>
                                        <th>HTTP版本</th>
                                        <td><?php echo $info['HTTP版本']; ?></td></tr>
                                    <tr>
                                        <th>网站根目录</th>
                                        <td><?php echo $info['网站根目录']; ?></td></tr>
                                    <tr>
                                        <th>最大执行时间</th>
                                        <td><?php echo $info['最大执行时间']; ?></td></tr>
                                    <tr>
                                        <th>最大文件上传</th>
                                        <td><?php echo $info['最大文件上传']; ?></td></tr>
                                    <tr>
                                        <th>全部变量</th>
                                        <td><?php echo $info['全部变量']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>安全模式</th>
                                        <td><?php echo $info['安全模式']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>图形处理</th>
                                        <td><?php echo $info['图形处理']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>内存占用</th>
                                        <td><?php echo $info['内存占用']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-header">开发团队</div>
                        <div class="layui-card-body ">
                            <table class="layui-table">
                                <tbody>
                                    <!-- 保留版权信息是对作者最大的尊重! -->
                                    <tr>
                                        <th>版权所有</th>
                                        <td>风影OvO  
                                            <a href="https://www.fyovo.com" target="_blank" style="color: #00A2D6;">访问作者博客</a></td>
                                    </tr>
                                    <tr>
                                        <th>开发者</th>
                                        <td>风影OvO(admin@fyovo.com)</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <style id="welcome_style"></style>
                <div class="layui-col-md12">
                    <!-- 保留版权信息是对作者最大的尊重! -->
                    <blockquote class="layui-elem-quote layui-quote-nm">感谢layui,x-admin,jquery,本系统由 [<a href="https://www.fyovo.com" target="_blank">风影OvO</a>] 提供技术支持。</blockquote></div>
            </div>
        </div>
        </div>
    </body>
</html>