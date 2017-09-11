<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Log\Service;
use Eelly\SDK\Log\DTO\GoodsPriceDTO;


/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface GoodsPriceInterface
{

    /**
     * 获取一条价格记录.
     *
     * @param int $lgpId 历史记录ID
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     * @return GoodsPriceDTO
     * @requestExample({'lgpId':1})
     * @returnExample({"lgpId": 1, "goodsId": 1, "quantity": 2, "price": "2", "type": 3, "createdTime": "2017-09-04 16:07:05"})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月11日
     * @Validation(
     *      @OperatorValidator(0,{message : "日志ID",operator:["gt",0]})
     * )
     */
     public function getGoodsPrice(int $lgpId): GoodsPriceDTO;

    /**
     * 记录当前的商品的价格.
     *
     * @param array $data
     * @param int    $data ['goodsId'] 商品ID
     * @param int    $data ['quantity'] 区间起始数量
     * @param int    $data ['price'] 商品价格
     * @param int    $data ['type'] 价格类型：1 散批 2 拿货 3 打包
     *
     * @throws  \Eelly\SDK\Log\Exception\GoodsHandleException
     * @return bool
     * @requestExample({'data':{'goodsId':1,'quantity':1,'price':200,'type':1}})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月04日
     */
    public function addGoodsPrice(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function updateGoodsPrice(int $GoodsPriceId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function deleteGoodsPrice(int $GoodsPriceId): bool;

    /**
     * 商品价格分页操作.
     *
     * @param int    $goodsId     商品id
     * @param int    $currentPage 第几页
     * @param int    $limit       条数
     *
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     *
     * @return array
     * @requestExample({'goodsId':1,'currentPage':1,'limit':10})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月04日
     */
    public function listGoodsPricePage(int $goodsId, int $currentPage = 1, int $limit = 10):array;


}