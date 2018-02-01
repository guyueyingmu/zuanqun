<?php

// +----------------------------------------------------------------------
// |               物料传播方式参数
// +----------------------------------------------------------------------

namespace zuanqun\tbk\request;

class TbkSpreadRequest
{

    //原始url, 只支持uland.taobao.com，s.click.taobao.com， ai.taobao.com，temai.taobao.com的域名转换，否则判错
    public $url;

    //设置url
    public function set_url($url)
    {
        $this->url = $url;
    }
}
