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

namespace Eelly\SDK\Order\Service;

/**
 * 一元商品订单标志
 *
 */
interface LikeFlagInterface
{
    /**
     * 根据商品id 获取指定一元商品下单的数量
     * 
     * @param array $goodsIds 商品id
     * 
     * @author wechan
     * @since 2018年08月23日
     */
    public function countLikeFlagOrder(array $goodsIds):array;
}
