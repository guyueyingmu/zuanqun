<?php

namespace liugene\linkrest\response;
use liugene\linkrest\HttpResponse;

class Json extends HttpResponse
{

    protected $content_type = 'application/json';

    /**
     * 处理数据
     * @access public
     * @param mixed $data 要处理的数据
     * @return mixed
     */
    public function output($data)
    {
        return json_encode($data,JSON_UNESCAPED_UNICODE);
    }

}
