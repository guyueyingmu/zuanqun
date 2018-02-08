<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"/Users/liujun/workspace/php/zuanqun/web/../app/user/view/default/app_key/manage.html";i:1518103760;}*/ ?>
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
                        <label class="layui-form-label">AppId</label>
                        <div class="layui-input-block">
                            <input type="text" name="AppKey" autocomplete="off" class="layui-input input-none" value="<?php echo $appkey; ?>" readonly>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">AppKey</label>
                        <div class="layui-input-block">
                            <input type="text" name="AppSecret" autocomplete="off" class="layui-input input-none" readonly>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <div class="link-footer">
                                <a class="layui-btn">重置AppKey</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="layui-fluid">
            <div class="layui-card-header">AppKey使用说明</div>
            <div class="layui-card-body">
                <div class="link-info-box">
                    <div class="link-info">
                        <p>
                            AppId与AppKey作为网站cms、小程序、微信公众号等与钻群联盟主站通信校验凭证，请妥善保管请勿泄露
                        </p>
                    </div>
                    <div class="link-down">

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