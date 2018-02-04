<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"/Users/liujun/workspace/php/zuanqun/web/../app/user/view/default/cms_base/index.html";i:1517752619;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cms设置</title>
    <link rel="stylesheet" href="__USER_CSS__/common.css">
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
    <link rel="stylesheet" href="__COM__/form.css">
</head>
<body>

<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-header">cms下载</div>
            <div class="layui-card-body">
                <div class="link-info-box">
                    <div class="link-info">
                        <p>
                            要正常使用CMS需要在此下载index.php文件并上传到您自己的服务器
                        </p>
                    </div>
                    <div class="link-down">
                        <button class="layui-btn" lay-submit="" lay-filter="component-form-demo1"><i class="layui-icon">&#xe601;</i>点此下载程序文件</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="layui-fluid">
            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                <ul class="layui-tab-title">
                    <li class="layui-this">网站设置</li>
                    <li>用户管理</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-card-body">
                        <form class="layui-form" action="" lay-filter="component-form-group">

                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <input type="text" name="title" placeholder="请输入网站名称" class="layui-input title">
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <input type="text" name="title" placeholder="请输入网站域名" class="layui-input title">
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <input type="text" name="title" placeholder="请输入备案号" class="layui-input title">
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <div class="layui-inline inline-logo">
                                    <div class="layui-input-inline">
                                        <input type="text" name="number" autocomplete="off" class="layui-input input-logo" readonly>
                                    </div>
                                    <a type="button" class="layui-btn" id="logo">
                                        <i class="layui-icon">&#xe67c;</i>上传网站logo
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
    </div>
</div>

</body>

<script src="__COM__/jquery.js"></script>
<script src="__COM__/layui/layui.js"></script>
</html>