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

namespace Eelly\SDK\Live\Service;

/**
 * Interface LiveRobotMessageInterface.
 *
 * @author sunanzhi <sunanzhi@hotmail.com>
 */
interface LiveRobotMessageInterface
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
    public function add(array $data, bool $batch = false):bool;

    /**
     * 获取机器人对话内容
     *
     * @param integer $liveId 直播id，用于筛选重复(暂时不用)
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.28
     */
    public function get(int $liveId = 0):array;

    /**
     * 批量删除机器人发言内容
     *
     * @param array $lrmIds 消息id
     * @param array $conditions 拓展使用
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.6.4
     */
    public function batchDelete(array $lrmIds, array $conditions = []):bool;

    /**
     * 批量操作机器人消息状态
     *
     * @param array $lrmIds 消息id
     * @param integer $status 0:不启用 1:启用 默认 1
     * @param array $conditions 拓展使用
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.6.4
     */
    public function batchStatus(array $lrmIds, int $status = 1, array $conditions = []):bool;
}