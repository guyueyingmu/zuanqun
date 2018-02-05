<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"/Users/liujun/workspace/php/zuanqun/web/../app/user/view/default/cms_base/index.html";i:1517830384;}*/ ?>
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
                    <li>高级管理</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-card-body">
                        <form class="layui-form" id="form">

                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <input type="text" id="web_title" name="web_title" value="<?php echo $info['website']; ?>" placeholder="请输入网站名称" class="layui-input title">
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <input type="text"  id="web_domain" name="web_domain" value="<?php echo $info['domain']; ?>" placeholder="请输入网站域名" class="layui-input title">
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <input type="text" id="beian" name="beian" value="<?php echo $info['beian']; ?>" placeholder="请输入备案号" class="layui-input title">
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <div class="layui-inline inline-logo">
                                    <div class="layui-input-inline">
                                        <input type="text" class="layui-input input-logo" readonly>
                                    </div>
                                    <a type="button" class="layui-btn" id="logo">
                                        <i class="layui-icon">&#xe67c;</i>上传网站logo
                                    </a>
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
    </div>
</div>

</body>

<script src="__COM__/jquery.js"></script>
<script src="__COM__/util.js"></script>
<script src="__COM__/layer/layer.js"></script>

<script>
    $(document).on('click','#push',function(){
        if($('#web_title').val() == ''){
            layer.msg('网站名称不能为空!');
            return false;
        }
        if($('#web_domain').val() == ''){
            layer.msg('网站域名不能为空！');
            return false;
        }
        if($('#beian').val() == ''){
            layer.msg('备案号不能为空！');
            return false;
        }
        var data = $('#form').serialize();
        request("<?php echo url('user/CmsBase/add'); ?>",data,function(res){
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