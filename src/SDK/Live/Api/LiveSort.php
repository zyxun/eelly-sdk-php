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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\LiveSortInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class LiveSort implements LiveSortInterface
{
    /**
     * 更新排序数据
     * 
     * > data 数据说明
     * 
     * key | type | desc
     * --- | ---- | ----
     * topSort | int | 置顶排序 当前位置
     * scoreSort | int | 积分排序
     * storeScore | json | 店铺基础积分
     * shareScore | json | 拉新积分
     * orderScore | json | 订单转换积分
     *
     * @param array $data 更新的字段
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.26
     */
    public function update(array $data): bool
    {
        return EellyClient::request('live/liveSort', 'update', true, $data);
    }

    /**
     * 更新排序数据
     * 
     * > data 数据说明
     * 
     * key | type | desc
     * --- | ---- | ----
     * topSort | int | 置顶排序 当前位置
     * scoreSort | int | 积分排序
     * storeScore | json | 店铺基础积分
     * shareScore | json | 拉新积分
     * orderScore | json | 订单转换积分
     *
     * @param array $data 更新的字段
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.26
     */
    public function updateAsync(array $data)
    {
        return EellyClient::request('live/liveSort', 'update', false, $data);
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