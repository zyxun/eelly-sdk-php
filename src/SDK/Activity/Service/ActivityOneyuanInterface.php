<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Activity\Service;

/**
 * 用户一元拼团次数变更.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 */
interface ActivityOneyuanInterface
{
    /**
     * 添加数据.
     *
     * @param array $data 插入数据
     *
     * @return bool
     *
     * @requestExample({
     *   "userId": 148086,
     *   "times": -1,
     *   "remark": "一元拼团扣除1次orderId:007"
     * })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月24日
     */
    public function addData(array $data): bool;

    /**
     * 获取用户可以参加特殊推广的次数.
     *
     * @param int $userId
     *
     * @return int
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年08月23日
     */
    public function getActivityTimes(int $userId): int;

}