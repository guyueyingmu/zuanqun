<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"/Users/liujun/workspace/php/zuanqun/web/../app/open/view/default/tool/index.html";i:1518706296;s:76:"/Users/liujun/workspace/php/zuanqun/app/open/view/default/common/header.html";i:1517484840;s:78:"/Users/liujun/workspace/php/zuanqun/app/open/view/default/common/tool-bar.html";i:1517484840;s:76:"/Users/liujun/workspace/php/zuanqun/app/open/view/default/common/footer.html";i:1518102634;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>二合一转链-淘客工具-钻群联盟开放平台</title>
    <link rel="stylesheet" href="__COM__/util.css">
    <link rel="stylesheet" href="__OPEN_CSS__/common.css">
    <link rel="stylesheet" href="__OPEN_CSS__/header.css">
    <link rel="stylesheet" href="__OPEN_CSS__/footer.css">
    <link rel="stylesheet" href="__OPEN_CSS__/tool.css">
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
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

    <!-- 工具栏 -->
    <div class="tool-bar">
    <div class="tool-bar-warp">
        <a href="<?php echo url('open/tool/touland'); ?>" class="active">二合一转链</a>
        <a href="<?php echo url('open/tool/deCodeUland'); ?>">二合一解密</a>
        <a href="<?php echo url('open/tool/tbkTranLinks'); ?>">淘客链接转换</a>
        <a href="">淘口令生成</a>
        <a href="">淘口令解密</a>
        <a href="">短连接生成</a>
    </div>
</div>

    <!-- center -->
    <div class="center">
        <div class="layui-fluid tool-form">
            <div class="layui-card-header">二合一转链</div>
            <div class="layui-card-body">
                <form class="layui-form" action="" lay-filter="component-form-group">
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input id="active-link" type="text" name="active-link" placeholder="请输入优惠券链接" class="layui-input title">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input id="goods-link" type="text" name="goods-link" placeholder="请输入商品链接" class="layui-input title">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="text" name="username" placeholder="请输入淘宝pid" class="layui-input title">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">定向计划</label>
                        <div class="layui-input-block">
                            <input type="checkbox" checked="" name="open" lay-skin="switch" lay-text="ON|OFF"><div class="layui-unselect layui-form-switch layui-form-onswitch" lay-skin="_switch"><em>ON</em><i></i></div>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <div class="link-footer">
                                <a id="push" class="layui-btn" >立即生成</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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

<script src="__COM__/jquery.js"></script>
<script src="__COM__/layer/layer.js"></script>

<script>
    $(document).on('click','#push',function(){
        if($('#active-link').val() == ''){
            layer.msg('优惠券链接不能为空');
            return false;
        }
        if($('#goods-link').val() == ''){
            layer.msg('商品链接不能为空');
            return false;
        }
        var data = $('#doc').serialize();
        request("<?php echo url('open/tool/doc/type/api'); ?>",data,function(res){
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