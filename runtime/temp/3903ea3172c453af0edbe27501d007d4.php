<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"C:\Object\zuanqun\web/../app/auth\view\default\login\login.html";i:1517186665;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>钻群-登入</title>
    <link href="__CSS1__/common.css" type="text/css" rel="stylesheet" />
    <link href="__CSS1__/login.css" type="text/css" rel="stylesheet" />
    <link href="__CSS1__/auth.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
</head>
<body>

<div id="content">
    <div class="login-box">
        <div class="login-content">
            <div class="login-bg"></div>
            <div class="login-wrap">
                <span class="login-title">登入</span>
                <div class="auth-login auth-warp">
                    <div class="auth-form">
                        <fieldset class="auth-fieldset">
                            <div class="auth-input">
                <span class="auth-input-box first">
                    <label class="auth-lable">登入</label>
                    <input type="text" id="account" placeholder="请填写手机号" class="auth-input-text" name="account">
                </span>
                <span class="auth-input-box last">
                    <label class="auth-lable">密码</label>
                    <input type="password" id="password" placeholder="请填写密码" class="auth-input-text" name="account">
                </span>
                            </div>

                            <div class="auth-function">
                                <a href="javascript:void(0);" id="forget" class="auth-forget">忘记密码</a>
                            </div>

                            <div class="auth-tool">
                                <a href="javascript:void(0);" class="auth-btn_login" id="login">登录</a>
                                <a href="<?php echo url('auth/register/index'); ?>" target="_blank" class="auth-btn_register" id="register">注册</a>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="bg"></div>
        </div>
    </div>
</div>


<script src="__COM__/util.js"></script>
<script src="__COM__/jquery.js"></script>
<script src="__COM__/layer/layer.js"></script>
<script src="__COM__/layui/layui.js"></script>
<script>
    $(document).on('click','#login',function(){
        var data = {account:$('#account').val(),password:$('#password').val()};
        console.log(data);
        request("<?php echo url('auth/login/login'); ?>",data,function(res){
            if (res.code == 1) {
                console.log(res);
                layer.msg(res.msg, {icon: res.code});
                localStorage.setItem('token', res.token);
                setCookie('token',res.token);
//                console.log(document.cookie);
//                redirect("<?php echo url('user/user/index'); ?>");
            } else {
                layer.msg(res.msg, {icon: res.code});
            }
        });
    });
</script>
</body>
</html>