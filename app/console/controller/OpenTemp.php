<?php

namespace app\console\controller;

class OpenTemp
{

    public function index()
    {
        return view('default/open/index');
    }

    public function openUser()
    {
        return view('default/open/user');
    }

}