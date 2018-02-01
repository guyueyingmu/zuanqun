<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"C:\Object\zuanqun\web/../app/open\view\default\wiki\apiinfo.html";i:1517393696;s:54:"C:\Object\zuanqun\app\open\view\default\base\base.html";i:1517395062;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>公共继承标题</title>
    <link href="__COM__/editor.md/css/editormd.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="__OPEN_CSS__/base.css">
    <script src="__COM__/jquery.js"></script>
</head>
<body>

<div class="link-body">
    <div class="link-item">
        <div class="layui-fluid">
            <div class="layui-card-header"><?php echo $res['api_title']; ?></div>
            <div id="api-doc" class="layui-card-body">
                <textarea style="display:none;"><?php echo $res['s_content']; ?></textarea>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        var testEditor;
        testEditor = editormd.markdownToHTML("api-doc", );
    })
</script>


</body>
<script src="__COM__/editor.md/lib/marked.min.js"></script>
<script src="__COM__/editor.md/lib/prettify.min.js"></script>
<script src="__COM__/editor.md/editormd.min.js"></script>
<script>
//    layui.use('code', function(){ //加载code模块
//        layui.code({
//            title: '钻群API接口'
//            ,skin: 'notepad'
//            ,about: false
//        }); //引用code方法
//
//    });
</script>
</html>