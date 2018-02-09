<?php

namespace app\open\controller;
use liugene\linkdi\Container;
use liugene\linkdi\InstanceDefinition;
use open\Logic\ApiDoc;
use liugene\linkque\Queue;
use liugene\linkque\Job;
use liugene\alisms\Sms;
use app\logic\Send;

class Tool
{

    public function index()
    {
//        Container::getInstance()->bind(
//            (new InstanceDefinition())
//                ->setAlias('tool')
//                ->setIsSingleton(true)
//                ->setClassName('app\open\controller\Wiki')
//        );
//        dump(Container::getInstance()->get('tool'));
//        Container::getInstance()->bind(
//            (new InstanceDefinition())
//                ->setAlias('tool')
//                ->setCallBack(function(ApiDoc $apidoc){
//                    return new Wiki($apidoc);
//                })
//        );
//        dump(Container::getInstance()->get('tool'));
//        dump(Container::getInstance()->get('tool'));
//        Container::getInstance()->tool = (new InstanceDefinition())
//            ->setIsSingleton(true)
//            ->setClassName('app\open\controller\Wiki');
//        dump(Container::getInstance()->tool);
//        dump(Container::getInstance()->getContainerElement());
//        Queue::getInstance()->push(
//            Job::getInstance()
//            ->setJob('test')
//            ->setJobHandle(function (){
//                echo 123;
//            }));
//        Queue::getInstance()->push(
//            (new Job())
//                ->setJob('test')
//                ->setJobHandle(function (){
//                    echo 1;
//                }));
//        Queue::getInstance()->push(
//            (new Job())
//                ->setJob('tes')
//                ->setJobHandle(function (){
//                    echo 2;
//                }));
//        Queue::getInstance()->push(
//            (new Job())
//                ->setJob('tes12')
//                ->setJobHandle(function (){
//                    echo 2;
//                }));
//        Queue::getInstance()->push(
//            (new Job())
//                ->setJob('this')
//                ->setJobHandle(function (){
//                    echo 2;
//                }));
//        dump(Queue::getInstance()->size());
//        $SignatureNonce = rand(10000,99999);
//        Sms::getInstance()
//            ->setAccessKeyId('LTAImI0YrC7yf9iF')
//            ->setAccessKeyToken('VGwZJ71YQwgqH7JiCfus0HaJ2JebSm')
//            ->setSignatureNonce($SignatureNonce)
//            ->setService('SmsSend')
//            ->setPhoneNumbers('13175091583')
//            ->setSignName('嘉诺商城')
//            ->setTemplateCode('SMS_105015092')
//            ->setTemplateParam("{'number':$SignatureNonce}");
//        dump(Sms::getInstance()->send());
//        Send::getInstance()->sender('sms');
//        dump(uniqid('zq'));
//        $rand = rand(10000,99999);
//        $phone = 13879337614;
//        dump(ceil(time()/$rand*100+$phone/10000));
//        $SignatureNonce = rand(10000,99999);
//        dump(Sms::getInstance()
//            ->setAccessKeyId('LTAImI0YrC7yf9iF')
//            ->setAccessKeyToken('VGwZJ71YQwgqH7JiCfus0HaJ2JebSm')
//            ->setSignatureNonce($SignatureNonce)
//            ->setService('QuerySms')
//            ->setPhoneNumbers('13175091583')
//            ->setSignName('嘉诺商城')
//            ->setTemplateCode('SMS_105015092')
//            ->setTemplateParam("{'number':$SignatureNonce}"));
        $SignatureNonce = rand(10000,99999);
        dump(Sms::getInstance()
            ->setAccessKeyId('LTAImI0YrC7yf9iF')
            ->setAccessKeyToken('VGwZJ71YQwgqH7JiCfus0HaJ2JebSm')
            ->setSignatureNonce($SignatureNonce)
            ->setService('QuerySms')
            ->setPhoneNumber('13175091583')
            ->setPageSize('10')
            ->setCurrentPage("1")->setSendDate('20180204'));
        dump(Sms::getInstance()->send());
//        Send::getInstance()->sender('sms');
    }

    //二合一转链页面
    public function toUland()
    {
        return view('default/tool/index');
    }

    //二合一解密
    public function deCodeUland()
    {
        return view('default/tool/deuland');
    }

    //淘宝客转链
    public function tbkTranLinks()
    {
        return view('default/tool/tbktran');
    }

}
