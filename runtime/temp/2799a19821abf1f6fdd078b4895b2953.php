<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"/Users/liujun/workspace/php/zuanqun/web/../app/open/view/default/index/index.html";i:1517225971;s:76:"/Users/liujun/workspace/php/zuanqun/app/open/view/default/common/header.html";i:1517225971;s:76:"/Users/liujun/workspace/php/zuanqun/app/open/view/default/common/footer.html";i:1516708550;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>开放平台首页-钻群联盟开放平台</title>
    <link rel="stylesheet" href="__OPEN_CSS__/index.css">
    <link rel="stylesheet" href="__OPEN_CSS__/header.css">
    <link rel="stylesheet" href="__OPEN_CSS__/footer.css">
    <link rel="stylesheet" href="__OPEN_CSS__/common.css">
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
        <div class="center-banner">
            <div class="banner-slider-container">
                <div class="banner-slider-list">
                    <ol id="slider-container" style="position: relative;">
                        <li class="slider-item"></li>
                    </ol>
                </div>
            </div>
            <div class="notice-box">
                <div class="notice-inner">
                    <div class="notice-inner-box">
                        <ul>
                            <li><a href="/">iOS开发工具包异常及修复建议 </a></li>
                        </ul>
                    </div>
                </div>
                <div class="bg"></div>
            </div>
        </div>

        <div class="container">
            <div class="container-inner">
                <div class="inner-box">
                    <ul class="inner">
                        <li class="sizeof4">
                            <div class="inner-size-box">
                                <dl>
                                    <dt>移动应用开发</dt>
                                    <dd class="content">接入微信开放平台，让你的移动应用支持微信分享、微信收藏和微信支付。</dd>
                                    <dd class="icon_site_desc app_dev"></dd>
                                </dl>
                            </div>
                        </li>
                        <li class="sizeof4">
                            <div class="inner-size-box">
                                <dl>
                                    <dt>网站应用开发</dt>
                                    <dd class="content">接入微信开放平台，让你的移动应用支持微信分享、微信收藏和微信支付。</dd>
                                    <dd class="icon_site_desc web-dev"></dd>
                                </dl>
                            </div>
                        </li>
                        <li class="sizeof4">
                            <div class="inner-size-box">
                                <dl>
                                    <dt>微信应用开发</dt>
                                    <dd class="content">接入微信开放平台，让你的移动应用支持微信分享、微信收藏和微信支付。</dd>
                                    <dd class="icon_site_desc wx-account"></dd>
                                </dl>
                            </div>
                        </li>
                        <li class="sizeof4">
                            <div class="inner-size-box">
                                <dl>
                                    <dt>插件应用开发</dt>
                                    <dd class="content">接入微信开放平台，让你的移动应用支持微信分享、微信收藏和微信支付。</dd>
                                    <dd class="icon_site_desc wx-plugin"></dd>
                                </dl>
                            </div>
                        </li>
                    </ul>
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

</body>
</html>