<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"/Users/liujun/workspace/php/zuanqun/web/../app/open/view/default/source/index.html";i:1518090962;s:76:"/Users/liujun/workspace/php/zuanqun/app/open/view/default/common/header.html";i:1517484840;s:76:"/Users/liujun/workspace/php/zuanqun/app/open/view/default/common/footer.html";i:1518102634;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>钻群-资源中心</title>
    <link rel="stylesheet" href="__OPEN_CSS__/common.css">
    <link rel="stylesheet" href="__OPEN_CSS__/header.css">
    <link rel="stylesheet" href="__OPEN_CSS__/footer.css">
    <link rel="stylesheet" href="__OPEN_CSS__/source.css">
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
        <div class="col-side">
            <div class="side-menu">
                <dl>
                    <dt>API调用说明</dt>
                </dl>
            </div>
        </div>
        <div class="col-main">
            <iframe class="res_iframe" src="/wiki/apiInfo" id="iframe" height="1790" onload="setIframeHeight(this)"></iframe>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
    <div class="footer-inner">
        <p class="copyright">© 2017 - 2018 Zuanqun All Right Reserved.</p>
        <ul class="links">

            <li class="links_item"><a href="/" target="_blank">开发者协议</a></li>
        </ul>
    </div>
</div>
</div>
<script src="__COM__/util.js"></script>
<!--<script>-->

    <!--$(function(){-->
        <!--window.onload = function () {-->
            <!--setIframeHeight(document.getElementById('iframe'));-->
        <!--};-->
    <!--})-->
<!--</script>-->

</body>
</html>