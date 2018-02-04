<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"/Users/liujun/workspace/php/zuanqun/web/../app/user/view/default/index/index.html";i:1517484840;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>验证信息</title>
    <link rel="stylesheet" href="__USER_CSS__/common.css">
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
</head>
<body>

<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-header">用户中心</div>
            <div class="layui-card-body">
                <form class="layui-form" action="" lay-filter="component-form-group">

                    <div class="layui-form-item">
                        <label class="layui-form-label">单行输入框</label>
                        <div class="layui-input-block">
                            <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">多规则验证</label>
                            <div class="layui-input-inline">
                                <input type="text" name="number" lay-verify="required|number" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">验证日期</label>
                            <div class="layui-input-inline">
                                <input type="text" name="date" id="LAY-component-form-group-date" lay-verify="date" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input" lay-key="1">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">验证链接</label>
                            <div class="layui-input-inline">
                                <input type="tel" name="url" lay-verify="url" autocomplete="off" class="layui-input">
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