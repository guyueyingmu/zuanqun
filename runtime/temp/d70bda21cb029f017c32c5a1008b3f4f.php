<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"/Users/liujun/workspace/php/zuanqun/web/../app/user/view/default/verify_info/index.html";i:1516708550;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>验证信息</title>
    <link rel="stylesheet" href="__USER_CSS__/common.css">
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
</head>
<body>

<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-header">淘客身份认证</div>
            <div class="layui-card-body">
                <form class="layui-form" action="" lay-filter="component-form-group">

                    <div class="layui-form-item">
                        <label class="layui-form-label">团队名称</label>
                        <div class="layui-input-block">
                            <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入团队名称" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">手机号</label>
                        <div class="layui-input-block">
                            <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入团队名称" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-inline inline-logo">
                            <label class="layui-form-label">团队logo</label>
                            <div class="layui-input-inline">
                                <input type="text" name="number" autocomplete="off" class="layui-input input-logo" readonly>
                            </div>
                            <a type="button" class="layui-btn" id="logo">
                                <i class="layui-icon">&#xe67c;</i>上传图片
                            </a>
                        </div>
                        <div class="layui-inline inline-logo">
                            <label class="layui-form-label">实力证明</label>
                            <div class="layui-input-inline">
                                <input type="text" name="number" autocomplete="off" class="layui-input input-logo" readonly>
                            </div>
                            <a type="button" class="layui-btn" id="verify">
                                <i class="layui-icon">&#xe67c;</i>上传图片
                            </a>
                        </div>
                    </div>

                    <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">团队简介</label>
                        <div class="layui-input-block">
                            <textarea name="text" class="layui-textarea"></textarea>
                        </div>
                    </div>

                    <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">推广渠道</label>
                        <div class="layui-input-block">
                            <textarea name="text" class="layui-textarea"></textarea>
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
</script>
</html>