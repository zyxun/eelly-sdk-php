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

namespace Eelly\SDK\Im\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Im\Service\TeamMemberStatInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class TeamMemberStat implements TeamMemberStatInterface
{
    /**
     * 初始化群成员订单数据.
     *
     * @internal
     * @Async(route=initMemberStat)
     *
     * @param array $data
     *
     * @return bool
     *
     * @author zhangyangxun
     *
     * @since 2019-04-23
     */
    public function initMemberStat(array $data): bool
    {
        return EellyClient::request('im/teamMemberStat', 'initMemberStat', true, $data);
    }

    /**
     * 初始化群成员订单数据.
     *
     * @internal
     * @Async(route=initMemberStat)
     *
     * @param array $data
     *
     * @return bool
     *
     * @author zhangyangxun
     *
     * @since 2019-04-23
     */
    public function initMemberStatAsync(array $data)
    {
        return EellyClient::request('im/teamMemberStat', 'initMemberStat', false, $data);
    }

    /**
     * 订单支付后更新群统计
     * @internal
     *
     * @param array $data
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-04-22
     */
    public function afterPayOrderSuccess(array $data): bool
    {
        return EellyClient::request('im/teamMemberStat', 'afterPayOrderSuccess', true, $data);
    }

    /**
     * 订单支付后更新群统计
     * @internal
     *
     * @param array $data
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-04-22
     */
    public function afterPayOrderSuccessAsync(array $data)
    {
        return EellyClient::request('im/teamMemberStat', 'afterPayOrderSuccess', false, $data);
    }

    /**
     * 订单完成后更新群统计
     * @internal
     *
     * @param array $data
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-04-23
     */
    public function afterFinishedOrderSuccess(array $data): bool
    {
        return EellyClient::request('im/teamMemberStat', 'afterFinishedOrderSuccess', true, $data);
    }

    /**
     * 订单完成后更新群统计
     * @internal
     *
     * @param array $data
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-04-23
     */
    public function afterFinishedOrderSuccessAsync(array $data)
    {
        return EellyClient::request('im/teamMemberStat', 'afterFinishedOrderSuccess', false, $data);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}
