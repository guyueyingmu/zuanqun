<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"/Users/liujun/workspace/php/zuanqun/web/../app/wechat/view/default/wx_app/index.html";i:1517484840;s:74:"/Users/liujun/workspace/php/zuanqun/app/wechat/view/default/base/base.html";i:1517484840;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>公共继承标题</title>
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
    <script src="__COM__/layui/layui.js"></script>
</head>
<body>

<link rel="stylesheet" href="__WECHAT_CSS__/welcome.css">
<link rel="stylesheet" href="__WECHAT_CSS__/common.css">

<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-header">微信小程序生成</div>
            <div class="layui-card-body">
                <form class="layui-form" action="" lay-filter="component-form-group">
                    <div class="layui-form-item">
                        <label class="layui-form-label">AppId</label>
                        <div class="layui-input-block">
                            <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入小程序AppID" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">小程序名称</label>
                        <div class="layui-input-block">
                            <input type="text" name="username" lay-verify="required" placeholder="请输入小程序名称" autocomplete="off" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <div class="link-footer">
                                <button class="layui-btn" lay-submit="" lay-filter="component-form-demo1">立即生成</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>