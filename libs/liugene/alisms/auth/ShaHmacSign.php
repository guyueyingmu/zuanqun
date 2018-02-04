<?php

namespace liugene\alisms\auth;

class ShaHmacSign
{
    static public function sign($stringToSign, $accessSecret)
    {
        return	base64_encode(hash_hmac('sha1', $stringToSign, $accessSecret, true));
    }

}