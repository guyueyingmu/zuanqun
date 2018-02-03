<?php

namespace liugene\linkque\queue;

abstract class Connect
{

    public function push($param){}

    public function pop(){}

    public function size(){}

    public function delete(){}

    public function release(){}

}