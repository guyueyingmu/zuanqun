<?php

namespace liugene\wechat;
use liugene\wechat\request\ProfileRequest;
use think\Config;
use liugene\curl\Curl;

class WeChat extends ProfileRequest
{

    //保存单例
    static private $_instance;

    private $_service;

    static private $_request;

    //微信传输过来的所有数据都从该方法开始
    public function receive()
    {
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            if(!$this->get_is_valid()){
                if(static::checkSignature()){
                    $post_xml = file_get_contents("php://input");
                    if(!empty($post_xml)){
                        $this->set_post_xml(simplexml_load_string($post_xml,'SimpleXMLElement',LIBXML_NOCDATA));
                    } else {
                        $this->set_post_xml(null);
                    }
                }
            }
        } else {
            if(!$this->get_is_valid() && isset($_GET['echostr'])){
                if($this->checkSignature()){
                    ob_clean();
                    echo $_GET['echostr'];
                    die;
                }
            } else {
                exit('已经校验过或者请求参数缺失!');
            }
        }
    }

    //创建菜单
    public function createMenu($menu)
    {
        $this->getAccessToken();
        $url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token=' . $this->get_access_token();
        return Curl::request('post',$url,$menu);
    }

    public function responseMsg()
    {
        //判断该数据包是否为订阅的事件推送
        if(strtolower($this->get_post_xml()->MsgType) == 'event'){
            //如果是关注subscribe事件
            if(strtolower($this->get_post_xml()->Event) == 'subscribe'){
                //回复用户消息
                $formUser = $this->get_post_xml()->ToUserName;
                $toUser = $this->get_post_xml()->FromUserName;
                $time = time();
                $msgType = 'text';
                $content = '欢迎关注linkphp';
                $template = "<xml>
 <ToUserName><![CDATA[%s]]></ToUserName>
 <FromUserName><![CDATA[%s]]></FromUserName>
 <CreateTime>%s</CreateTime>
 <MsgType><![CDATA[%s]]></MsgType>
 <Content><![CDATA[%s]]></Content>
 </xml>";
                echo sprintf($template,$toUser,$formUser,$time,$msgType,$content);
            }
            //扫描带参数二维码时间如果是重扫二维码
            if(strtolower($this->get_post_xml()->Event) == 'scan'){
                if($this->get_post_xml()->EventKey == 2000){
                    //如果是临时二维码扫码
                    $tmp = '临时二维码';
                }
                if($this->get_post_xml()->EventKey == 300){
                    //如果是永久二维码扫码
                    $tmp = '永久二维码';
                }
            }
        }
        //接收用户发送过来的信息进行比较然后回复文本内容
        if(strtolower($this->get_post_xml()->MsgType) == 'text')
        {
            if(strtolower($this->get_post_xml()->Content) == 'linkphp'){
                $template = "<xml>
 <ToUserName><![CDATA[%s]]></ToUserName>
 <FromUserName><![CDATA[%s]]></FromUserName>
 <CreateTime>%s</CreateTime>
 <MsgType><![CDATA[%s]]></MsgType>
 <Content><![CDATA[%s]]></Content>
 </xml>";
                $formUser = $this->get_post_xml()->ToUserName;
                $toUser = $this->get_post_xml()->FromUserName;
                $time = time();
                $content = 'LinkPHP是一个开源的轻便框架';
                $msgType = 'text';
                echo sprintf($template,$toUser,$formUser,$time,$content,$msgType);
            }
        }
        if(strtolower($this->get_post_xml()->MsgType) == 'text'){
            $content = '';
            switch(trim($this->get_post_xml()->Content)){
                case 1:
                    $content = '您输入的数字是1';
                    break;
                case 2:
                    $content = '您输入的数字是2';
                    break;

            }
            $template = "<xml>
 <ToUserName><![CDATA[%s]]></ToUserName>
 <FromUserName><![CDATA[%s]]></FromUserName>
 <CreateTime>%s</CreateTime>
 <MsgType><![CDATA[%s]]></MsgType>
 <Content><![CDATA[%s]]></Content>
 </xml>";
            $formUser = $this->get_post_xml()->ToUserName;
            $toUser = $this->get_post_xml()->FromUserName;
            $time = time();
            $msgType = 'text';
            echo sprintf($template,$toUser,$formUser,$time,$msgType,$content);
        }
        if(strtolower($this->get_post_xml()->MsgType) == 'text'){
            if(strtolower($this->get_post_xml()->Content) == '图文'){
                $toUser = $this->get_post_xml()->FormUserName;
                $formUser = $this->get_post_xml()->ToUserName;
                $arr = array(
                    'title' => 'Linkphp',
                    'description'=>"LinkPHP是一个php开源框架",
                    'picurl' => '',
                    'url' => 'http://www.linkphp.cn',
                );
                //回复图文消息
                $template = "<xml>
                            <ToUserName><![CDATA[toUser]]></ToUserName>
                            <FromUserName><![CDATA[fromUser]]></FromUserName>
                            <CreateTime>12345678</CreateTime>
                            <MsgType><![CDATA[news]]></MsgType>
                            <ArticleCount>.count($arr).</ArticleCount>
                            <Articles>";
                foreach ($arr as $k=>$v){
                    $template .= "<item>
                            <Title><![CDATA[".$v['title']."]]></Title>
                            <Description><![CDATA["                     .$v['description']."]]></Description>
                            <PicUrl><![CDATA[".$v['picur']."]]></PicUrl>
                            <Url><![CDATA[".$v['url']."]]></Url>
                            </item>";
                }

                $template .= "</Articles>
                     </xml>";
            }
        }
    }

    //获取微信模板消息
    public function sendTemplateMsg($data)
    {
        $this->getAccessToken();
        $url = "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=" . $this->get_access_token();
        //将数组转成json格式
        $postJson = json_encode($data);
        return Curl::request('post',$url,$postJson);
    }

    ///////////////////设置服务///////////////////////////////

    public function setService($service)
    {
        if(isset($this->_service)){
            return $this->_service;
        } else {
            $class = '\\liugene\\wechat\\service\\' . $service;
            //根据类名反射获取实例对象
            $this->_service = new $class;
        }
        return $this->_service;
    }


    ////////////////////获取access token等///////////////////////

    //请求获access_token
    public function getAccessToken()
    {
        //判断是否初次请求
        if(!$this->get_access_token()){
            //1、请求access_token地址
            if($this->get_appid()){
                $appid = $this->get_appid();
            } else {
                $appid = Config::get('wx_appid');
            }
            if($this->get_secret()){
                $app_secret = $this->get_secret();
            } else {
                $app_secret = Config::get('wx_secret');
            }
            $url = $this->get_access_url() .'?grant_type=' . $this->get_grant_type() . '&appid=' . $appid . '&secret=' . $app_secret . '';
            $token = json_decode(self::request($url),true);
            $this->set_access_token($token['access_token']);
            $this->set_time(time());
            return $token['access_token'];
        } else {
            $now = time();
            if(($now-$this->get_time())>7200){
                //1、请求access_token地址
                $appid = Config::get('wx_appid');
                $app_secret = Config::get('wx_secret');
                $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=' . $appid . '&secret=' . $app_secret . '';
                $token = json_decode(self::request($url),true);;
                $this->set_access_token($token['access_token']);
                $this->set_time(time());
                return $token['access_token'];
            }
        }
        return $this->getAccessToken();
    }

    //校验签名合法性
    private function checkSignature()
    {
        if(isset($_GET['nonce']) && isset($_GET['timestamp']) && isset($_GET['signature'])){
            //获得参数 signatrue token timestamp
            //先获取到这三个参数
            $signature = $_GET['signature'];
            $nonce = $_GET['nonce'];
            $timestamp = $_GET['timestamp'];

            //把这三个参数存到一个数组里面
            $tmpArr = array($timestamp,$nonce,'linkphp');
            //进行字典排序
            sort($tmpArr);

            //把数组中的元素合并成字符串，impode()函数是用来将一个数组合并成字符串的
            $tmpStr = implode($tmpArr);

            //sha1加密，调用sha1函数
            $tmpStr = sha1($tmpStr);
            if($tmpStr == $signature){
                $this->set_is_valid(true);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    //统一执行入口
    public function execute($service=null)
    {
        if(is_null($service)){
            $this->_service->set_access_token($this->getAccessToken());
            $request_url = $this->_service->get_api_url() . '?';
            return $this->request($request_url . $this->generate_url($this->_service->get_api_param()));
        }
        $this->_service->set_access_token($this->getAccessToken());
        $request_url = $service->get_api_url() . '?';
        return $this->request($request_url . $this->generate_url($service->get_api_param()));
    }

    //组装url
    private function generate_url($params)
    {
        ksort($params);
        $url = '';
        foreach($params as $k => $v){
            $url .= "$k=" . $v . "&";
        }
        return $url;
    }

    //统一请求
    private function request($url)
    {
        return self::$_request->get($url);
    }

    static public function getInstance()
    {
        if(isset(self::$_instance)){
            return self::$_instance;
        } else {
            self::$_instance = new self;
            self::$_request = new Request();
        }
        return self::$_instance;
    }

    //获取code
    public function getCode($service=null)
    {
        if(is_null($service)){
            $request_url = $this->_service->get_api_url() . '?';
            return $this->request($request_url . $this->generate_url($this->_service->get_api_param()));
        }
        $request_url = $service->get_api_url() . '?';
        return $this->request($request_url . $this->generate_url($service->get_api_param()));
    }

}