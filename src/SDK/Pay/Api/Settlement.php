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

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\SettlementInterface;

class Settlement implements SettlementInterface
{
    /**
     * {@inheritdoc}
     */
    public function queryOrder(array $orderInfo): bool
    {
        return EellyClient::request('pay/settlement', __FUNCTION__, true, $orderInfo);
    }

    /**
     * 获取后台结算列表数据
     *
     * @param string $condition 查询条件
     * @param array $binds 绑定参数
     * @param int $page 页码
     * @param int $limit 每页显示多少数量
     * @return array
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.12.12
     */
    public function listManageSettlement(string $condition, array $binds = [], int $page = 1, int $limit = 20):array
    {
        return EellyClient::request('pay/settlement', __FUNCTION__, true, $condition, $binds, $page, $limit);
    }

    /**
     * {@inheritdoc}
     */
    public function listManageSettlementAsync(string $condition, array $binds = [], int $page = 1, int $limit = 20):array
    {
        return EellyClient::request('pay/settlement', __FUNCTION__, false, $condition, $binds, $page, $limit);
    }
}
