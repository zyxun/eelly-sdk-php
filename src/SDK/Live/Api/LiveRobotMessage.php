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
use Eelly\SDK\Live\Service\LiveRobotMessageInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class LiveRobotMessage
{
    /**
     * 添加机器人留言
     * 
     * > data 数据内容说明
     * 
     * key | type | value
     * --- | ---- | -----
     * type | int | 消息类型 0 通用消息 289	女装 292 男装 293 童装 342 鞋类 343 箱包 344 内衣 345 衣饰
     * content | string | 留言模版 json格式
     * status | int | 启用状态（选填）
     *
     * @param array $data 添加的数据
     * @param boolean $batch 批量标示 false:非批量 true:批量
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.28
     */
    public function add(array $data, bool $batch = false): bool
    {
        return EellyClient::request('live/liveRobotMessage', 'add', true, $data, $batch);
    }

    /**
     * 添加机器人留言
     * 
     * > data 数据内容说明
     * 
     * key | type | value
     * --- | ---- | -----
     * type | int | 消息类型 0 通用消息 289	女装 292 男装 293 童装 342 鞋类 343 箱包 344 内衣 345 衣饰
     * content | string | 留言模版 json格式
     * status | int | 启用状态（选填）
     *
     * @param array $data 添加的数据
     * @param boolean $batch 批量标示 false:非批量 true:批量
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.28
     */
    public function addAsync(array $data, bool $batch = false)
    {
        return EellyClient::request('live/liveRobotMessage', 'add', false, $data, $batch);
    }

    /**
     * 获取机器人对话内容
     *
     * @param integer $liveId 直播id，用于筛选重复(暂时不用)
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.28
     */
    public function get(int $liveId = 0): array
    {
        return EellyClient::request('live/liveRobotMessage', 'get', true, $liveId);
    }

    /**
     * 获取机器人对话内容
     *
     * @param integer $liveId 直播id，用于筛选重复(暂时不用)
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.28
     */
    public function getAsync(int $liveId = 0)
    {
        return EellyClient::request('live/liveRobotMessage', 'get', false, $liveId);
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