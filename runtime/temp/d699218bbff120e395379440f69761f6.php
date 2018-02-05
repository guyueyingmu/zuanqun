<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"/Users/liujun/workspace/php/zuanqun/web/../app/open/view/default/manager/index.html";i:1517843582;s:76:"/Users/liujun/workspace/php/zuanqun/app/open/view/default/common/header.html";i:1517484840;s:76:"/Users/liujun/workspace/php/zuanqun/app/open/view/default/common/footer.html";i:1517484840;}*/ ?>
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
                <div class="layui-form layui-border-box layui-table-view">
                    <div class="layui-table-box">
                        <div class="layui-table-header link-table-header">
                        </div>
                        <div class="layui-table-body layui-table-main">
                            <table id="app"></table>
                        </div>
                        <style>
                            .laytable-cell-3-0{ width: 48px; }
                            .laytable-cell-3-title{ width: 830px; }
                            .laytable-cell-3-time{ width: 170px; }
                        </style>
                    </div>
                </div>
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

<script>
    layui.use(['table','element'], function(){
        var table = layui.table;
        var element = layui.element;

        //第一个实例
        table.render({
            elem: '#app'
            ,height: 488
            ,url: '/create/application/' //数据接口
            ,page: true //开启分页
            ,cols: [[ //表头
                {field: 'id', title: 'ID', width:80, sort: true, fixed: 'left'}
                ,{field: 'web_name', title: '网站名称', width:280}
                ,{field: 'web_domain', title: '网站域名', width:280, sort: true}
                ,{field: 'beian', title: '备案信息', width:380}
                ,{field: 'status', title: '提交状态', width: 173}
            ]]
            ,skin: 'nob' //行边框风格
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