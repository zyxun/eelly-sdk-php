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

use Eelly\DTO\UidDTO;

/**
 * 订单点赞记录表
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
interface LikeInterface
{
    /**
     * 新增订单点赞记录
     *
     * @param array           $data                  订单点赞记录数据
     * @param int             $orderData["orderId"]  订单id
     * @param int             $orderData["userId"]   用户id
     *
     * @throws \Eelly\SDK\Order\Exception\OrderException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "data":{
     *             "orderId":123,
     *             "userId":148086
     *     }
     * })
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.04.28
     */
    public function addOrderLike(array $data): bool;

}
