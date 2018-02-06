<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"C:\Object\zuanqun\web/../app/console\view\default\index\index.html";i:1517877819;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>钻群后台 - zuanqun.cn</title>
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
    <link rel="stylesheet" href="__CONSOLE__/default/common/css/nav.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">钻群后台</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="">控制台</a></li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
                    钻群
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退出</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">管理中心</a>
                    <dl class="layui-nav-child">
                        <dd class="layui-this"><a href="/console"><i class="layui-icon">&#xe68e;</i>&nbsp;主页</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe620;</i>&nbsp;网站设置</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe620;</i>&nbsp;菜单管理</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">用户管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;注册用户</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">文档管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" class="console" c-view="/console/Article_Temp/helpDoc"><i class="layui-icon">&#xe613;</i>&nbsp;帮助文档</a></dd>
                        <dd><a href="javascript:;" class="console" c-view="/console/Article_Temp/apiDoc"><i class="layui-icon">&#xe613;</i>&nbsp;API文档</a></dd>
                        <dd><a href="javascript:;" class="console" c-view="/console/Article_Temp/noticeDoc"><i class="layui-icon">&#xe613;</i>&nbsp;公告文档</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

    <div class="zqTab-box">
        <div class="layui-tab layui-tab-brief zqTab" lay-allowClose="true">
            <ul class="layui-tab-title">
                <li class="layui-this" lay-id="1"><i class="layui-icon">&#xe68e;</i>&nbsp;主页<p class="layui-tab-close" style="display: none;"></p></li>
            </ul>
        </div>
    </div>

    <div class="layui-body">

        <!-- 内容主体区域 -->
        <div class="layui-tab-item layui-show">
        <iframe src="/console/index/welcome" id="welcome" style="width: 100%; height: 100%; position: absolute;" frameborder="0"></iframe>
        </div>
    </div>

    <div class="layui-footer link-footer">
        <!-- 底部固定区域 -->
        © zuanqun.cn - 钻群后台
    </div>
</div>
<script src="__COM__/jquery.js"></script>
<script src="__COM__/layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

        $(document).on('click','.console',function(){
            var text = $(this).text();
            var view =  $(this).attr('c-view');
            var html = '<li class="layui-this">'+text+'<i class="layui-icon layui-unselect layui-tab-close close">ဆ</i></li>';
            var content = '<div class="layui-tab-item layui-show"><iframe src="'+view+'"  id="welcome" style="width: 100%; height: 100%; position: absolute;" frameborder="0"></iframe></div>';
            $.each($('.zqTab ul li'),function(i,item){
                $(this).removeClass('layui-this');
            });
            $('.layui-tab-title').append(html);
            $('.layui-tab-item').removeClass('layui-show');
            $('.layui-body').append(content);
        });
        $(document).on('click','.close',function(){
            $(this).parent().remove();
            $('.layui-show').remove();
            $.each($('.zqTab ul li'),function(i,item){
                $('.zqTab ul li').last().addClass('layui-this');
            });
            $.each($('.layui-tab-item'),function(i,item){
                $('.layui-tab-item').last().addClass('layui-show');
            });
        })
    });
</script>
</body>
</html>
