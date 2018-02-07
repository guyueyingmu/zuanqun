<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"C:\Object\zuanqun\web/../app/console\view\default\menu\menu.html";i:1517978902;s:57:"C:\Object\zuanqun\app\console\view\default\base\base.html";i:1517531928;}*/ ?>
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
            <div class="layui-card-header">菜单管理</div>
            <div class="layui-card-body">
                <div class="zq-form">
                    <div class="LAY-app-message-btns" style="margin-bottom: 10px;">
                        <a class="layui-btn layui-btn-primary layui-btn-sm">删除</a>
                        <a href="<?php echo url('console/menu_temp/addMenu'); ?>" class="layui-btn layui-btn-primary layui-btn-sm">新增菜单</a>
                    </div>
                    <table id="app" lay-filter="app"></table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/static/common/jquery.js"></script>
<script src="__COM__/layer/layer.js"></script>
<script src="/static/common/layui/layui.js"></script>
<script type="text/html" id="app_bar">
    <div class="layui-btn-group">
        <a class="layui-btn layui-btn-xs" lay-event="edit">修改</a>
    </div>
</script>

<script>
    layui.use(['table','element'], function(){
        var table = layui.table;
        var element = layui.element;

        //第一个实例
        table.render({
            elem: '#app'
            ,height: 460
            ,url: '/console/menu/Menu/' //数据接口
            ,page: true //开启分页
            ,cols: [[
                {checkbox: true}
                ,{field: 'id', title: 'ID', width:75, sort: true, align:'center'}
                ,{field: 'cat_name', title: '菜单名称', width:200, align:'center'}
                ,{field: 'pid', title: '上级菜单', width:230, align:'center'}
                ,{fixed: 'right', width:150, align:'center', toolbar: '#app_bar'}
            ]]
            ,skin: 'nob' //行边框风格
        });

        //监听工具条
        table.on('tool(app)', function(obj){
            var data = obj.data; //获得当前行数据
            var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
            var tr = obj.tr; //获得当前行 tr 的DOM对象

            if(layEvent === 'detail'){ //查看
                layer.open({
                    type: 2,
                    title: '创建网站应用',
                    shadeClose: true, //点击遮罩关闭层
                    area : ['780px' , '380px'],
                    content: "<?php echo url('open/Create/getAppKey'); ?>?app_id="+data.app_id
                });
            } else if(layEvent === 'edit'){ //编辑
                //do something

                //同步更新缓存对应的值
                obj.update({
                    username: '123'
                    ,title: 'xxx'
                });
            }
        });

    });

    $(document).on('click','#create_web',function () {
        layer.open({
            type: 2,
            title: '创建网站应用',
//            maxmin: true,
            shadeClose: true, //点击遮罩关闭层
            area : ['680px' , '520px'],
            content: "<?php echo url('open/CreateInfo/createWeb'); ?>"
        });
    });
</script>

</body>
</html>