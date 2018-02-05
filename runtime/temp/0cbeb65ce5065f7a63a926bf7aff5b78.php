<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"/Users/liujun/workspace/php/zuanqun/web/../app/user/view/default/user/index.html";i:1517830384;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户中心-钻群</title>
    <link rel="stylesheet" href="__USER_CSS__/index.css">
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
</head>
<body>

<div class="box">
    <div class="body">
        <div class="left">
            <div class="wiki-left-logo">
                <img src="https://opens.wang/resource/static/main/img/linkphp.png">
            </div>
            <div class="wiki-left-box">
                <div class="wiki-box">
                    <span class="wiki-show">
                    <a href="javascript:;">
                        <i class="layui-icon icon icon-active">&nbsp;&nbsp;&#xe61a;</i>
                        <i class="layui-icon icon icon-none">&nbsp;&nbsp;&#xe602;</i>&nbsp;&nbsp;个人中心</a>
                    </span>
                    <ul class="wiki-active">
                        <li><a class="wiki-src" href="javascript:;" c-view="/user/info">&nbsp;&nbsp;&nbsp;&nbsp;基本信息</a></li>
                        <li><a class="wiki-src" href="javascript:;" c-view="/verify_info/index">&nbsp;&nbsp;&nbsp;&nbsp;认证中心</a></li>
                        <li><a class="wiki-src" href="javascript:;" c-view="/zcard/index">&nbsp;&nbsp;&nbsp;&nbsp;点券管理</a></li>
                    </ul>
                </div>
                <div class="wiki-box">
                    <span class="wiki-show">
                    <a href="javascript:;">
                        <i class="layui-icon icon icon-active">&nbsp;&nbsp;&#xe61a;</i>
                        <i class="layui-icon icon icon-none">&nbsp;&nbsp;&#xe602;</i>&nbsp;&nbsp;产品中心</a>
                    </span>
                    <ul class="wiki-active">
                        <li><a class="wiki-src" href="javascript:;" c-view="/cms_base/index">&nbsp;&nbsp;&nbsp;&nbsp;CMS网站</a></li>
                        <li><a class="wiki-src" href="http://www.zuanqun.com:8080/wechat/main" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;微信公众号</a></li>
                    </ul>
                </div>
                <div class="wiki-box">
                    <span class="wiki-show">
                    <a href="javascript:;">
                        <i class="layui-icon icon icon-none">&nbsp;&nbsp;&#xe61a;</i>
                        <i class="layui-icon icon icon-active">&nbsp;&nbsp;&#xe602;</i>&nbsp;&nbsp;账号管理</a>
                    </span>
                    <ul class="wiki-none">
                        <li><a class="wiki-src" href="javascript:;" c-view="/reset_info/password">&nbsp;&nbsp;&nbsp;&nbsp;重置密码</a></li>
                        <li><a class="wiki-src" href="javascript:;" c-view="/reset_info/mobile">&nbsp;&nbsp;&nbsp;&nbsp;修改手机号</a></li>
                    </ul>
                </div>
                <div class="wiki-box">
                    <span class="wiki-show">
                    <a href="javascript:;">
                        <i class="layui-icon icon icon-active">&nbsp;&nbsp;&#xe61a;</i>
                        <i class="layui-icon icon icon-none">&nbsp;&nbsp;&#xe602;</i>&nbsp;&nbsp;推广渠道</a>
                    </span>
                    <ul class="wiki-active">
                        <li><a class="wiki-src" href="javascript:;" c-view="/pid_info/index">&nbsp;&nbsp;&nbsp;&nbsp;PID设置</a></li>
                        <li><a class="wiki-src" href="javascript:;" c-view="/channel/index">&nbsp;&nbsp;&nbsp;&nbsp;推广方案</a></li>
                    </ul>
                </div>
                <div class="wiki-box">
                    <span class="wiki-show">
                    <a href="javascript:;">
                        <i class="layui-icon icon icon-active">&nbsp;&nbsp;&#xe61a;</i>
                        <i class="layui-icon icon icon-none">&nbsp;&nbsp;&#xe602;</i>&nbsp;&nbsp;开发者中心</a>
                    </span>
                    <ul class="wiki-active">
                        <li><a class="wiki-src" href="javascript:;" c-view="/app_key/manage">&nbsp;&nbsp;&nbsp;&nbsp;APPKey管理</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="wiki-header">
            <div class="header-logo">
                <img src="__USER_IMG__/user.png">
            </div>
            <div class="header-notic">
                <a class="wiki-src" href="javascript:;" c-view="/info/index">
                    <i class="layui-icon icon">&#xe645;</i>
                </a>
            </div>
        </div>
        <div class="right">
            <iframe src="/index/index" id="wiki-view" style="width: 100%; height: 100%; position: absolute;;" frameborder="0"></iframe>
        </div>
        <div class="wiki-footer">© linkphp.cn - php api框架</div>
    </div>
</div>
<script src="__COM__/jquery.js"></script>
<script src="__COM__/util.js"></script>
<script src="__USER_JS__/index.js"></script>
<script src="__COM__/layui/layui.js"></script>
<script>
    console.log(document.cookie);
</script>
</body>
</html>