<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"C:\Object\zuanqun\web/../app/open\view\default\manager\index.html";i:1517978808;s:58:"C:\Object\zuanqun\app\open\view\default\common\header.html";i:1517531928;s:58:"C:\Object\zuanqun\app\open\view\default\common\footer.html";i:1517531928;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>钻群-管理中心</title>
    <link rel="stylesheet" href="__OPEN_CSS__/common.css">
    <link rel="stylesheet" href="__OPEN_CSS__/header.css">
    <link rel="stylesheet" href="__OPEN_CSS__/footer.css">
    <link rel="stylesheet" href="__OPEN_CSS__/manager.css">
    <link rel="stylesheet" href="/static/common/layui/css/layui.css">
    <link rel="stylesheet" href="__COM__/form.css">
</head>
<body>

<div class="body">

    <!-- header -->
    <div class="header">
    <div class="global-bar">
        <div class="header-inner">
            &nbsp;
            <div class="account">
                <a href="javascript:void(0);" class="account_meta" id="loginBarBt">登录</a>
                <a href="<?php echo url('auth/register/index'); ?>" target="_blank" class="account_meta">注册</a>
                <a href="javascript:void(0);" class="account_meta code_pop">
                    <img src="" class="icon_devcode">
                    <div id="biz_qrcode_div" style="display:none;" class="code_pop">
                        <div class="bubble_tips_inner">
                            <p><img src="" class="pic_devcode"></p>
                            <p class="txt_enhanced">请扫码关注<br>接收重要通知</p>
                        </div>
                        <i class="bubble_tips_arrow out"></i>
                        <i class="bubble_tips_arrow in"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="header-box">
        <div class="header-inner">
            <div class="header-logo">
                <a href="/" title="开放平台">钻群 | 开放平台</a>
            </div>
            <div class="header-nav">
                <div class="header-nav-item"><a href="/">首页</a></div>
                <div class="header-nav-item"><a href="<?php echo url('open/tool/touland'); ?>">淘客工具</a></div>
                <div class="header-nav-item"><a href="<?php echo url('open/source/index'); ?>">技术文档</a></div>
                <div class="header-nav-item"><a href="<?php echo url('open/manager/index'); ?>">管理中心</a></div>
            </div>
        </div>
    </div>
</div>

<script src="__COM__/jquery.js"></script>
<script src="__COM__/layer/layer.js"></script>
<script>
    $(document).on('click','#loginBarBt',function () {
        layer.open({
            type: 2,
            title: '登入',
//            maxmin: true,
            shadeClose: true, //点击遮罩关闭层
            area : ['580px' , '420px'],
            content: "<?php echo url('open/auth/loginTpl'); ?>"
        });
    });
</script>

    <!-- center -->
    <div class="center">
        <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
            <ul class="layui-tab-title">
                <a href="<?php echo url('open/Manager/index'); ?>"><li class="layui-this">应用管理</li></a>
                <a href="<?php echo url('open/open/owner'); ?>"><li>开发者管理</li></a>
            </ul>
            <div class="layui-tab-content">
                <div class="LAY-app-message-btns" style="margin-bottom: 10px;">
                    <a class="layui-btn layui-btn-primary layui-btn-sm">删除</a>
                    <a class="layui-btn layui-btn-primary layui-btn-sm" id="create_web">创建应用</a>
                </div>
                <table id="app" lay-filter="app"></table>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
    <div class="footer-inner">
        <p class="copyright">© 1998 - 2018 Tencent All Right Reserved.</p>
        <ul class="links">

            <li class="links_item"><a href="/cgi-bin/frame?t=news/protocol_developer_tmpl" target="_blank">开发者协议</a></li>
            <li class="links_item"><a href="https://mp.weixin.qq.com/cgi-bin/announce?action=getannouncement&amp;announce_id=1512986091&amp;version=1&amp;lang=zh_CN&amp;platform=2" target="_blank">运营规范</a></li>
            <li class="links_item"><a href="http://www.tencent.com/zh-cn/index.shtml" target="_blank">联系腾讯</a></li>
            <li class="links_item last_child"><a href="mailto:weixin-open@qq.com" target="_self">投诉建议</a></li>
        </ul>
    </div>
</div>
</div>

<script src="/static/common/jquery.js"></script>
<script src="__COM__/layer/layer.js"></script>
<script src="/static/common/layui/layui.js"></script>
<script type="text/html" id="app_bar">
    <div class="layui-btn-group">
        <a class="layui-btn layui-btn-xs" lay-event="detail">查看权限</a>
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
            ,url: '/create/application/' //数据接口
            ,page: true //开启分页
            ,cols: [[
                {checkbox: true}
                ,{field: 'id', title: 'ID', width:75, sort: true, align:'center'}
                ,{field: 'web_name', title: '网站名称', width:200, align:'center'}
                ,{field: 'web_domain', title: '网站域名', width:230, align:'center'}
                ,{field: 'app_id', title: 'AppId', width:120, align:'center'}
                ,{field: 'beian', title: '备案信息', width:250, align:'center'}
                ,{field: 'status', title: '提交状态', width: 120 ,align:'center'}
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