<?php

namespace app\console\logic;

use app\console\base\Logic;

class Collect extends Logic
{

    public function collectGoods()
    {
        $this->get('goodsCollect')
            ->get('tbk')
            ->setAppKey('23531511')
            ->setSecret('972aea774cd3634a5b8efdb15bf4af99')
            ->getService('ItemGet')
            ->getFields('num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick')
            ->getQ(input('query'));

        $list = json_decode($this->get('goods')->get('tbk')->select('ItemGet'),true);
        dump($list);die;
        return $this->GoodsInto($list['tbk_item_get_response']['results']['n_tbk_item']);
    }

    public function collectGoodsByCat()
    {
        $this->get('goodsCollect')
            ->get('tbk')
            ->setAppKey('23531511')
            ->setSecret('972aea774cd3634a5b8efdb15bf4af99')
            ->getService('ItemGet')
            ->getFields('num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick')
            ->getCat(input('cat'));

        $list = json_decode($this->get('goods')->get('tbk')->select('ItemGet'),true);
        dump($list);die;
        return $this->GoodsInto($list['tbk_item_get_response']['results']['n_tbk_item']);
    }

    public function collectByFavorite()
    {
        $this->get('goodsCollect')
            ->get('tbk')
            ->setAppKey('23531511')
            ->setSecret('972aea774cd3634a5b8efdb15bf4af99')
            ->getService('favorite')
            ->getFields('num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick,shop_title,zk_final_price_wap,event_start_time,event_end_time,tk_rate,status,type')
            ->getFavoriteId(input('favoriteId'))
            ->getAdzoneId(input('adZoneId'))
            ->getPageSize(input('count'));
        $list = json_decode($this->get('goods')->get('tbk')->select('favorite'),true);
        dump($list);die;
        return $this->GoodsInto($list['tbk_item_get_response']['results']['n_tbk_item']);
    }

    public function collectByEvent()
    {
        $this->get('goodsCollect')
            ->get('tbk')
            ->setAppKey('23531511')
            ->setSecret('972aea774cd3634a5b8efdb15bf4af99')
            ->getService('favorite')
            ->getFields('num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick,shop_title,zk_final_price_wap,event_start_time,event_end_time,tk_rate,status,type')
            ->getFavoriteId(input('event'))
            ->getAdzoneId(input('adZoneId'))
            ->getPageSize(input('count'));
        $list = json_decode($this->get('goods')->get('tbk')->select('event'),true);
        dump($list);die;
        return $this->GoodsInto($list['tbk_item_get_response']['results']['n_tbk_item']);
    }

    private function GoodsInto($goods)
    {
        return $this->get('collect')->goodsInto($goods);
    }

}