<?php

namespace app\console\controller;

class MenuTemp
{

    public function menu()
    {
        return view('default/menu/menu');
    }

    public function addMenu()
    {
        return view('default/menu/add_menu');
    }

}