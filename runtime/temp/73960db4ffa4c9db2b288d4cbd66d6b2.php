<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"/Users/liujun/workspace/php/zuanqun/web/../app/open/view/default/wiki/apiinfo.html";i:1517225971;s:72:"/Users/liujun/workspace/php/zuanqun/app/open/view/default/base/base.html";i:1517225971;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>公共继承标题</title>
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
    <link rel="stylesheet" href="__OPEN_CSS__/base.css">
</head>
<body>

<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-header">API调用说明</div>
            <div class="layui-card-body">
                <pre class="layui-code">
正式环境地址:

https://api.zuanqun.cn/router/rest
                </pre>
            </div>
        </div>
    </div>
</div>


</body>
<script src="__COM__/layui/layui.js"></script>
<script>
    layui.use('code', function(){ //加载code模块
        layui.code({
            title: '钻群API接口'
            ,skin: 'notepad'
            ,about: false
        }); //引用code方法

    });
</script>
</html>