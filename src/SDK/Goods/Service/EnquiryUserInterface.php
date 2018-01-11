<?php

declare(strict_types=1);

/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\SDK\Goods\Service;


/**
 * 询价商品报价接口.
 *
 * @author wechan<liweiquan@eelly.net>
 */
interface EnquiryUserInterface
{
    /**
     * 新增询价商品报价信息
     *
     * @param array $data 请求参数
     * @param $data['geId'] 询价商品ID
     * @param $data['buyerId'] 买家ID
     * @param $data['price'] 买家ID
     * @param $data['status'] 报价状态：0 未报价 1 已报价 4 删除（买家设置）
     * @param $data['createdTime'] 添加时间
     *
     * @autohr wechan<liweiquan@eelly.net>
     * @since 2018年1月03日
     */
    public function addEnquiryUser(array $data): bool;

    /**
     * 获取用户的在店铺报价记录数.
     * 
     * @param int $data['userId']  用户id (不为0时需要传type 为0时取全部店铺的报价记录)
     * @param int $data['storeId'] 店铺id (不为0时需要传type 为0时取全部店铺的报价记录)
     * @param int $data['type'] 类型 0.取区本店报价记录 1.取其他店铺的报价记录
     * 
     * @return int 
     * 
     * @autor wechan<liweiquan@eelly.net>
     * @since 2017年01月04日
     */
    public function getOfferPriceCount(array $data): int;

    /**
     * 根据询价商品id，返回对应的商品信息
     *
     * @param array $goodsIds  询价商品id数组
     * @param int   $buyerId   买家用户id
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.05
     */
    public function getGoodsInfoByIds(array $goodsIds, int $buyerId) : array;

    /**
     * 根据传过来的where条件，删除对应的记录
     *
     * @param string $where  查询的where条件
     * @return bool
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.10
     */
    //public function deleteEnquiryUserData(string $where): bool;
    
    /**
     * 根据询价商品id，返回对应的商品信息
     *
     * @param array $goodsIds  询价商品id数组
     * @param int   $buyerId   买家用户id
     * 
     * @return array
     * @requestExample({"goodsId":[1,2,3,4,5],"buyerId":148086})
     * @returnExample([{"geuId":"1","geId":"1","name":"","urlCover":"https:\/\/img01.eelly.com\/G06\/M00\/00\/21\/rIYBAFozihGIRo_tAAF6T7PoHfMAAANbADhPKYAAXpn452.jpg","price":"35","createdTime":"1515493062","status":"1","geStatus":"1","buyerId":"148086"},{"geuId":"2","geId":null,"name":null,"urlCover":null,"price":"36","createdTime":"1515493063","status":"1","geStatus":null,"buyerId":"148086"},{"geuId":"3","geId":null,"name":null,"urlCover":null,"price":"30","createdTime":"1515132209","status":"1","geStatus":null,"buyerId":"148086"}])
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2018年01月11日
     */
    public function getEnquiryInfoByIds(array $goodsIds, int $buyerId) : array;
}
