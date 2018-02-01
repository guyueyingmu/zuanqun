<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"C:\Object\zuanqun\web/../app/console\view\default\article\noticedoc.html";i:1517456670;s:57:"C:\Object\zuanqun\app\console\view\default\base\base.html";i:1517389329;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>公共继承标题</title>
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
    <link rel="stylesheet" href="__CONSOLE__/default/common/css/common.css">
    <link href="__COM__/editor.md/css/editormd.min.css" type="text/css" rel="stylesheet" />
    <script src="__COM__/jquery.js"></script>
    <script src="__COM__/layer/layer.js"></script>
    <script src="__COM__/layui/layui.js"></script>
    <script src="__COM__/util.js"></script>
    <script src="__COM__/editor.md/editormd.min.js"></script>
</head>
<body>

<link rel="stylesheet" href="/static/console/default/css/form.css">
<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-header">公告文档管理</div>
            <div class="layui-card-body">
                <div class="zq-form">
                    <form id="doc" class="layui-form" action="" lay-filter="component-form-group">
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <input id="title" type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input title">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <input id="cat" type="text" name="cat" lay-verify="required" placeholder="请输入" autocomplete="off" class="layui-input">
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <div id="markdown">
                                <textarea id="noticedoc" name="noticedoc" style="display: none;"></textarea>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <div class="link-footer">
                                    <a id="push" class="layui-btn" lay-submit="" lay-filter="component-form-demo1">立即提交</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var markdown;
        markdown = editormd("markdown", {
            width   : "99.5%",
            height  : 380,
            syncScrolling : "single",
            path    : "__COM__/editor.md/lib/"
        });
    });
    $(document).on('click','#push',function(){
        if($('#title').val() == ''){
            layer.msg('文档标题不能为空');
            return false;
        }
        if($('#hrlpdoc').val() == ''){
            layer.msg('文档内容不能为空');
            return false;
        }
        var data = $('#doc').serialize();
        request("<?php echo url('console/NoticeArticle/doc'); ?>",data,function(res){
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


</body>
</html>