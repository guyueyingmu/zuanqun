<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"/Users/liujun/workspace/php/zuanqun/web/../app/index/view/default/index/index.html";i:1517484840;s:77:"/Users/liujun/workspace/php/zuanqun/app/index/view/default/common/header.html";i:1517484840;s:77:"/Users/liujun/workspace/php/zuanqun/app/index/view/default/common/footer.html";i:1517484840;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页-钻群联盟</title>
    <link rel="stylesheet" href="__CSS__/common.css">
    <link rel="stylesheet" href="__CSS__/header.css">
    <link rel="stylesheet" href="__CSS__/index.css">
    <link rel="stylesheet" href="__CSS__/footer.css">
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
</head>
<body>

<div class="body">
    <!-- header -->
    <div class="header">
    <div class="header-inner">
        <div class="header-container">
            <div class="nav-logo">
                <img src="__IMG__/logo.png" alt="钻群，一个专业的内容导购联盟" width="212" height="42">
            </div>
            <div class="nav-menu">
                <div class="nav-menu-box">
                    <div class="nav-menu-inner">
                        <ul class="menu">
                            <li class="menu-item"><a href="/">首页</a></li>
                            <li class="menu-item"><a href="<?php echo url('hot/index/index'); ?>" target="_blank">选品库</a></li>
                            <li class="menu-item drop-menu">
                                <a href="javascript:;">导购产品</a>
                            </li>
                            <li class="menu-item"><a href="<?php echo url('open/index/index'); ?>" target="_blank">开放平台</a></li>
                            <li class="menu-item">
                                <a href="<?php echo url('seller/index/index'); ?>" target="_blank">钻群号</a>
                            </li>
                            <li class="menu-item"><a href="<?php echo url('index/help/index'); ?>">帮助中心</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="nav-account">
                <a href="<?php echo url('auth/login/index'); ?>" target="_blank" class="nav-auth">登入</a>
                <a href="<?php echo url('auth/register/index'); ?>" target="_blank" class="nav-auth">注册</a>
            </div>
        </div>
    </div>
</div>
<div class="menu-drop" style="display: none;">
    <div class="drop-list">
        <div class="list-item">
            <dt>网站cms解决方案</dt>
            <dd class="list-item-img"></dd>
            <dd class="list-item-desc">钻群CMS淘客系统</dd>
        </div>
        <div class="list-item">
            <dt>微信公众号解决方案</dt>
            <dd class="list-item-img"></dd>
            <dd class="list-item-desc">公众号淘客系统</dd>
        </div>
        <div class="list-item">
            <dt>小程序解决方案</dt>
            <dd class="list-item-img"></dd>
            <dd class="list-item-desc">小程序淘客系统</dd>
        </div>
        <div class="list-item">
            <dt>浏览器解决方案</dt>
            <dd class="list-item-img"></dd>
            <dd class="list-item-desc">好助手淘客系统</dd>
        </div>
        <div class="list-item">
            <dt>APP解决方案</dt>
            <dd class="list-item-img"></dd>
            <dd class="list-item-desc">钻群app淘客系统</dd>
        </div>
    </div>
</div>

<script src="__COM__/jquery.js"></script>

<script>
    $(document).on('mouseenter','.drop-menu',function () {
        $('.menu-drop').css('display','block');
    });
    $(document).on('mouseleave','.drop-menu',function () {
        $('.menu-drop').hover(function () {
            $('.menu-drop').css('display','block');
        },
        function () {
            $('.menu-drop').css('display','none');
        });
        $('.menu-drop').css('display','none');
    });
</script>

    <!-- banner -->
    <div class="banner">
        <div class="layui-carousel" id="zq-banner">
            <div carousel-item>
                <div class="banner-bg"></div>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="zq-info">
        <div class="zq-info-container">
            <h4>钻群联盟，专注于导购内容生态</h4>
            <div class="function-info">
                <div class="function-item item-1">
                    <h3>云选品库</h3>
                    <p>精选高佣，灵活检测</p>
                </div>
                <div class="function-item item-2">
                    <h3>二合一转链</h3>
                    <p>灵活转链方式，易于推广</p>
                </div>
                <div class="function-item item-3">
                    <h3>联盟CMS</h3>
                    <p>灵活部署，一键启用</p>
                </div>
                <div class="function-item item-4">
                    <h3>钻石CMS</h3>
                    <p>打造属于自己的用户数据</p>
                </div>
                <div class="function-item item-5">
                    <h3>QQ群发</h3>
                    <p>自动群发，无人看管</p>
                </div>
                <div class="function-item item-6">
                    <h3>微信群发</h3>
                    <p>自动群发，无人看管</p>
                </div>
                <div class="function-item item-7">
                    <h3>淘口令</h3>
                    <p>移动推广，部署简单</p>
                </div>
                <div class="function-item item-8">
                    <h3>自定义文案</h3>
                    <p>打造个性文案推广</p>
                </div>
                <div class="function-item item-9">
                    <h3>自主选品</h3>
                    <p>丰富内容库，自主选取</p>
                </div>
                <div class="function-item item-10">
                    <h3>微信公众号</h3>
                    <p>公众号托管</p>
                </div>
                <div class="function-item item-11">
                    <h3>小程序淘客</h3>
                    <p>一键生成，专注推广</p>
                </div>
                <div class="function-item item-12">
                    <h3>APP移动程序</h3>
                    <p>专属个人品牌</p>
                </div>
                <div class="function-item item-13">
                    <h3>自动高佣</h3>
                    <p>精选高佣，灵活检测</p>
                </div>
                <div class="function-item item-14">
                    <h3>API接口</h3>
                    <p>解放大脑，创意无限</p>
                </div>
            </div>
        </div>
    </div>

    <!-- introduce -->
    <div class="introduce">
        <title>钻群联盟-产品介绍</title>
        <div class="introduce-inner">
            <div class="co_box">
                <h2 class="cb_title">合作互赢</h2>
                <p class="cb_lo">我们热忱欢迎各大媒体、网站进行各类方式的合作</p>
                <div class="cb_inner">
                    <div class="cb_child first">
                        <div class="ch_logo">
                            <img src="__IMG__/new_media.png" alt="">
                        </div>
                        <div class="ch_inner">
                            <div class="ci_title">钻群号</div>
                            <p class="ci_inner">与各媒体、网站在各类文字资讯、专题报道等传播方面建立长期合作</p>
                        </div>
                    </div>
                    <div class="cb_child">
                        <div class="ch_logo">
                            <img src="__IMG__/new_adev.png" alt="">
                        </div>
                        <div class="ch_inner">
                            <div class="ci_title">内容合作</div>
                            <p class="ci_inner">双方利用现有的广告资源进行免费互换，为彼此带来流量和品牌提升</p>
                        </div>
                    </div>
                    <div class="cb_child">
                        <div class="ch_logo">
                            <img src="__IMG__/new_friend.png" alt="">
                        </div>
                        <div class="ch_inner">
                            <div class="ci_title">开放平台</div>
                            <p class="ci_inner">双方利用网站页面文字链接资源进行免费互链，提升网站流量与权重</p>
                        </div>
                    </div>
                    <div class="cb_child last">
                        <div class="ch_logo">
                            <img src="__IMG__/new_part.png" alt="">
                        </div>
                        <div class="ch_inner">
                            <div class="ci_title">其他合作方式</div>
                            <p class="ci_inner">包括但不限于线上活动支持、线下活动合作、联合报道等等</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg"></div>
    </div>

    <!-- solution -->
    <div class="solution">
        <div class="solution-container">
            <div class="solution-product">
                <span><title>钻群联盟方案、为您提供一站式导购推广解决方案</title></span>
            </div>
        </div>
        <div class="solution-bg">
            <div class="solution-bg-container">
                <ul>
                    <li>
                        <div class="mask">
                            <div class="bg"></div>
                            <div class="content"></div>
                        </div>
                    </li>
                    <li>
                        <div class="mask">
                            <div class="bg"></div>
                            <div class="content"></div>
                        </div>
                    </li>
                    <li>
                        <div class="mask">
                            <div class="bg"></div>
                            <div class="content"></div>
                        </div>
                    </li>
                    <li>
                        <div class="mask">
                            <div class="bg"></div>
                            <div class="content"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- news -->
    <div class="news">
        <div class="news-box">
            <div class="news-cap">
                <div class="cap-title">
                    钻群联盟的
                    <span>最新动态</span>
                </div>
                <div class="cap-more">为您提供最新网站公告、补丁更新、技术支持等信息，友价房产网源码每篇内容均经过核实</div>
            </div>
            <div class="news-col">
                <dl class="news-col-menu">
                    <dt class="news-tip">最新动态</dt>
                    <dt class="more">更多</dt>
                    <dd><span>[2018-01-22]</span>这是一条动态的信息内容</dd>
                    <dd><span>[2018-01-22]</span>这是一条动态的信息内容</dd>
                    <dd><span>[2018-01-22]</span>这是一条动态的信息内容</dd>
                    <dd><span>[2018-01-22]</span>这是一条动态的信息内容</dd>
                </dl>
            </div>
            <div class="news-col">
                <dl class="news-col-menu">
                    <dt class="news-tip">最新动态</dt>
                    <dt class="more">更多</dt>
                    <dd><span>[2018-01-22]</span>这是一条动态的信息内容</dd>
                    <dd><span>[2018-01-22]</span>这是一条动态的信息内容</dd>
                    <dd><span>[2018-01-22]</span>这是一条动态的信息内容</dd>
                    <dd><span>[2018-01-22]</span>这是一条动态的信息内容</dd>
                </dl>
            </div>
            <div class="news-col">
                <dl class="news-col-menu">
                    <dt class="news-tip">最新动态</dt>
                    <dt class="more">更多</dt>
                    <dd><span>[2018-01-22]</span>这是一条动态的信息内容</dd>
                    <dd><span>[2018-01-22]</span>这是一条动态的信息内容</dd>
                    <dd><span>[2018-01-22]</span>这是一条动态的信息内容</dd>
                    <dd><span>[2018-01-22]</span>这是一条动态的信息内容</dd>
                </dl>
            </div>
        </div>
        <div class="bg"></div>
    </div>

    <!-- footer -->
    <div class="footer">
    <div class="footer-container">
        <div class="footer-top">
            <div class="footer-col-3">
                <div class="footer-col-link">
                    <div class="footer-col-item">
                        <dl>
                            <dt>淘客解决方案</dt>
                            <dd><a href="/">网站CMS应用</a></dd>
                            <dd><a href="/">微信公众号系统</a></dd>
                            <dd><a href="/">淘客小程序</a></dd>
                            <dd><a href="/">移动App</a></dd>
                            <dd><a href="/">高级网站CMS应用</a></dd>
                            <dd><a href="/">精品单页</a></dd>
                        </dl>
                    </div>
                    <div class="footer-col-item">
                        <dl>
                            <dt>钻群产品服务</dt>
                            <dd><a href="<?php echo url('open/index/index'); ?>" target="_blank">开放平台</a></dd>
                            <dd><a href="<?php echo url('mp/index/index'); ?>" target="_blank">钻群号</a></dd>
                            <dd><a href="<?php echo url('hot/index/index'); ?>" target="_blank">选品库</a></dd>
                            <dd><a href="/">应用市场</a></dd>
                            <dd><a href="/">开发平台</a></dd>
                            <dd><a href="/">网站联盟</a></dd>
                            <dd><a href="/">黑名单</a></dd>
                            <dd><a href="/">api接口</a></dd>
                            <dd><a href="/">自助转链工具</a></dd>
                            <dd><a href="/">群发机器人</a></dd>
                        </dl>
                    </div>
                    <div class="footer-col-item">
                        <dl>
                            <dt>帮助/教程中心</dt>
                            <dd><a href="/">网站cms设置</a></dd>
                            <dd><a href="/">淘客app生成</a></dd>
                            <dd><a href="/">小程序使用</a></dd>
                            <dd><a href="/">微信公众号教程</a></dd>
                            <dd><a href="/">常见问题</a></dd>
                            <dd><a href="/">入门指南</a></dd>
                            <dd><a href="/">客服中心</a></dd>
                            <dd><a href="/">api使用教程</a></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="footer-col-1">
                <a href="/" class="footer-logo">
                    <img alt="七牛云" src="https://www.qiniu.com/assets/logo-b5caafe0363dace7b5c0a00be38a4829444918c4322a6168714522ee19dcb1c1.png">
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="verify">
                <a target="_blank" rel="noopener" href="http://www.dca.org.cn/" class="verify-logo" title="可信云"></a>
                <a target="_blank" rel="noopener" href="#" class="iso-logo" title="iso"></a>
            </div>
            <div class="links">
                <ul>
                    <li><div class="copyright">© 2018 钻群联盟</div></li>
                    <li><a href="/user-agreement">用户协议</a></li>
                    <li><a href="/sla-kodo">SLA</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<script src="__COM__/jquery.js"></script>
<script src="__COM__/layui/layui.js"></script>
<script>
    layui.use('carousel', function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#zq-banner'
            ,width: '100%' //设置容器宽度
            ,arrow: 'always' //始终显示箭头
            ,height: '570'
            //,anim: 'updown' //切换动画方式
        });
    });
</script>
</body>
</html>