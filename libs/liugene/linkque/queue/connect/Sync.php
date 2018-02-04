<?php

namespace liugene\linkque\queue\connect;

use liugene\linkque\queue\Connect;

class Sync extends Connect
{
    private $config;

    private $job_queue = [];

    private $first = 0;

    private $last = 0;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function push($param)
    {
        $this->job_queue[] = $param;
        $this->last++;
        return $this;
    }

    public function pop()
    {
        return $this->job_queue[$this->first];
    }

    public function size()
    {
        return $this->job_queue;
    }

}