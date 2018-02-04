<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"/Users/liujun/workspace/php/zuanqun/web/../app/user/view/default/app_key/manage.html";i:1517484840;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>appkey</title>
    <link rel="stylesheet" href="__USER_CSS__/common.css">
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
</head>
<body>

<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-header">AppKey管理</div>
            <div class="layui-card-body">
                <form class="layui-form" action="" lay-filter="component-form-group">

                    <div class="layui-form-item">
                        <label class="layui-form-label">AppKey</label>
                        <div class="layui-input-block">
                            <input type="text" name="AppKey" autocomplete="off" class="layui-input input-none" value="<?php echo $appkey; ?>" disabled>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">AppSecret</label>
                        <div class="layui-input-block">
                            <input type="text" name="AppSecret" autocomplete="off" class="layui-input input-none" disabled>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <div class="link-footer">
                                <a class="layui-btn">重置AppSecret</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="layui-fluid link-box">
            <div class="layui-card-header">开放平台使用说明</div>
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
    </div>
</div>

</body>

<script src="__COM__/jquery.js"></script>
<script src="__COM__/layui/layui.js"></script>
</html>