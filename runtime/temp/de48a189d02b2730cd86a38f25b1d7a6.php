<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"C:\Object\zuanqun\web/../app/upgrade\view\zq_cms_1\index\zq_cms_1.html";i:1517531928;s:62:"C:\Object\zuanqun\app\upgrade\view\zq_cms_1\common\header.html";i:1517531928;s:62:"C:\Object\zuanqun\app\upgrade\view\zq_cms_1\common\footer.html";i:1517531928;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>zq_cms_1</title>
    <link rel="stylesheet" href="__UPGRADE__/zq_cms_1/css/common.css">
    <link rel="stylesheet" href="__UPGRADE__/zq_cms_1/css/header.css">
    <link rel="stylesheet" href="__UPGRADE__/zq_cms_1/css/index.css">
    <link rel="stylesheet" href="__UPGRADE__/zq_cms_1/css/goods.css">
    <link rel="stylesheet" href="__UPGRADE__/zq_cms_1/css/footer.css">
    <link rel="stylesheet" href="__COM__/web_page.css">
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
</head>
<body>

<div class="body">
    <!-- header -->
    <div class="header">
    <div class="header-bar">
        <div class="header-notice">
            <p class="coll-desc">按<strong>Ctrl&nbsp;+&nbsp;D</strong>,把省钱快报放入收藏夹，优惠券信息一手掌握！</p>
        </div>
    </div>
    <div class="header-top">
        <div class="header-notice">
            <a class="header-logo">
                <img src="http://s1.51sqkb.com/dist/img/logo-ef4e6a15ac.png" alt="省钱快报">
            </a>
            <div class="header-search">
                <div class="search-input-box">
                    <i></i>
                    <input type="text" placeholder="请输入关键词" class="search-type">
                </div>
            </div>
            <a class="header-search-btn"></a>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-inner">
            <div class="header-notice">
                <div class="header-nav-left">
                    <a class="nav-item nav-index active">精选推荐</a>
                    <a class="nav-item">9块9包邮</a>
                </div>
            </div>
        </div>
    </div>

</div>

    <!-- banner -->

    <div class="banner header-notice">
        <div class="banner-cate">
            <div class="cate-line">
                <i></i>
                <a class="cate-item">女装</a>
                <span>/</span>
                <a class="cate-item">女装</a>
                <span>/</span>
                <a class="cate-item">女装</a>
            </div>
            <div class="cate-line">
                <i></i>
                <a class="cate-item">女装</a>
                <span>/</span>
                <a class="cate-item">女装</a>
                <span>/</span>
                <a class="cate-item">女装</a>
            </div>
            <div class="cate-line">
                <i></i>
                <a class="cate-item">女装</a>
                <span>/</span>
                <a class="cate-item">女装</a>
                <span>/</span>
                <a class="cate-item">女装</a>
            </div>
            <div class="cate-line">
                <i></i>
                <a class="cate-item">女装</a>
                <span>/</span>
                <a class="cate-item">女装</a>
                <span>/</span>
                <a class="cate-item">女装</a>
            </div>
            <div class="cate-line">
                <i></i>
                <a class="cate-item">女装</a>
                <span>/</span>
                <a class="cate-item">女装</a>
                <span>/</span>
                <a class="cate-item">女装</a>
            </div>
        </div>
        <div class="banner-box">
            <div class="layui-carousel" id="zq-banner">
                <div carousel-item>
                    <div class="banner-bg1"></div>
                    <div class="banner-bg2"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- center -->
    <div class="center header-notice">
        <div class="center-list">
            <div class="center-list-inner">
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="goods-item">
                    <div class="goods-img">
                        <a href="/" target="_blank">
                            <div class="is_new"></div>
                            <div class="goods-lq">
                                <div class="goods-lq-price">
                                    <p class="lq-price-d1">领券立减</p><p class="lq-price-d2">¥<span>80</span></p>
                                </div>
                            </div>
                            <img alt="" class="lazy" src="<?php echo $vo['pict_url']; ?>_400x400">
                        </a>
                    </div>
                    <p class="goods-title">
                        <i class="tmall-icon"></i>
                        <span class="post-free">包邮</span>
                        <?php echo $vo['title']; ?>
                    </p>
                    <div class="goods-price">
                        现价：119
                        <p class="goods-sold">销量 <?php echo $vo['volume']; ?></p>
                    </div>
                    <div class="goods-info">
                        <div class="goods-q-price">
                            <span class="price-info">券后价：¥<em class="number-font">39</em><em class="decimal"></em></span>
                        </div>
                        <a href="/" class="buy-btn" target="_blank">立即抢购</a>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>

    <div class="page">
        <?php echo $list->render(); ?>
    </div>

    <!-- footer -->
    <div class="footer">
    <div class="footer-top">
        <div class="header-notice">
            <div class="footer-left">
                <p class="footer-about">
                    <a target="_blank" rel="nofollow" href="/stat/about/">关于我们</a>
                    <a target="_blank" rel="nofollow" href="https://www.lagou.com/gongsi/j34573.html" style="padding-left: 20px;">加入我们</a>
                </p>
            </div>
            <div class="footer-right">
                <div class="footer-qr-code">
                    <img src="http://s1.51sqkb.com/dist/img/qr-code-1d763f3f06.png" alt="省钱快报APP">
                </div>
                <div class="footer-txt">
                    <div class="logo"><img src="http://s1.51sqkb.com/dist/img/footer-logo-72b0d16481.png" alt="省钱快报APP"></div>
                    <p class="s1">聪明的人，都会省钱</p>
                    <p class="s2">购物省钱神器</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="header-notice">
            <p>地址：北京市东城区箭厂胡同 · 联系电话：010-57479723 · 京ICP备14040010号-12 · 省钱快报 - 北京九州云动科技有限公司旗下品牌</p>
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
            ,width: '880' //设置容器宽度
            ,arrow: 'always' //始终显示箭头
            ,height: '370'
            //,anim: 'updown' //切换动画方式
        });
    });
</script>
</body>
</html>