<?php

namespace liugene\linkrest;
use liugene\linkrest\response\Json;

class ResponseDriver
{

    private $_request;

    public function setRequest(HttpRequest $request)
    {
        $this->_request = $request;
    }

    public function getDriver()
    {
        switch($this->_request->getRequestHttpAccept()){
            case 'json';
                $response_driver = new Json();
                break;
            default :
                $response_driver = new Json();
        }
        return $response_driver;
    }

}
