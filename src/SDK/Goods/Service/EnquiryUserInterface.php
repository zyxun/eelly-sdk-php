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
    
}
