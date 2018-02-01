<?php

/*
 *
 * 版本 v1.0.0:
 * 1、获取钻群淘宝高佣以及京东联盟商品
 * */

// +----------------------------------------------------------------------
// | app_id 和 app_key请勿修改
// +----------------------------------------------------------------------

/**
 * zq_cms version
 */
define('PROXY_VERSION','zq_cms_1');


// +----------------------------------------------------------------------
// | 文件路径
// +----------------------------------------------------------------------

//文件地址
$document_url = $_SERVER['PHP_SELF'];
//请求地址
$request_url = $_SERVER["REQUEST_URI"];

if(empty($document_url)){
    $document_url = $_SERVER['SCRIPT_NAME'];
}
if(empty($document_url)){
    $document_url = $_SERVER['DOCUMENT_URI'];
}
if(empty($document_url)){
    $document_url = $request_url;
    $str_pos = strpos($document_url, '?');
    if ($str_pos !== false) {
        $documentUrl = substr($document_url, 0, $str_pos);
    }
}

$file = $_SERVER["DOCUMENT_ROOT"] . $document_url . 'cms.php';

// +----------------------------------------------------------------------
// | 判断文件是否存在，不存在远程获取
// +----------------------------------------------------------------------

if(file_exists($file)){
    include_once($file);
} else {

    DownLoad::getInstance()
        ->set_app_id('123')
        ->set_app_key('40bd001563085fc35165329ea1ff5c5ecbdbbeef')
        ->set_document_url($document_url)
        ->set_request_url($request_url)
        ->set_file($file)
        ->print_info()
        ->check_function_env()
        ->download_file();

}

// +----------------------------------------------------------------------
// +----------------------------------------------------------------------
// +----------------------------------------------------------------------
// | 钻群 CMS程序，请勿修改一下程序代码 (检测下载)
// +----------------------------------------------------------------------
// | copyright@zuanqun.cn
// +----------------------------------------------------------------------
// +----------------------------------------------------------------------
// +----------------------------------------------------------------------

/**
 * Class DownLoad
 */
class DownLoad
{

    /**
     * @var string $app_id
     */
    private $app_id;

    /**
     * @var string $app_key
     */
    private $app_key;

    /**
     * @var string $document_url
     */
    private $document_url;

    /**
     * @var string $file
     */
    private $file;

    /**
     * @var string $request_url
     */
    private $request_url;

    /**
     * @var object $_instance
     */
    static private $_instance;

    /**
     * DownLoad constructor.
     */
    private function __construct()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * DownLoad clone.
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * @return object DownLoad
     */
    static public function getInstance()
    {
        if(isset(self::$_instance)){
            return self::$_instance;
        }
        self::$_instance = new self();
        return self::$_instance;
    }

    //设置appid

    /**
     * @param string $id
     * @return object $this
     */
    public function set_app_id($id)
    {
        $this->app_id = $id;
        return $this;
    }

    //设置app_key

    /**
     * @param string $key
     * @return object $this
     */
    public function set_app_key($key)
    {
        $this->app_key = $key;
        return $this;
    }

    //设置文档路径

    /**
     * @param string $url
     * @return object $this
     */
    public function set_document_url($url)
    {
        $this->document_url = $url;
        return $this;
    }

    //设置文件名

    /**
     * @param string $file
     * @return object $this
     */
    public function set_file($file)
    {
        $this->file = $file;
        return $this;
    }

    //设置请求url

    /**
     * @param string $url
     * @return object $this
     */
    public function set_request_url($url)
    {
        $this->request_url = $url;
        return $this;
    }

    /**
     * print info
     * @return object $this
     */
    public function print_info()
    {
        header("Content-type: text/html; charset=utf-8");
        echo 'cms 版本：' . PROXY_VERSION . '<br>';
        echo 'php 版本：' . PHP_VERSION . '<br>';
        echo 'CMS-HOST: ' . $_SERVER["HTTP_HOST"] . '<br>';
        return $this;
    }

    /**
     * check function exists
     * @return object $this
     */
    public function check_function_env()
    {
        if(function_exists('curl_init')){
            echo 'curl 已经开启 ' . '<br>';
        } else {
            echo 'curl <span style="color: red">未开启,请先开启curl扩展，否则无法运行,请联系您的空间或者服务器提供商</span>' . '<br>';
            exit;
        }

        if(function_exists('mb_substr')){
            echo 'mbstring 已经开启 ' . '<br>';
        } else {
            echo 'mbstring <span style="color: red">未开启,请先开启mbstring扩展，否则无法运行</span>' . '<br>';
            exit;
        }
        return $this;
    }

    /**
     * Detection of permissions for creative folders
     * @return object $this
     */
    public function check_dir_env()
    {
        $test_dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'cache';
        $test_file = $test_dir . '/test.txt';
        if(!is_dir($test_dir)){
            @mkdir($test_dir);
        }
        @file_put_contents($test_file,'test');
        if(file_exists($test_file)){
            echo 'cache：有效<br>';
        } else {
            echo 'cache <span style="color: red">无效,请先设置目录读写权限,请联系您的空间或者服务器提供商</span>' . '<br>';
            exit;
        }
        return $this;
    }

    /**
     * redirect
     */
    public function download_file()
    {
        echo '......正在下载文件.......<br>';

        $res = HttpHelper::getInstance()
            ->set_app_id($this->app_id)
            ->set_app_key($this->app_key)
            ->set_document_url($this->document_url)
            ->set_request_url($this->request_url)
            ->upgrade($this->file);

        if ($res === false) {
            echo '......文件下载失败,请刷新页面重试,如果还是失败请联系客服.......<br>';
            echo '......如果是香港或者国外虚拟主机服务器，请联系您的主机供应商优化网络CDN.......<br>';
            exit;
        } else {
            echo '......文件下载成功.......<br>';
            echo '------5秒后跳转----------<br>';
            echo '------<a href="' . $this->request_url . '">或者点击立即跳转</a>----------<br>';

            header("refresh:5;url=" . $this->request_url);
            exit;
        }
    }
}

// +----------------------------------------------------------------------
// +----------------------------------------------------------------------
// +----------------------------------------------------------------------
// | 钻群 CMS程序，请勿修改一下程序代码 (下载cms)
// +----------------------------------------------------------------------
// | copyright@zuanqun.cn
// +----------------------------------------------------------------------
// +----------------------------------------------------------------------
// +----------------------------------------------------------------------

/**
 * Class HttpHelper
 */
class HttpHelper
{
    /**
     * @var
     */
    private $app_id;

    /**
     * @var
     */
    private $app_key;

    /**
     * @var
     */
    private $document_url;

    /**
     * @var string
     */
    private $upgrade_url = 'http://upgrade.zuanqun.com/update.html';

    /**
     * @var
     */
    private $request_url;

    /**
     * @var
     */
    static private $_instance;

    /**
     * @return HttpHelper
     */
    static public function getInstance()
    {
        if(isset(self::$_instance)){
            return self::$_instance;
        }
        self::$_instance = new self();
        return self::$_instance;
    }

    /**
     * @param $app_id
     * @return $this
     */
    public function set_app_id($app_id)
    {
        $this->app_id = $app_id;
        return $this;
    }

    /**
     * @param $key
     * @return $this
     */
    public function set_app_key($key)
    {
        $this->app_key = $key;
        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function set_document_url($url)
    {
        $this->document_url = $url;
        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function set_request_url($url)
    {
        $this->request_url = $url;
        return $this;
    }

    /**
     * HttpHelper constructor.
     */
    private function __construct()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * HttpHelper clone.
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    //获取html

    /**
     * @param $url
     * @param array $param
     * @param null $userAgent
     * @return mixed|string
     */
    private function getHtml($url, $param=[], $userAgent=null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 1);
        empty($refer) && $refer = @$_SERVER['HTTP_REFERER'];
        $ua = $userAgent;
        empty($ua) && $ua = @$_SERVER['HTTP_USER_AGENT'];
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        curl_setopt($ch, CURLOPT_USERAGENT, $ua);
        curl_setopt($ch, CURLOPT_REFERER, $refer);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $header = [
            'APP-ID: ' . $this->app_id,
            'APP-KEY: ' . $this->app_key,
            'PROXY-VERSION: ' . PROXY_VERSION,
            'CMS-HOST: ' . @$_SERVER["HTTP_HOST"],
            'DOCUMENT-URL: ' . $this->document_url,
            'REQUEST-URL: ' . $this->request_url,
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        if(empty($param)){
            $url_info = parse_url($this->request_url);
            $query = [];
            if(isset($url_info['query']) && !empty($url_info['query'])){
                parse_str($url_info['query'],$query);
            }
            $q_url = $url . '?' . http_build_query($query);
            curl_setopt($ch, CURLOPT_URL, $q_url);
        } else {
            curl_setopt($ch, CURLOPT_URL, $url);
        }
        $res = curl_exec($ch);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = mb_substr($res, 0, $header_size);
        $res = mb_substr($res, $header_size);
        curl_close($ch);
        unset($ch);
        $headers = explode("\r\n", $header);
        return $res;
    }

    //更新

    /**
     * @param $file
     * @return bool|int
     */
    public function upgrade($file)
    {
        $res = $this->getHtml($this->upgrade_url,[]);
        $res2arr = @json_decode($res, true);
        if(!isset($res2arr['content'])){
            exit('<span style="color: red">' . $res . '</span><br />');
        }
        $result = @file_put_contents($file, $res2arr['content'], LOCK_EX);
        return $result;
    }

}