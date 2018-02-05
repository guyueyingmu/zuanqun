<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"/Users/liujun/workspace/php/zuanqun/web/../app/user/view/default/zcard/index.html";i:1517830384;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>点券管理</title>
    <link rel="stylesheet" href="__USER_CSS__/common.css">
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
</head>
<body>

<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-header">点券管理</div>
            <div class="layui-card-body">
                <div class="link-info-box">
                    <div class="link-info">
                        <p>
                            要正常使用CMS需要在此下载index.php文件并上传到您自己的服务器
                        </p>
                    </div>
                    <div class="link-down">

                    </div>
                </div>
            </div>
        </div>
        <div class="layui-fluid">
            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                <ul class="layui-tab-title">
                    <li class="layui-this">充值记录</li>
                    <li>用户管理</li>
                    <li>权限分配</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="LAY-app-message-btns" style="margin-bottom: 10px;">
                        <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="all" data-events="del">删除</button>
                        <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="all" data-events="ready">标记已读</button>
                        <button class="layui-btn layui-btn-primary layui-btn-sm" data-type="all" data-events="readyAll">全部已读</button>
                    </div>
                    <div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-3" style=" ">
                        <div class="layui-table-box">
                            <div class="layui-table-header link-table-header">
                            </div>
                            <div class="layui-table-body layui-table-main">
                            </div>
                        <style>
                            .laytable-cell-3-0{ width: 48px; }
                            .laytable-cell-3-title{ width: 830px; }
                            .laytable-cell-3-time{ width: 170px; }
                        </style>
                    </div>
                </div>
            </div>

                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <div class="link-footer">
                            <button class="layui-btn" lay-submit="" lay-filter="component-form-demo1">返回</button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

</body>

<script src="__COM__/jquery.js"></script>
<script src="__COM__/layui/layui.js"></script>
</html>