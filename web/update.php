<?php

/*
 *
 * 版本 v1.0.0:
 * 1、获取钻群淘宝高佣以及京东联盟商品
 * */


// +----------------------------------------------------------------------
// | 获取缓存文件
// +----------------------------------------------------------------------

//请求地址
$request_url = $_SERVER["REQUEST_URI"];

//获取缓存页面
$cache = CacheHelper::getInstance()->getCache(md5($request_url));

if(!$cache){

// +----------------------------------------------------------------------
// | 文件路径
// +----------------------------------------------------------------------

//文件地址
    $document_url = $_SERVER['PHP_SELF'];

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

// +----------------------------------------------------------------------
// | 没有缓存文件则远程获取
// +----------------------------------------------------------------------

    DownLoadHtml::getInstance()
        ->set_app_id('123')
        ->set_app_key('40bd001563085fc35165329ea1ff5c5ecbdbbeef')
        ->set_document_url($document_url)
        ->set_request_url($request_url)
        ->set_debug(false)
        ->print_info()
        ->check_function_env()
        ->download_file();
} else {
    //存在缓存输出
    exit($cache['content']);
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
 * Class DownLoadHtml
 */
class DownLoadHtml
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
     * @var string $request_url
     */
    private $request_url;

    /**
     * @var bool $debug
     */
    private $debug = false;

    /**
     * @var object $_instance
     */
    static private $_instance;

    private function __construct()
    {
        // TODO: Implement __clone() method.
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * @return object DownLoadHtml
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

    //设置debug

    /**
     * @param boolean $debug
     * @return object $this
     */
    public function set_debug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * print info
     * @return object $this
     */
    public function print_info()
    {
        if($this->debug){
            header("Content-type: text/html; charset=utf-8");
            echo 'cms 版本：' . PROXY_VERSION . '<br>';
            echo 'php 版本：' . PHP_VERSION . '<br>';
            echo 'CMS-HOST: ' . $_SERVER["HTTP_HOST"] . '<br>';
        }
        return $this;
    }

    /**
     * check function exists
     * @return object $this
     */
    public function check_function_env()
    {
        if($this->debug){
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
        }
        return $this;
    }

    /**
     * Detection of permissions for creative folders
     * @return object $this
     */
    public function check_dir_env()
    {
        if($this->debug){
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
        }
        return $this;
    }

    /**
     * redirect
     */
    public function download_file()
    {
        HtmlHttpHelper::getInstance()
            ->set_app_id($this->app_id)
            ->set_app_key($this->app_key)
            ->set_document_url($this->document_url)
            ->set_request_url($this->request_url);

        if($this->debug){
            echo '......正在下载文件.......<br>';
            $res = HtmlHttpHelper::getInstance()->upgrade();
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
        $html = HtmlHttpHelper::getInstance()->upgrade();
        if (!empty($html)) {
            $html = CacheHelper::getInstance()->getCache(md5($this->request_url));
            echo $html['content'];
        }else{
            echo 'test';
        }
        exit;
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
 * Class HtmlHttpHelper
 */
class HtmlHttpHelper
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
     * @var string $upgrade_url
     */
    private $upgrade_url = 'https://upgrade.zuanqun.cn/update.shtml';

    /**
     * @var string $request_url
     */
    private $request_url;

    /**
     * @var object $_instance
     */
    static private $_instance;

    /**
     * @return object HtmlHttpHelper
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
     * @param string $app_id
     * @return object $this
     */
    public function set_app_id($app_id)
    {
        $this->app_id = $app_id;
        return $this;
    }

    /**
     * @param string $key
     * @return object $this
     */
    public function set_app_key($key)
    {
        $this->app_key = $key;
        return $this;
    }

    /**
     * @param string $url
     * @return object $this
     */
    public function set_document_url($url)
    {
        $this->document_url = $url;
        return $this;
    }

    /**
     * @param string $url
     * @return object $this
     */
    public function set_request_url($url)
    {
        $this->request_url = $url;
        return $this;
    }

    private function __construct()
    {
        // TODO: Implement __clone() method.
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    //获取html

    /**
     * @param string $url
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
            'IS-HTML: ' . true,
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
     * @return bool|int
     */
    public function upgrade()
    {
        $res = $this->getHtml($this->upgrade_url,[]);
        $res2arr = @json_decode($res, true);
        if(!isset($res2arr['content'])){
            echo $res . '<br />';
            return false;
        }
        $result = CacheHelper::getInstance()->setCache(md5($this->request_url),$res2arr);
        return $result;
    }

}

// +----------------------------------------------------------------------
// +----------------------------------------------------------------------
// +----------------------------------------------------------------------
// | 钻群 CMS程序，请勿修改一下程序代码 (缓存)
// +----------------------------------------------------------------------
// | copyright@zuanqun.cn
// +----------------------------------------------------------------------
// +----------------------------------------------------------------------
// +----------------------------------------------------------------------

/**
 * Class CacheHelper
 */
class CacheHelper
{

    /**
     * @var object $_instance
     */
    static private $_instance;

    /**
     * @var string $dir
     */
    private $dir;

    private function __construct()
    {
        // TODO: Implement __clone() method.
        $this->dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'cache';
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * @return object CacheHelper
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
     * @param string $key
     * @param string $value
     * @param int $expire
     * @return bool|int
     */
    public function setCache($key, $value, $expire = 3600)
    {
        $data = array(
            'time' => time(),
            'expire' => $expire,
            'value' => $value
        );
        $file = $this->dir . DIRECTORY_SEPARATOR . md5($key) . 'cache.php';
        if(!file_exists($file)){
            @mkdir($this->dir);
        }
        return @file_put_contents($this->dir . DIRECTORY_SEPARATOR . md5($key) . 'cache.php', serialize($data));
    }

    /**
     * @param string $key
     * @return bool
     */
    public function getCache($key)
    {
        $file = $this->dir . DIRECTORY_SEPARATOR . md5($key) . 'cache.php';
        if (!file_exists($file)) {
            return false;
        }
        $str = file_get_contents($file);
        if (empty($str)) {
            return false;
        }
        $html = unserialize($str);
        if(!isset($html['time']) || !isset($html['expire']) || !isset($html['value'])){
            return false;
        }
        if($html['time'] + $html['expire'] < time()){
            return false;
        }
        return $html['value'];
    }
}