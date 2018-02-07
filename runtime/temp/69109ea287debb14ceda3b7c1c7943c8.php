<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\Object\zuanqun\web/../app/open\view\default\manager\app_key.html";i:1517902012;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查看app权限</title>
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
    <link rel="stylesheet" href="__COM__/form.css">
    <link rel="stylesheet" href="__OPEN_CSS__/common.css">
</head>
<body>

<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-body">
                <form class="layui-form" id="form">

                    <div class="layui-form-item">
                        <label class="layui-form-label">AppId</label>
                        <?php echo $app_info['app_id']; ?>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">AppKey</label>
                        <?php echo $app_info['app_key']; ?>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">AppSecret</label>
                        <?php echo $app_info['app_secret']; ?>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <div class="link-footer">
                                <a class="layui-btn" id="push">关闭</a>
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