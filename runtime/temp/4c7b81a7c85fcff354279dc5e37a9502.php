<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"/Users/liujun/workspace/php/zuanqun/web/../app/wechat/view/default/index/index.html";i:1516794208;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>钻群微信公众号系统 - zuanqun.cn</title>
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
    <link rel="stylesheet" href="__WECHAT_CSS__/index.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">钻群微信公众号系统</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item layui-this"><a href="">控制台</a></li>
            <li class="layui-nav-item"><a href="javascript:;" class="wxapp">小程序管理</a></li>
            <li class="layui-nav-item"><a href="javascript:;" class="active">活动管理</a></li>
            <li class="layui-nav-item"><a href="javascript:;" class="website">站点管理</a></li>
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
            <li class="layui-nav-item"><a href="">退了</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black manager">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">管理中心</a>
                    <dl class="layui-nav-child">
                        <dd class="layui-this"><a href="/wechat/main"><i class="layui-icon">&#xe68e;</i>&nbsp;主页</a></dd>
                        <dd><a href="javascript:;" class="console" c-view="/wechat/wx_app"><i class="layui-icon">&#xe620;</i>&nbsp;公众号基本设置</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe620;</i>&nbsp;模板设置</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe620;</i>&nbsp;海报设置</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe620;</i>&nbsp;域名设置</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">账号授权</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;微信账号授权</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;淘宝账号授权</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">公众号管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;菜单管理</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;自动回复</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;素材管理</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;消息推送</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">代理管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;代理列表</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;代理申请</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;订单列表</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">用户管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;微信会员</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

    <div class="layui-side layui-bg-black wxapp-tree" style="display: none;">
        <div class="layui-side-scroll">

            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item  layui-nav-itemed">
                    <a href="javascript:;">小程序管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" class="console" c-view="/wechat/wx_app"><i class="layui-icon">&#xe620;</i>&nbsp;小程序生成</a></dd>
                        <dd><a href="javascript:;" class="console" c-view="/wechat/wx_app"><i class="layui-icon">&#xe613;</i>&nbsp;公告列表</a></dd>
                    </dl>
                </li>
            </ul>

        </div>
    </div>


    <div class="layui-side layui-bg-black active-tree" style="display: none;">
        <div class="layui-side-scroll">

            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item  layui-nav-itemed">
                    <a href="javascript:;">邀请裂变</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;公众号邀请设置</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;海报推广</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;提示语设置</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">积分商城</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;签到设置</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;奖品管理</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;兑换管理</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">积分抽奖</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;抽奖设置</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;奖品管理</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;抽奖列表</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">红包管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;红包列表</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;红包明细</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">刮刮乐</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;刮刮乐设置</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;奖品管理</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;刮刮乐列表</a></dd>
                    </dl>
                </li>
            </ul>

        </div>
    </div>

    <div class="layui-side layui-bg-black website-tree" style="display: none;">
        <div class="layui-side-scroll">

            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item  layui-nav-itemed">
                    <a href="javascript:;">公告管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;新建公告</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;公告列表</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">帮助管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;新建帮助</a></dd>
                        <dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;帮助列表</a></dd>
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
            <iframe src="/wechat/index/index" id="welcome" style="width: 100%; height: 100%; position: absolute;" frameborder="0"></iframe>
        </div>
    </div>

    <div class="layui-footer link-footer">
        <!-- 底部固定区域 -->
        © zuanqun.cn - 钻群微信淘宝客管理
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
            var content = '<div class="layui-tab-item layui-show"><iframe src="'+view+'" id="welcome" style="width: 100%; height: 100%; position: absolute;" frameborder="0"></iframe></div>';
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


    $(document).on('click','.active',function(){
//        var html = '<ul class="layui-nav layui-nav-tree"  lay-filter="test">'+
//                '<li class="layui-nav-item layui-nav-itemed">'+
//                '<a class="" href="javascript:;">活动管理</a>'+
//                '<dl class="layui-nav-child">'+
//                '<dd class="layui-this"><a href="/console"><i class="layui-icon">&#xe68e;</i>&nbsp;主页</a></dd>'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe620;</i>&nbsp;公众号基本设置</a></dd>'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe620;</i>&nbsp;小程序设置</a></dd>'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe620;</i>&nbsp;模板设置</a></dd>'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe620;</i>&nbsp;海报设置</a></dd>'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe620;</i>&nbsp;域名设置</a></dd>'+
//                '</dl>'+
//                '</li>'+
//                '<li class="layui-nav-item">'+
//                '<a href="javascript:;">积分商城</a>'+
//                '<dl class="layui-nav-child">'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;签到设置</a></dd>'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;奖品管理</a></dd>'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;兑换管理</a></dd>'+
//                '</dl>'+
//                '</li>'+
//                '<li class="layui-nav-item">'+
//                '<a href="javascript:;">邀请裂变</a>'+
//                '<dl class="layui-nav-child">'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;公众号邀请设置</a></dd>'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;海报推广</a></dd>'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;提示语设置</a></dd>'+
//                '</dl>'+
//                '</li>'+
//                '<li class="layui-nav-item">'+
//                '<a href="javascript:;">积分抽奖</a>'+
//                '<dl class="layui-nav-child">'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;抽奖设置</a></dd>'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;奖品管理</a></dd>'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;抽奖列表</a></dd>'+
//                '</dl>'+
//                '</li>'+
//                '<li class="layui-nav-item">'+
//                '<a href="javascript:;">红包管理</a>'+
//                '<dl class="layui-nav-child">'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;红包列表</a></dd>'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;红包明细</a></dd>'+
//                '</dl>'+
//                '</li>'+
//                '<li class="layui-nav-item">'+
//                '<a href="javascript:;">刮刮乐</a>'+
//                '<dl class="layui-nav-child">'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;刮刮乐设置</a></dd>'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;奖品管理</a></dd>'+
//                '<dd><a href="javascript:;" class="console"><i class="layui-icon">&#xe613;</i>&nbsp;刮刮乐列表</a></dd>'+
//                '</dl>'+
//                '</li>'+
//                '</ul>';
        $('.manager').css('display','none');
        $('.website-tree').css('display','none');
        $('.wxapp-tree').css('display','none');
        $('.active-tree').css('display','block');
    });

    $(document).on('click','.website',function(){
        $('.manager').css('display','none');
        $('.active-tree').css('display','none');
        $('.wxapp-tree').css('display','none');
        $('.website-tree').css('display','block');
    });

    $(document).on('click','.wxapp',function(){
        $('.manager').css('display','none');
        $('.active-tree').css('display','none');
        $('.website-tree').css('display','none');
        $('.wxapp-tree').css('display','block');
    });
</script>
</body>
</html>
