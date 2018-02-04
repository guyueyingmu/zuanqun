<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"/Users/liujun/workspace/php/zuanqun/web/../app/auth/view/default/register/register.html";i:1517484840;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>钻群-注册</title>
    <link href="__CSS1__/common.css" type="text/css" rel="stylesheet" />
    <link href="__CSS1__/register.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
</head>
<body>
<div id="content">
    <div class="reg-header">
        <div class="header-content">
            <span class="switch-login">
                <a href="<?php echo url('auth/login/index'); ?>">登入</a>
            </span>
            <a href="<?php echo url('index/index/index'); ?>">
                <span class="reg"></span>
            </a>
        </div>
    </div>
    <div class="reg-content">
        <div class="reg-main">
            <div class="reg-title">注册钻群账号</div>
            <div class="reg-box">
                <div class="reg-input-box">
                    <div class="reg-input-field">
                        <span class="reg-input-bg reg-icon"><label><i class="layui-icon icon">&#xe612;</i></label></span>
                        <span class="reg-input-bg">  <input type="text" class="input-bg" name="phone" id="phone" placeholder="请输入手机号"></span>
                    </div>
                    <div class="reg-input-field">
                        <span class="reg-input-bg reg-icon"><label><i class="layui-icon icon">&#xe617;</i></label></span>
                        <span class="reg-input-bg"><input type="password" class="input-bg" name="password" id="password" placeholder="请输入密码"></span>
                    </div>
                    <div class="reg-input-field submit">
                        <div id="register" class="reg-submit">立即登入</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reg-footer">
        <div class="footer-content">
            <span class="footer-text"><p>Copyright © 2017-2018 zuanqun.cn All Rights Reserved.</p></span>
            <span class="footer-text"><p>蜀ICP备15025833号 | 增值电信业务经营许可证：川B2-20170282</p></span>
            <span class="footer-text"><p>关于钻群 | 服务协议 | 运营中心 | 举报中心 | 钻群客服 | 联系邮箱 | 侵权投诉|微信号zuanqununion</p></span>
        </div>
    </div>
</div>

<script src="__COM__/util.js"></script>
<script src="__COM__/jquery.js"></script>
<script src="__COM__/layer/layer.js"></script>
<script src="__COM__/layui/layui.js"></script>
<script>
    $(document).on('click','#register',function(){
        var data = {phone:$('#phone').val(),password:$('#password').val()};
        request("<?php echo url('auth/register/register'); ?>",data,function(res){
            console.log(res);
            if (res.code == 1) {
                layer.msg(res.msg, {icon: res.code});
                redirect("<?php echo url('user/user/index'); ?>");
            } else {
                layer.msg(res.msg, {icon: res.code});
            }
        });
    });
</script>
</body>
</html>