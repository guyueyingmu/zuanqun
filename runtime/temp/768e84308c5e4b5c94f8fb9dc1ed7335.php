<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:83:"/Users/liujun/workspace/php/zuanqun/web/../app/seller/view/default/index/index.html";i:1516708550;s:77:"/Users/liujun/workspace/php/zuanqun/app/seller/view/default/include/home.html";i:1516708550;s:77:"/Users/liujun/workspace/php/zuanqun/app/seller/view/default/include/data.html";i:1516708550;s:77:"/Users/liujun/workspace/php/zuanqun/app/seller/view/default/include/info.html";i:1516708550;s:77:"/Users/liujun/workspace/php/zuanqun/app/seller/view/default/include/more.html";i:1516708550;s:77:"/Users/liujun/workspace/php/zuanqun/app/seller/view/default/include/line.html";i:1516708550;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页-钻群招商中心</title>
    <link rel="stylesheet" href="__SELLER_CSS__/common.css">
    <link rel="stylesheet" href="__SELLER_CSS__/auth.css">
    <link rel="stylesheet" href="__SELLER_CSS__/index.css">
    <link rel="stylesheet" href="__COM__/swiper-4.1.0.min.css">
</head>
<body>

<div class="body">
    <div class="zq-union-container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><div class="page page1">
    <div class="content content-home">
        <div class="login-wrap">
            <span class="login-title">登入</span>
            <div class="auth-login auth-warp">
                <div class="auth-form">
                    <fieldset class="auth-fieldset">
                        <div class="auth-input">
                <span class="auth-input-box first">
                    <label class="auth-lable">登入</label>
                    <input type="text" placeholder="请填写登录邮箱" class="auth-input-text" name="account">
                </span>
                <span class="auth-input-box last">
                    <label class="auth-lable">密码</label>
                    <input type="password" placeholder="请填写登录邮箱" class="auth-input-text" name="account">
                </span>
                        </div>

                        <div class="auth-function">
                            <a href="javascript:void(0);" id="forget" class="auth-forget">忘记密码</a>
                        </div>

                        <div class="auth-tool">
                            <a href="javascript:void(0);" class="auth-btn_login" id="login">登录</a>
                            <a href="<?php echo url('auth/register/index'); ?>" target="_blank" class="auth-btn_register" id="register">注册</a>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    <div class="bg"></div>
</div></div>
                <div class="swiper-slide"><div class="page page2">
    <div class="content">
        <div class="data-text">
            <h4>智能指数 星级进阶</h4>
            <div class="data-desc">
                网易号采用网易号指数和星级衡量帐号，与用户共同成长，为星级<br>
                用户提供收益、原创声明、跟贴置顶、全站PUSH等功能
            </div>
        </div>
    </div>
</div></div>
                <div class="swiper-slide"><div class="page page3">
    <div class="content content-info"></div>
</div></div>
                <div class="swiper-slide"><div class="page page2">
    <div class="content">
        <div class="data-text">
            <h4>智能指数 星级进阶</h4>
            <div class="data-desc">
                网易号采用网易号指数和星级衡量帐号，与用户共同成长，为星级<br>
                用户提供收益、原创声明、跟贴置顶、全站PUSH等功能
            </div>
        </div>
    </div>
</div></div>
                <div class="swiper-slide"><div class="page page5">
    <div class="content">
    </div>
    <div class="bg5"></div>
</div></div>
            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>


<script src="__COM__/jquery.js"></script>
<script src="__COM__/swiper-4.1.0.min.js"></script>

<script>
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'vertical',
        mousewheel: true,

        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination'
        }
    })
</script>

</body>
</html>