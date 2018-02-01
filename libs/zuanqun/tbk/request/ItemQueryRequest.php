<?php

// +----------------------------------------------------------------------
// |               聚划算商品搜索接口参数
// +----------------------------------------------------------------------

namespace zuanqun\tbk\request;

class ItemQueryRequest
{


    //页码 默认值：1
    public $current_page = 1;

    //页大小 默认值：20
    public $page_size = 20;

    //媒体pid string
    public $pid;

    //是否包邮 boolean
    public $postage;

    //状态，预热：1，正在进行中：2,可不传
    public $status;

    //淘宝类目id
    public $taobao_category_id;

    //搜索关键词
    public $word;

    //设置页码
    public function set_current_page($page)
    {
        $this->current_page = $page;
    }

    //设置页大小
    public function set_page_size($size)
    {
        $this->page_size = $size;
    }

    //设置媒体id
    public function set_pid($id)
    {
        $this->pid = $id;
    }

    //设置是否包邮
    public function set_postage($boolean)
    {
        $this->postage = $boolean;
    }

    //设置状态
    public function set_status($status)
    {
        $this->status = $status;
    }

    //设置淘宝类目
    public function set_taobao_category_id($id)
    {
        $this->taobao_category_id = $id;
    }

    //搜索关键词
    public function set_word($word)
    {
        $this->word = $word;
    }

}
