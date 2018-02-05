<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"C:\Object\zuanqun\web/../app/open\view\default\create\web.html";i:1517814252;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>创建网站应用</title>
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
                        <div class="layui-input-block">
                            <input type="text" id="web_name" name="web_name" placeholder="请输入网站名称" class="layui-input title">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="text" id="domain" name="domain" placeholder="请输入网站域名" class="layui-input title">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="text" id="beian" name="beian" placeholder="请输入备案信息" class="layui-input title">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <textarea id="web_info" name="web_info" class="layui-textarea title" placeholder="网站描述"></textarea>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <div class="link-footer">
                                <a class="layui-btn" id="push">立即创建</a>
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
        if($('#web_name').val() == ''){
            layer.msg('网站名称不能为空!');
            return false;
        }
        if($('#domain').val() == ''){
            layer.msg('网站域名不能为空！');
            return false;
        }
        if($('#beian').val() == ''){
            layer.msg('备案信息不能为空！');
            return false;
        }
        if($('#web_info').val() == ''){
            layer.msg('网站描述不能为空！');
            return false;
        }
        var data = $('#form').serialize();
        request("<?php echo url('open/Create/web'); ?>",data,function(res){
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