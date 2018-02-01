<?php

namespace zuanqun\auth\sign;

class Md5Sign
{
    static public function sign($string_to_sign)
    {
        return strtoupper(md5($string_to_sign));
    }
}
