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
use Eelly\SDK\Live\Service\LiveRobotMessageLogInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class LiveRobotMessageLog
{
    /**
     * 添加留言库日志
     * 
     * > data 数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * liveId | int | 直播id
     * robotAccount | string | 云信账号
     * robotNickname | string | 云信昵称
     * lrm_id | int | 消息内容库id
     * content | string | 留言内容
     *
     * @param array $data 添加留言日志的数据
     * @param boolean $batch 批量添加标示 false:非批量 true:批量
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.28
     */
    public function add(array $data, bool $batch = false): bool
    {
        return EellyClient::request('live/liveRobotMessageLog', 'add', true, $data, $batch);
    }

    /**
     * 添加留言库日志
     * 
     * > data 数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * liveId | int | 直播id
     * robotAccount | string | 云信账号
     * robotNickname | string | 云信昵称
     * lrm_id | int | 消息内容库id
     * content | string | 留言内容
     *
     * @param array $data 添加留言日志的数据
     * @param boolean $batch 批量添加标示 false:非批量 true:批量
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.28
     */
    public function addAsync(array $data, bool $batch = false)
    {
        return EellyClient::request('live/liveRobotMessageLog', 'add', false, $data, $batch);
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