<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"/Users/liujun/workspace/php/zuanqun/web/../app/console/view/default/menu/add_menu.html";i:1518090959;s:75:"/Users/liujun/workspace/php/zuanqun/app/console/view/default/base/base.html";i:1517484840;}*/ ?>
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


<link rel="stylesheet" href="/static/common/layui/css/layui.css">
<link rel="stylesheet" href="__COM__/form.css">

<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-header">添加菜单</div>
            <div class="layui-card-body">
                <div class="zq-form">
                    <form id="form" class="layui-form">
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <input id="class_name" type="text" name="class_name" placeholder="请输入标题" class="layui-input title">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <select name="menu_tree" id="menu_tree">
                                    <option value=""></option>
                                    <option value="0">父级菜单</option>
                                    <option value="1">API文档</option>
                                    <option value="2">帮助文档</option>
                                    <option value="7">商品分类</option>
                                </select>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <div class="link-footer">
                                    <a class="layui-btn" id="push">立即添加</a>
                                    <a class="layui-btn" id="back">返回</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/static/common/jquery.js"></script>
<script src="__COM__/layui/layui.js"></script>
<script src="__COM__/layer/layer.js"></script>
<script type="text/html" id="app_bar">
    <div class="layui-btn-group">
        <a class="layui-btn layui-btn-xs" lay-event="detail">查看权限</a>
    </div>
</script>

<script>

    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });

    $(document).on('click','#push',function () {
        if($('#class_name').val() == ''){
            layer.msg('菜单名不能为空');
            return false;
        }
        if($('#menu_tree').val() == ''){
            layer.msg('请选择父级元素');
            return false;
        }
        var data = $('#form').serialize();
        request("<?php echo url('console/Menu/Menu'); ?>",data,function(res){
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