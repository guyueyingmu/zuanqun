<?php

namespace app\upgrade\controller;
use app\auth\center\WebAuth;
use app\upgrade\model\Cms;
use think\Loader;

class Update
{

    private $app_id;

    private $app_key;

    private $proxy_version;

    private $cms_host;

    private $document_url;

    private $request_url;

    private $cms_url =  '/view/';

    public function index()
    {
        $this->app_id = $this->existsParam('HTTP_APP_ID');
        $this->app_key = $this->existsParam('HTTP_APP_KEY');
        $this->proxy_version = $this->existsParam('HTTP_PROXY_VERSION');
        $this->cms_host = $this->existsParam('HTTP_CMS_HOST');
        $this->document_url = $this->existsParam('HTTP_DOCUMENT_URL');
        $this->request_url = $this->existsParam('HTTP_REQUEST_URL');
        $web_auth = new WebAuth();
        if(isset($_SERVER['HTTP_IS_HTML'])){
            if($web_auth->set_app_id($this->app_id)
                ->set_app_key($this->app_key)
                ->verify()){
                echo json_encode(['content' => $this->getCms()->getContent()]);
            } else {
                echo json_encode(['response_fail_msg' => ['code' => '10002', 'msg' =>  'verify is fail']]);
            }
        } else {
            if($web_auth->set_app_id($this->app_id)
                ->set_app_key($this->app_key)
                ->verify()){
                echo json_encode(['content' => $this->getUpdate()]);
            } else {
                echo json_encode(['response_fail_msg' => ['code' => '10002', 'msg' =>  'verify is fail']]);
            }
        }
    }

    private function getUpdate()
    {
        return file_get_contents(ROOT_PATH . 'web/update.php');
    }

    private function getCms()
    {
        return Loader::controller('app\upgrade\controller\Pcms')->index();
//        $res = file_get_contents(dirname(__Dir__) . $this->cms_url . $this->proxy_version . '/' . $this->proxy_version . '.html');
//        return $res;
    }

    private function existsParam($param)
    {
        if(isset($_SERVER[$param])){
            return $_SERVER[$param];
        }
        return null;
    }

}