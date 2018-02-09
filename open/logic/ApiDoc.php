<?php

namespace open\logic;
use open\base\Doc;

class ApiDoc extends Doc
{

    public function select()
    {
        return $this->get('api')->getDoc();
    }

}
