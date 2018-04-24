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
 * 买家订单功能.
 *
 * @author hehui<hehui@eelly.com>
 */
interface BuyerOrderInterface
{
    /**
     * 获取小程序订单列表.
     *
     * > 订单筛选值
     *
     * 状态          | 状态值
     * ------------ | --------
     * 全部          | 0
     * 待付款        | 1
     * 待分享(已付款) | 2
     * 待发货        | 3
     * 待收货        | 4
     * 待评价(已收货) | 5
     *
     * @param int $uid   用户id
     * @param int $tab   订单筛选值
     * @param int $page  第几页
     * @param int $limit 页面
     *
     * @return array
     */
    public function getAppletOrderList(int $uid, int $tab = 0, int $page = 0, int $limit = 20): array;
}
