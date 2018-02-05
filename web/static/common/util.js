// var root_url = "http://www.zuanqun.com:8080/";
function request(url,data,callback){
    $.ajax({
        url: url,
        data: data,
        type: "post",
        dataType: "json",
        success: function (res) {
            if (typeof callback === 'function') {
                callback(res);
            }
        }, error: function (error) {
            if (typeof callback === 'function') {
                callback(error);
            }
        }
    });
}

function redirect(url){
    window.location.href = url;
}

//带验证操作
function isLogin(url,callback){
    var token = localStorage.getItem('token');
    $.ajax({
        url: url,
        headers: {
            "authorization": token
        },
        type: "post",
        dataType: "json",
        success: function (res) {
            if (typeof callback === 'function') {
                callback(null,res);
            }
        }, error: function (error) {
            console.log(error);
            if (typeof callback === 'function') {
                callback(error);
            }
        }
    });
}
//get获取数据
function getData(url,data,callback){
    $.ajax({
        url: url,
        data: data,
        type: "get",
        dataType: "json",
        success: function (res) {
            if (typeof callback === 'function') {
                callback(null,res);
            }
        }, error: function (error) {
            if (typeof callback === 'function') {
                callback(error);
            }
        }
    });
}
// 去前后空格
function trim(str) {
    return str.replace(/(^\s*)|(\s*$)/g, "");
}

function FormatDate (strTime) {
    var date = new Date(strTime);
    return date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
}

// 动态加载js脚本文件
function loadJs(url) {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = url;
    document.body.appendChild(script);
}
//动态加载css
function loadCss(url) {
    var link = document.createElement('link');
    link.type = "text/css";
    link.rel = "stylesheet";
    link.href = url;
    document.getElementsByTagName('HEAD').item(0).appendChild(link);
}

//判断js是否已经加载
function isInclude(name){
    var js= /js$/i.test(name);
    var es=document.getElementsByTagName(js?'script':'link');
    for(var i=0;i<es.length;i++)
        if(es[i][js?'src':'href'].indexOf(name)!=-1)return true;
    return false;
}

function wordLimit(input){
    var maxwidth=200;
    if(input.length>maxwidth){
        return input.substring(0,maxwidth)
    } else {
        return input;
    }
}

//设置cookie
function setCookie(name,data) {
    document.cookie = name + '=' + data + ';domain=.zuanqun.com:8080' + ';path=/';
}

//动态给iframe复值高度
function setIframeHeight(iframe) {
    if (iframe) {
        var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
        if (iframeWin.document.body) {
            iframe.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
            return iframe.height;
        }
    }
}