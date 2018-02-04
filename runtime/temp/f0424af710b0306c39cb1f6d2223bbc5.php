<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"/Users/liujun/workspace/php/zuanqun/web/../app/console/view/default/index/welcome.html";i:1517484840;s:75:"/Users/liujun/workspace/php/zuanqun/app/console/view/default/base/base.html";i:1517484840;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>公共继承标题</title>
    <link rel="stylesheet" href="__COM__/layui/css/layui.css">
    <link rel="stylesheet" href="__CONSOLE__/default/common/css/common.css">
    <link href="__COM__/editor.md/css/editormd.min.css" type="text/css" rel="stylesheet" />
    <script src="__COM__/jquery.js"></script>
    <script src="__COM__/layer/layer.js"></script>
    <script src="__COM__/layui/layui.js"></script>
    <script src="__COM__/util.js"></script>
    <script src="__COM__/editor.md/editormd.min.js"></script>
</head>
<body>

<link rel="stylesheet" href="__CONSOLE_CSS__/welcome.css">
<link rel="stylesheet" href="__CONSOLE__/default/common/css/common.css">

<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-header">密码重置</div>
            <div class="layui-card-body">
                <form class="layui-form" action="" lay-filter="component-form-group">
                    <div class="layui-form-item">
                        <label class="layui-form-label">单行输入框</label>
                        <div class="layui-input-block">
                            <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">验证必填项</label>
                        <div class="layui-input-block">
                            <input type="text" name="username" lay-verify="required" placeholder="请输入" autocomplete="off" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">验证手机</label>
                            <div class="layui-input-inline">
                                <input type="tel" name="phone" lay-verify="required|phone" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">验证邮箱</label>
                            <div class="layui-input-inline">
                                <input type="text" name="email" lay-verify="email" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">多规则验证</label>
                            <div class="layui-input-inline">
                                <input type="text" name="number" lay-verify="required|number" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">验证日期</label>
                            <div class="layui-input-inline">
                                <input type="text" name="date" id="LAY-component-form-group-date" lay-verify="date" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input" lay-key="1">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">验证链接</label>
                            <div class="layui-input-inline">
                                <input type="tel" name="url" lay-verify="url" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">验证身份证</label>
                        <div class="layui-input-block">
                            <input type="text" name="identity" lay-verify="identity" placeholder="" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">自定义验证</label>
                        <div class="layui-input-inline">
                            <input type="password" name="password" lay-verify="pass" placeholder="请输入密码" autocomplete="off" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">请填写6到12位密码</div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">范围</label>
                            <div class="layui-input-inline" style="width: 100px;">
                                <input type="text" name="price_min" placeholder="￥" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-form-mid">-</div>
                            <div class="layui-input-inline" style="width: 100px;">
                                <input type="text" name="price_max" placeholder="￥" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">单行选择框</label>
                        <div class="layui-input-block">
                            <select name="interest" lay-filter="aihao">
                                <option value=""></option>
                                <option value="0">写作</option>
                                <option value="1" selected="">阅读</option>
                                <option value="2">游戏</option>
                                <option value="3">音乐</option>
                                <option value="4">旅行</option>
                            </select><div class="layui-unselect layui-form-select"><div class="layui-select-title"><input type="text" placeholder="请选择" value="阅读" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit"><dd lay-value="" class="layui-select-tips">请选择</dd><dd lay-value="0" class="">写作</dd><dd lay-value="1" class="layui-this">阅读</dd><dd lay-value="2" class="">游戏</dd><dd lay-value="3" class="">音乐</dd><dd lay-value="4" class="">旅行</dd></dl></div>
                        </div>
                    </div>


                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">分组选择框</label>
                            <div class="layui-input-inline">
                                <select name="quiz">
                                    <option value="">请选择问题</option>
                                    <optgroup label="城市记忆">
                                        <option value="你工作的第一个城市">你工作的第一个城市</option>
                                    </optgroup>
                                    <optgroup label="学生时代">
                                        <option value="你的工号">你的工号</option>
                                        <option value="你最喜欢的老师">你最喜欢的老师</option>
                                    </optgroup>
                                </select><div class="layui-unselect layui-form-select"><div class="layui-select-title"><input type="text" placeholder="请选择问题" value="" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit layui-select-group"><dd lay-value="" class="layui-select-tips">请选择问题</dd><dt>城市记忆</dt><dd lay-value="你工作的第一个城市" class="">你工作的第一个城市</dd><dt>学生时代</dt><dd lay-value="你的工号" class="">你的工号</dd><dd lay-value="你最喜欢的老师" class="">你最喜欢的老师</dd></dl></div>
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">搜索选择框</label>
                            <div class="layui-input-inline">
                                <select name="modules" lay-verify="required" lay-search="">
                                    <option value="">直接选择或搜索选择</option>
                                    <option value="1">layer</option>
                                    <option value="2">form</option>
                                    <option value="3">layim</option>
                                    <option value="4">element</option>
                                    <option value="5">laytpl</option>
                                    <option value="6">upload</option>
                                    <option value="7">laydate</option>
                                    <option value="8">laypage</option>
                                    <option value="9">flow</option>
                                    <option value="10">util</option>
                                    <option value="11">code</option>
                                    <option value="12">tree</option>
                                    <option value="13">layedit</option>
                                    <option value="14">nav</option>
                                    <option value="15">tab</option>
                                    <option value="16">table</option>
                                    <option value="17">select</option>
                                    <option value="18">checkbox</option>
                                    <option value="19">switch</option>
                                    <option value="20">radio</option>
                                </select><div class="layui-form-select"><div class="layui-select-title"><input type="text" placeholder="直接选择或搜索选择" value="" class="layui-input"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit"><dd lay-value="" class="layui-select-tips">直接选择或搜索选择</dd><dd lay-value="1" class="">layer</dd><dd lay-value="2" class="">form</dd><dd lay-value="3" class="">layim</dd><dd lay-value="4" class="">element</dd><dd lay-value="5" class="">laytpl</dd><dd lay-value="6" class="">upload</dd><dd lay-value="7" class="">laydate</dd><dd lay-value="8" class="">laypage</dd><dd lay-value="9" class="">flow</dd><dd lay-value="10" class="">util</dd><dd lay-value="11" class="">code</dd><dd lay-value="12" class="">tree</dd><dd lay-value="13" class="">layedit</dd><dd lay-value="14" class="">nav</dd><dd lay-value="15" class="">tab</dd><dd lay-value="16" class="">table</dd><dd lay-value="17" class="">select</dd><dd lay-value="18" class="">checkbox</dd><dd lay-value="19" class="">switch</dd><dd lay-value="20" class="">radio</dd></dl></div>
                            </div>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">联动选择框</label>
                        <div class="layui-input-block">
                            <div class="layui-inline">
                                <select name="quiz1">
                                    <option value="">请选择省</option>
                                    <option value="浙江" selected="">浙江省</option>
                                    <option value="你的工号">江西省</option>
                                    <option value="你最喜欢的老师">福建省</option>
                                </select><div class="layui-unselect layui-form-select"><div class="layui-select-title"><input type="text" placeholder="请选择省" value="浙江省" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit"><dd lay-value="" class="layui-select-tips">请选择省</dd><dd lay-value="浙江" class="layui-this">浙江省</dd><dd lay-value="你的工号" class="">江西省</dd><dd lay-value="你最喜欢的老师" class="">福建省</dd></dl></div>
                            </div>
                            <div class="layui-inline">
                                <select name="quiz2">
                                    <option value="">请选择市</option>
                                    <option value="杭州">杭州</option>
                                    <option value="宁波" disabled="">宁波</option>
                                    <option value="温州">温州</option>
                                    <option value="温州">台州</option>
                                    <option value="温州">绍兴</option>
                                </select><div class="layui-unselect layui-form-select"><div class="layui-select-title"><input type="text" placeholder="请选择市" value="" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit"><dd lay-value="" class="layui-select-tips">请选择市</dd><dd lay-value="杭州" class="">杭州</dd><dd lay-value="宁波" class=" layui-disabled">宁波</dd><dd lay-value="温州" class="">温州</dd><dd lay-value="温州" class="">台州</dd><dd lay-value="温州" class="">绍兴</dd></dl></div>
                            </div>
                            <div class="layui-inline">
                                <select name="quiz3">
                                    <option value="">请选择县/区</option>
                                    <option value="西湖区">西湖区</option>
                                    <option value="余杭区">余杭区</option>
                                    <option value="拱墅区">临安市</option>
                                </select><div class="layui-unselect layui-form-select"><div class="layui-select-title"><input type="text" placeholder="请选择县/区" value="" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit"><dd lay-value="" class="layui-select-tips">请选择县/区</dd><dd lay-value="西湖区" class="">西湖区</dd><dd lay-value="余杭区" class="">余杭区</dd><dd lay-value="拱墅区" class="">临安市</dd></dl></div>
                            </div>
                            <div class="layui-inline">
                                <div class="layui-form-mid layui-word-aux">此处只是演示联动排版，并未做联动交互</div>
                            </div>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">复选框</label>
                        <div class="layui-input-block">
                            <input type="checkbox" name="like[write]" title="写作"><div class="layui-unselect layui-form-checkbox" lay-skin=""><span>写作</span><i class="layui-icon"></i></div>
                            <input type="checkbox" name="like[read]" title="阅读" checked=""><div class="layui-unselect layui-form-checkbox layui-form-checked" lay-skin=""><span>阅读</span><i class="layui-icon"></i></div>
                            <input type="checkbox" name="like[game]" title="游戏"><div class="layui-unselect layui-form-checkbox" lay-skin=""><span>游戏</span><i class="layui-icon"></i></div>
                        </div>
                    </div>

                    <div class="layui-form-item" pane="">
                        <label class="layui-form-label">原始复选框</label>
                        <div class="layui-input-block">
                            <input type="checkbox" name="like1[write]" lay-skin="primary" title="写作" checked=""><div class="layui-unselect layui-form-checkbox layui-form-checked" lay-skin="primary"><span>写作</span><i class="layui-icon"></i></div>
                            <input type="checkbox" name="like1[read]" lay-skin="primary" title="阅读"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>阅读</span><i class="layui-icon"></i></div>
                            <input type="checkbox" name="like1[game]" lay-skin="primary" title="游戏" disabled=""><div class="layui-unselect layui-form-checkbox layui-checkbox-disbaled layui-disabled" lay-skin="primary"><span>游戏</span><i class="layui-icon"></i></div>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">开关-默认关</label>
                        <div class="layui-input-block">
                            <input type="checkbox" name="close" lay-skin="switch" lay-text="ON|OFF"><div class="layui-unselect layui-form-switch" lay-skin="_switch"><em>OFF</em><i></i></div>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">开关-默认开</label>
                        <div class="layui-input-block">
                            <input type="checkbox" checked="" name="open" lay-skin="switch" lay-filter="component-form-switchTest" lay-text="ON|OFF"><div class="layui-unselect layui-form-switch layui-form-onswitch" lay-skin="_switch"><em>ON</em><i></i></div>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">单选框</label>
                        <div class="layui-input-block">
                            <input type="radio" name="sex" value="男" title="男" checked=""><div class="layui-unselect layui-form-radio layui-form-radioed"><i class="layui-anim layui-icon"></i><div>男</div></div>
                            <input type="radio" name="sex" value="女" title="女"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>女</div></div>
                            <input type="radio" name="sex" value="禁" title="禁用" disabled=""><div class="layui-unselect layui-form-radio layui-radio-disbaled layui-disabled"><i class="layui-anim layui-icon"></i><div>禁用</div></div>
                        </div>
                    </div>
                    <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">普通文本域</label>
                        <div class="layui-input-block">
                            <textarea name="text" placeholder="请输入内容" class="layui-textarea"></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <div class="link-footer">
                                <button class="layui-btn" lay-submit="" lay-filter="component-form-demo1">立即提交</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>