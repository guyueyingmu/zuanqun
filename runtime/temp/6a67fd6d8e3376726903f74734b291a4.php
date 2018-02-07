<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"/Users/liujun/workspace/php/zuanqun/web/../app/console/view/default/article/apidoc.html";i:1518010138;s:75:"/Users/liujun/workspace/php/zuanqun/app/console/view/default/base/base.html";i:1517484840;}*/ ?>
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
            <div class="layui-card-header">API文档管理</div>
            <div class="layui-card-body">
                <div class="zq-form">
                    <form id="doc" class="layui-form" lay-filter="component-form-group">
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <input id="title" type="text" name="title" autocomplete="off" placeholder="请输入标题" class="layui-input title">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <select name="cat" id="menu_tree">
                                    <option value=""></option>
                                    <option value="6">API使用教程</option>
                                </select>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <div id="markdown">
                                <textarea id="apidoc" name="apidoc" style="display: none;"></textarea>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <div class="link-footer">
                                    <a class="layui-btn" id="push">立即发布</a>
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
    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });
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
        if($('#apidoc').val() == ''){
            layer.msg('文档内容不能为空');
            return false;
        }
        var data = $('#doc').serialize();
        request("<?php echo url('console/Article/doc',['type' => 'api']); ?>",data,function(res){
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