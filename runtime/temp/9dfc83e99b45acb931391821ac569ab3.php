<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:90:"/Users/liujun/workspace/php/zuanqun/web/../app/console/view/default/article/noticedoc.html";i:1517230937;s:75:"/Users/liujun/workspace/php/zuanqun/app/console/view/default/base/base.html";i:1517230428;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>公共继承标题</title>
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
    <link rel="stylesheet" href="__CONSOLE__/default/common/css/common.css">
    <link href="__COM__/editor.md/css/editormd.min.css" type="text/css" rel="stylesheet" />
    <script src="__COM__/jquery.js"></script>
    <script src="__COM__/layui/layui.js"></script>
    <script src="__COM__/editor.md/editormd.min.js"></script>
</head>
<body>

<link rel="stylesheet" href="/static/console/default/css/form.css">
<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-header">公告文档管理</div>
            <div class="layui-card-body">
                <div class="zq-form">
                    <form class="layui-form" action="" lay-filter="component-form-group">
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input title">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <input type="text" name="username" lay-verify="required" placeholder="请输入" autocomplete="off" class="layui-input">
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <div id="markdown">
                                <textarea name="apidoc" style="display: none;"></textarea>
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
</div>

<script>
    $(document).ready(function () {
        var markdown;
        markdown = editormd("markdown", {
            width   : "99.5%",
            height  : 380,
            syncScrolling : "single",
            path    : "__COM__/editor.md/lib/"
        });
    });
</script>


</body>
</html>