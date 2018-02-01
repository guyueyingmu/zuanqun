<?php

namespace app\goods\controller;
use app\logic\Goods;
use app\logic\goods\Alimama;
use app\logic\goods\tbk\ItemGet;
use app\goods\model\GoodsData;
use liugene\alitool\AliTool as AliTools;
use liugene\alitool\service\KeyWordService;
use liugene\alitool\service\GetAuctionCodeService;
use liugene\alitool\service\GetCouponService;
use app\logic\Util;
use app\logic\util\AliTool;
use app\logic\util\tbk\KeyWord;
use app\logic\util\tbk\ToUland;

class Lists
{

    //淘宝客商品查询
    public function tbkGoods()
    {
        Goods::getInstance()->set('tbk',new Alimama())->setService('ItemGet',new ItemGet);
        Goods::getInstance()
            ->get('tbk')
            ->setAppKey('23531511')
            ->setSecret('972aea774cd3634a5b8efdb15bf4af99')
            ->getService('ItemGet')
            ->getFields('num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick')
            ->getQ('女装');

        $list = json_decode(Goods::getInstance()->get('tbk')->select('ItemGet'),true);
        dump($list['tbk_item_get_response']['results']['n_tbk_item']);
//        return GoodsData::tbk_goods($list['tbk_item_get_response']['results']['n_tbk_item']);
    }

    public function keyWord()
    {
//        AliTool::getInstance()->setService('KeyWord',new KeyWordService);
//        AliTool::getInstance()->getService('KeyWord');
//        dump(AliTool::getInstance()->execute('KeyWord'));die;
        Util::getInstance()->set('tbk', new AliTool())->setService('KeyWord',new KeyWord());
        Util::getInstance()
            ->get('tbk')
            ->getService('KeyWord')
            ->getQ('情趣用品');
        dump(Util::getInstance()
            ->get('tbk')
            ->select('KeyWord'));
    }

    public function getCoupon()
    {
        AliTool::getInstance()->setService('getcoupon',new GetCouponService);
        AliTool::getInstance()->getService('getcoupon');
        dump(AliTool::getInstance()->execute('getcoupon'));die;
    }

    public function uland()
    {
        Util::getInstance()->set('tbk', new AliTool())->setService('ToUland',new ToUland());
        Util::getInstance()
            ->get('tbk')
            ->getService('ToUland')
            ->getActivityId('125412445');
        dump(Util::getInstance()
            ->get('tbk')
            ->select('ToUland'));
    }

}
