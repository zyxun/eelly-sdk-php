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

namespace Eelly\SDK\Activity\Api;

use Eelly\SDK\EellyClient;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ActivitySpreadProfit
{
    /**
     * 我的收益列表
     */
    public function listMyIncome(string $type = '1', string $dateMonth = '', UidDTO $user = null):array
    {
        return EellyClient::requestJson('activity/activitySpreadProfit', __FUNCTION__,  [
            'type' => $type,
            'dateMonth' => $dateMonth,
            'user' => $user
        ]);
    }

    /**
     * 累计收益列表
     */
    public function listTotalIncome(UidDTO $user = null):array
    {
        return EellyClient::requestJson('activity/activitySpreadProfit', __FUNCTION__,  [
            'user' => $user
        ]);
    }

    /**
     * 收益文本内容
     */
    public function IncomeContent():array
    {
        return EellyClient::requestJson('activity/activitySpreadProfit', __FUNCTION__,  []);
    }

    /**
     * 粉丝攻略
     */
    public function fanRaiders():array
    {
        return EellyClient::requestJson('activity/activitySpreadProfit', __FUNCTION__,  []);
    }

    /**
     * 根据用户id获取收益相关的数据
     */
    public function getIncomeInfoByUserId(int $userId):array
    {
        return EellyClient::requestJson('activity/activitySpreadProfit', __FUNCTION__,  [
            'userId' => $userId
        ]);
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