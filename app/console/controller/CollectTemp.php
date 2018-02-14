<?php

namespace app\console\controller;

class CollectTemp
{

    public function collect()
    {
        return view('default/collect/collect');
    }

    public function collectCat()
    {
        return view('default/collect/cat');
    }

    public function collectFavorites()
    {
        return view('default/collect/favorite');
    }

    public function collectEvent()
    {
        return view('default/collect/event');
    }

}