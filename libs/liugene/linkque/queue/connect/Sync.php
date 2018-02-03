<?php

namespace liugene\linkque\queue\connect;

use liugene\linkque\queue\Connect;

class Sync extends Connect
{

    private $job_queue = [];

    private $index = 0;

    public function push($param)
    {
        $this->job_queue[$this->index] = $param;
        $this->index++;
        return $this;
    }

    public function pop()
    {
        return $this->job_queue[$this->index];
    }

    public function size()
    {
        return $this->job_queue;
    }

}