<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"C:\Object\zuanqun\web/../app/open\view\default\open\owner.html";i:1517815567;s:58:"C:\Object\zuanqun\app\open\view\default\common\header.html";i:1517531928;s:58:"C:\Object\zuanqun\app\open\view\default\common\footer.html";i:1518137167;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>开发者管理</title>
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
        <div class="layui-tab layui-tab-brief">
            <ul class="layui-tab-title">
                <a href="<?php echo url('open/Manager/index'); ?>"><li>应用管理</li></a>
                <a href="<?php echo url('open/open/owner'); ?>"><li class="layui-this">开发者管理</li></a>
            </ul>
            <div class="layui-tab-content">
                <div class="link-item">
                    <div class="layui-fluid">
                        <div class="layui-card-body">
                            <form class="layui-form" id="form">

                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <input type="text" id="open_name" value="<?php echo $info['name']; ?>" name="open_name" placeholder="请输入开发者姓名" class="layui-input title">
                                    </div>
                                </div>

                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <input type="text" id="open_chat" value="<?php echo $info['mobile']; ?>" name="open_chat" placeholder="请输入开发者联系方式" class="layui-input title">
                                    </div>
                                </div>

                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <div class="link-footer">
                                            <a class="layui-btn" id="push">立即提交</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
</body>

<script src="__COM__/jquery.js"></script>
<script src="__COM__/util.js"></script>
<script src="__COM__/layer/layer.js"></script>
<script src="/static/common/layui/layui.js"></script>

<script>
    layui.use(['element'], function(){
        var element = layui.element;

    });
    $(document).on('click','#push',function(){
        if($('#open_name').val() == ''){
            layer.msg('开发者姓名不能为空!');
            return false;
        }
        if($('#open_chat').val() == ''){
            layer.msg('开发者联系方式不能为空！');
            return false;
        }
        var data = $('#form').serialize();
        request("<?php echo url('open/Open/add'); ?>",data,function(res){
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
</html>