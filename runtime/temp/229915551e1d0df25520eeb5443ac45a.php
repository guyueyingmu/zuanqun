<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"/Users/liujun/workspace/php/zuanqun/web/../app/user/view/default/reset/mobile.html";i:1517830384;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改手机号</title>
    <link rel="stylesheet" href="__USER_CSS__/common.css">
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
    <link rel="stylesheet" href="__COM__/form.css">
</head>
<body>

<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-header">修改手机号</div>
            <div class="layui-card-body">
                <form class="layui-form" action="" lay-filter="component-form-group">

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="text" name="title" placeholder="请输入新手机号" class="layui-input title">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <div class="layui-input-inline">
                                <input type="tel" name="phone" placeholder="请输入验证码" class="layui-input title">
                            </div>
                            <a type="button" class="layui-btn" id="logo">
                                <i class="layui-icon">&#xe67c;</i>发送验证码
                            </a>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <div class="link-footer">
                                <button class="layui-btn" lay-submit="" lay-filter="component-form-demo1">立即提交</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

<script src="__COM__/jquery.js"></script>
<script src="__COM__/layui/layui.js"></script>
</html>