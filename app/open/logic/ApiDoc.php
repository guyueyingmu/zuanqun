<?php

namespace app\open\logic;
use app\open\base\Doc;

class ApiDoc extends Doc
{

    public function select()
    {
        return $this->get('api')->getDoc();
    }

}
