<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"/Users/liujun/workspace/php/zuanqun/web/../app/user/view/default/reset/password.html";i:1517830384;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>重置密码</title>
    <link rel="stylesheet" href="__USER_CSS__/common.css">
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
    <link rel="stylesheet" href="__COM__/form.css">
</head>
<body>

<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-header">重置密码</div>
            <div class="layui-card-body">
                <form class="layui-form" id="form">

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="text" id="old_password" name="old_password" placeholder="请输入旧密码" class="layui-input title">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="password" id="password" name="password" placeholder="请输入新密码" class="layui-input title">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="password" id="password2" name="password2" placeholder="请输入确认密码" class="layui-input title">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <div class="link-footer">
                                <a class="layui-btn" id="push">立即修改</a>
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
<script src="__COM__/util.js"></script>
<script src="__COM__/layer/layer.js"></script>

<script>
    $(document).on('click','#push',function(){
        if($('#old_password').val() == ''){
            layer.msg('旧密码不能为空!');
            return false;
        }
        if($('#password').val() == ''){
            layer.msg('新密码不能为空！');
            return false;
        }
        if($('#password2').val() == ''){
            layer.msg('确认密码不能为空！');
            return false;
        }
        var data = $('#form').serialize();
        request("<?php echo url('user/Reset/edit'); ?>",data,function(res){
            if (res.code == 1) {
                console.log(res);
                layer.msg(res.msg, {icon: res.code});
//                console.log(document.cookie);
//                redirect("<?php echo url('user/user/index'); ?>");
            } else {
                layer.msg(res.msg, {icon: res.code});
            }
        });
    });
</script>
</html>