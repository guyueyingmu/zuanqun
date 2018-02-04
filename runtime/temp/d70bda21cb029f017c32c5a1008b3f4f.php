<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"/Users/liujun/workspace/php/zuanqun/web/../app/user/view/default/verify_info/index.html";i:1517758505;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>验证信息</title>
    <link rel="stylesheet" href="__USER_CSS__/common.css">
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
    <link rel="stylesheet" href="__COM__/form.css">
</head>
<body>

<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-header">淘客身份认证</div>
            <div class="layui-card-body">
                <form class="layui-form" action="" lay-filter="component-form-group">

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input id="team_name" type="text" name="title" placeholder="请输入团队名称" class="layui-input title">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="text" name="title" placeholder="请输入团队名称" class="layui-input title">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-inline inline-logo">
                            <div class="layui-input-inline">
                                <input type="text" name="number" autocomplete="off" class="layui-input input-logo" readonly>
                            </div>
                            <a type="button" class="layui-btn" id="logo">
                                <i class="layui-icon">&#xe67c;</i>上传团队logo
                            </a>
                        </div>
                        <div class="layui-inline inline-logo">
                            <div class="layui-input-inline">
                                <input type="text" name="number" autocomplete="off" class="layui-input input-logo" readonly>
                            </div>
                            <a type="button" class="layui-btn" id="verify">
                                <i class="layui-icon">&#xe67c;</i>上传实力证明
                            </a>
                        </div>
                    </div>

                    <div class="layui-form-item layui-form-text">
                        <div class="layui-input-block">
                            <textarea name="text" class="layui-textarea title" placeholder="请输入团队简介"></textarea>
                        </div>
                    </div>

                    <div class="layui-form-item layui-form-text">
                        <div class="layui-input-block">
                            <textarea name="text" class="layui-textarea title" placeholder="请输入推广渠道"></textarea>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <div class="link-footer">
                                <a class="layui-btn" id="push">立即提交</a>
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
<script>
    layui.use('upload', function(){
        var upload = layui.upload;

        //上传团队logo
        var logo = upload.render({
            elem: '#logo' //绑定元素
            ,url: '/upload/' //上传接口
            ,done: function(res){
                //上传完毕回调
            }
            ,error: function(){
                //请求异常回调
            }
        });

        //上传资历证明
        var verify = upload.render({
            elem: '#verify' //绑定元素
            ,url: '/upload/' //上传接口
            ,done: function(res){
                //上传完毕回调
            }
            ,error: function(){
                //请求异常回调
            }
        });
    });

    $(document).on('click','#push',function(){
        if($('#team_name').val() == ''){
            layer.msg('团队名称不能为空!');
            return false;
        }
        if($('#apidoc').val() == ''){
            layer.msg('文档内容不能为空');
            return false;
        }
        var data = $('#doc').serialize();
        request("<?php echo url('console/Article/doc/type/api'); ?>",data,function(res){
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