<?php

namespace liugene\linkque\queue\job;

use liugene\linkque\queue\Job;

class Sync extends Job
{

    protected $job_handle;

    protected $job;

    public function handle()
    {
        return $this->job_handle;
    }

    public function setJobHandle($handle)
    {
        $this->job_handle = $handle;
        return $this;
    }

    public function setJob($job)
    {
        $this->job = $job;
        return $this;
    }

}