<?php

namespace app\logic\send\sender;

use app\logic\send\Sender;
use liugene\alisms\Sms as SmsSdk;

class Sms extends Sender
{

    public function setSmsParam()
    {
        return SmsSdk::getInstance();
    }

    public function send()
    {
        $SignatureNonce = rand(10000,99999);
        $this->setSmsParam()
            ->setAccessKeyId('LTAImI0YrC7yf9iF')
            ->setAccessKeyToken('VGwZJ71YQwgqH7JiCfus0HaJ2JebSm')
            ->setSignatureNonce($SignatureNonce)
            ->setService('SmsSend')
            ->setPhoneNumbers('13175091583')
            ->setSignName('嘉诺商城')
            ->setTemplateCode('SMS_105015092')
            ->setTemplateParam("{'number':$SignatureNonce}");
        dump($this->setSmsParam()->send());
    }

    public function verify($code,$phone)
    {
        $SignatureNonce = rand(10000,99999);
        $this->setSmsParam()
            ->setAccessKeyId('LTAImI0YrC7yf9iF')
            ->setAccessKeyToken('VGwZJ71YQwgqH7JiCfus0HaJ2JebSm')
            ->setSignatureNonce($SignatureNonce)
            ->setService('SmsSend')
            ->setPhoneNumbers($phone)
            ->setSignName('嘉诺商城')
            ->setTemplateCode('SMS_105015092')
            ->setTemplateParam("{'number':$code}");
        return $this->response($this->setSmsParam()->send());
    }

    //统一返回格式
    public function response($input)
    {
        $response = json_decode($input,true);
        if($response['Code'] == 'OK'){
            return true;
        } else {
            return false;
        }
    }

}