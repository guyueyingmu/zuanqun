<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"C:\Object\zuanqun\web/../app/hot\view\default\index\index.html";i:1518081639;s:57:"C:\Object\zuanqun\app\hot\view\default\common\header.html";i:1517531928;s:44:"../app/index/view/default/common/footer.html";i:1517531928;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>选品库-钻群联盟</title>
    <link rel="stylesheet" href="__HOT_CSS__/base.css">
    <link rel="stylesheet" href="__HOT_CSS__/header.css">
    <link rel="stylesheet" href="__HOT_CSS__/index.css">
    <link rel="stylesheet" href="__HOT_CSS__/footer.css">
    <link rel="stylesheet" href="__CSS__/footer.css">
    <link rel="stylesheet" href="__COM__/page.css">
</head>
<body>
<!--header 中部开始-->
<!--header 顶部开始-->
<div class="header_top">
    <div class="ht_box">
        <div class="hd_left">
            <ul>
                <li><a href="<?php echo url('auth/login/index'); ?>" target="_blank">亲，请登录</a></li>
                <li><a href="<?php echo url('auth/register/index'); ?>" target="_blank">我要注册</a></li>
                <li><a href="<?php echo url('user/user/index'); ?>" target="_blank">我的联盟</a></li>
            </ul>
        </div>
        <div class="hd_right">
            <ul>
                <li><a href="http://www.zuanqun.com:8080" target="_blank">钻群联盟首页</a></li>
                <li><a href="<?php echo url('open/index/index'); ?>" target="_blank">开放平台</a></li></li>
                <li><a href="<?php echo url('seller/index/index'); ?>" target="_blank">钻群号</a></li>
                <li>导购产品</li>
            </ul>
        </div>
    </div>
</div>
<!--header 中部开始-->
<div class="header_middle">
    <div class="hm_box">
        <div class="hm_left">
            <img src="__HOT_IMG__/logo.png" alt="" width="158">
        </div>
        <div class="hm_right">
            <div class="search_box">
                <div class="s_l"><input type="text" placeholder="  请输入您要搜索的商品名称或链接"><span class="search">搜女装</span></div>
                <div class="s_r">搜全贴</div>
            </div>
        </div>
    </div>
</div>
<!--body 开始-->
<div class="body">
    <div class="center">
        <div class="nav">
            <div class="nav-wrap">
                <a href="/" class="active">选品直播</a>
                <a href="<?php echo url('open/tool/touland'); ?>" target="_blank" class="nav-none">淘客工具</a>
                <a href="http://open.zuanqun.com:8080" target="_blank" class="nav-none">开放平台</a>
            </div>
        </div>
        <div class="class_box">
            <div class="class_b">
                <div class="cb_o">
                    <span>所有分类</span><span class="spec">></span><span>共<?php echo $count; ?>件商品</span>
                </div>
                <div class="cb_t">
                    <div class="ct_left"><span>相关分类：</span></div>
                    <div class="ct_middle">
                        <ul>
                            <?php if(is_array($cat) || $cat instanceof \think\Collection || $cat instanceof \think\Paginator): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                            <li><?php echo $c['cat_name']; ?></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div class="ct_right">
                        <div class="mor">更多 <span>﹀</span></div>
                        <div class="none">收起 <span>︿</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bc"></div>
        <div class="bc_wrap">
            <div class="wrap_box">
                <div class="cw_left">
                    <a href="<?php echo url('hot/index/index'); ?>">
                        <span class="color">默认排序</span>
                    </a>
                    <a href="<?php echo url('hot/index/index',['sort' => 'zk_final_price']); ?>">
                        <span class="spec">价格
                            <!--<div class="box">-->
                            <!--<div>价格从高到低</div>-->
                            <!--<div>价格从低到高</div>-->
                            <!--</div>-->
                        </span>
                    </a>
                    <a href="<?php echo url('hot/index/index',['sort' => 'volume']); ?>">
                        <span>销量</span>
                    </a>
                    <a href="<?php echo url('hot/index/index',['sort' => 'volume']); ?>">
                        <span>月推广量</span>
                    </a>
                    <a href="<?php echo url('hot/index/index',['sort' => 'volume']); ?>">
                        <span>月支出佣金</span>
                    </a>
                </div>
                <div class="cw_right">
                    <span class="mi"></span>
                    <div class="mi_inner">
                        <span><</span>
                        <span><?php echo $list->currentPage(); ?></span>
                        <span>/<?php echo $list->lastPage(); ?></span>
                        <span>></span>
                    </div>
                </div>
            </div>
            <div class="wrap_inner">
                <div class="wi_lis">
                    <label>
                        <input type="checkbox"> 淘宝
                    </label>
                </div>
                <div class="wi_lis">
                    <label>
                        <input type="checkbox"> 金牌卖家
                    </label>
                </div>
                <div class="wi_lis">
                    <label>
                        <input type="checkbox"> 天猫
                    </label>
                </div>
                <div class="wi_lis">
                    <label>
                        <input type="checkbox"> 天猫旗舰店
                    </label>
                </div>
                <div class="wi_lis wi">
                    <span>月销量</span>
                    <input type="text" class="input">
                    <span>笔及以上</span>
                    <div class="wii wiit">
                        <span>月销量</span>
                        <input type="text" id="e_volume" name="volume" class="input">
                        <span>笔及以上</span>
                        <span class="dis" id="volume">确认</span>
                    </div>
                </div>

                <div class="wi_lis wi">
                    <span>佣金比率</span>
                    <input type="text" class="input">
                    <span>%</span>
                    <div class="wii wiit">
                        <span>佣金比率大于</span>
                        <input type="text" id="e_comm" name="comm" class="input">
                        <span>%</span>
                        <span class="dis" id="comm">确认</span>
                    </div>
                </div>
                <div class="wi_lis wi">
                    <span>价格</span>
                    <input type="text" class="input">
                    <span>元-</span>
                    <input type="text" class="input">
                    <span>元</span>
                    <div class="wii wiit">
                        <span>价格</span>
                        <input type="text" id="s_price" name="s_price" class="input">
                        <span>元-</span>
                        <input type="text" id="e_price" name="e_price" class="input">
                        <span>元</span>
                        <span class="dis" id="price">确认</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="list_inner">
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="list">
                <div class="img_logo">
                    <a href="<?php echo url('hot/item/index'); ?>" target="_blank">
                        <img src="<?php echo $vo['pict_url']; ?>_230x230.jpg" alt="">
                    </a>
                </div>
                <p class="p_title"><a href="<?php echo $vo['item_url']; ?>" target="_blank"><?php echo $vo['title']; ?></a></p>
                <div class="price">
                    <div class="p_left"><span>￥</span><span class="number"><?php echo $vo['zk_final_price']; ?></span><span class="numbers">.00</span></div>
                    <div class="p_right"><span class="spe">月销：</span><span><?php echo $vo['volume']; ?></span></div>
                </div>
                <div class="cout">
                    <div class="c_left"><span>比率：</span><span class="number">5.</span><span class="numbers">00</span><span>%</span></div>
                    <div class="c_right"><span class="spe">佣金：</span><span>￥</span><span class="number">7</span><span>.98</span></div>
                </div>
                <div class="store">
                    <div class="store_box">
                        <div class="store_left">
                            <div class="sl_box">
                                <p><span class="spe"><img src="__IMG__/store.png" alt=""></span><span><?php echo $vo['nick']; ?></span></p>
                                <div class="so_inner"></div>
                            </div>
                        </div>
                        <div class="store_right">
                            <span><img src="__IMG__/st.png" alt=""></span>
                        </div>
                    </div>
                </div>
                <div class="chance">
                    <a href="<?php echo url('hot/item/index'); ?>" target="_blank">
                        <span class="chan_left">立即推广</span>
                    </a>
                    <span class="chan_right">选取</span>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="page">
            <?php echo $list->render(); ?>
        </div>
    </div>
    <!-- footer-->

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
<script src="__COM__/util.js"></script>
<script src="__COM__/layer/layer.js"></script>
<script src="__HOT_JS__/index.js"></script>

<script>
    //销量
    $(document).on('click','#volume',function(){
        if($('#e_volume').val() == ''){
            layer.msg('请填写销量数量');
            return false;
        }
        var volume = $('#e_volume').val();
        redirect("<?php echo url('hot/index/index'); ?>?volume="+volume);
    });

    //价格
    $(document).on('click','#price',function(){
        if($('#s_price').val() == ''){
            layer.msg('请填写最低价格');
            return false;
        }
        if($('#e_price').val() == ''){
            layer.msg('请填写最高价格');
            return false;
        }
        var s_price = $('#s_price').val();
        var e_price = $('#e_price').val();
        redirect("<?php echo url('hot/index/index'); ?>?s_price="+s_price+"&e_price="+e_price);
    });
</script>

</body>
</html>