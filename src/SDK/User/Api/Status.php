<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\User\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\StatusInterface;
use Eelly\SDK\User\DTO\StatusDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Status implements StatusInterface
{

    /**
     * 获取用户状态.
     *
     * @param int $userId 用户id
     *                    ### 返回数据说明
     *
     * 字段|类型|说明
     * -------------|-------|--------------
     * userId       |int    |
     * lastLogin    |int    |   上次登录时间
     * lastIp       |string |   上次登录IP
     * lastCharge   |int    |   上次充值时间
     * lastDraw     |int    |   上次提现时间
     * lastOrder    |int    |   上次下单时间
     * lastForGoods |int    |   上次求货时间
     * lastComment  |int    |   上次评论时间
     * createdTime  |int    |
     * updateTime   |string |
     *
     * @return StatusDTO
     * @requestExample({"userId":148086})
     * @returnExample({"userId":148086,"lastLogin":1506653850,"lastIp":"127.0.01","lastCharge":1506653850,"lastDraw":1506653850,"lastOrder":1506653850,
     *     "lastForGoods":1506653850,"lastComment":1506653850,"createdTime":1506653850,"updateTime":"2017-09-29 10:58:32"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function getStatus(int $userId): StatusDTO
    {
        return EellyClient::request('user/status', 'getStatus', true, $userId);
    }

    /**
     * 添加状态.
     *
     * @param array $data
     * @param int $data ["userId"]
     * @param int $data ["lastLogin"]    上次登录时间
     * @param string $data ["lastIp"]       上次登录IP
     * @param int $data ["lastCharge"]   上次充值时间
     * @param int $data ["lastDraw"]     上次提现时间
     * @param int $data ["lastOrder"]    上次下单时间
     * @param int $data ["lastForGoods"] 上次求货时间
     * @param int $data ["lastComment"]  上次评论时间
     *
     * @throws StatusException
     *
     * @return bool
     * @requestExample({"data":{"userId":148086,"lastLogin":1506653850,"lastIp":"127.0.01","lastCharge":1506653850,"lastDraw":1506653850,
     *     "lastOrder":1506653850,"lastForGoods":1506653850,"lastComment":1506653850}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function addStatus(array $data): bool
    {
        return EellyClient::request('user/status', 'addStatus', true, $data);
    }

    /**
     * 更新用户状态.
     *
     * @param int $userId 用户id
     * @param array $data
     * @param int $data ["lastLogin"]    上次登录时间
     * @param string $data ["lastIp"]       上次登录IP
     * @param int $data ["lastCharge"]   上次充值时间
     * @param int $data ["lastDraw"]     上次提现时间
     * @param int $data ["lastOrder"]    上次下单时间
     * @param int $data ["lastForGoods"] 上次求货时间
     * @param int $data ["lastComment"]  上次评论时间
     *
     * @throws StatusException
     *
     * @return bool
     * @requestExample({"userId":148086,"data":{"lastLogin":1506653850,"lastIp":"127.0.01","lastCharge":1506653850,
     *     "lastDraw":1506653850,"lastOrder":1506653850,"lastForGoods":1506653850,"lastComment":1506653850}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function updateStatus(int $userId, array $data): bool
    {
        return EellyClient::request('user/status', 'updateStatus', true, $userId, $data);
    }

    /**
     * 删除用户状态.
     *
     * @param int $userId
     *
     * @throws StatusException
     *
     * @return bool
     * @requestExample({"userId":148086})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function deleteStatus(int $userId): bool
    {
        return EellyClient::request('user/status', 'deleteStatus', true, $userId);
    }

    /**
     * 用户状态列表.
     *
     * @param array $condition
     * @param int $condition ["lastLogin"]    上次登录时间
     * @param int $condition ["lastCharge"]   上次充值时间
     * @param int $condition ["lastOrder"]    上次下单时间
     * @param int $condition ["lastForGoods"] 上次求货时间
     * @param int $currentPage
     * @param int $limit
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -------------|-------|--------------
     * userId       |int    |
     * lastLogin    |int    |   上次登录时间
     * lastIp       |string |   上次登录IP
     * lastCharge   |int    |   上次充值时间
     * lastDraw     |int    |   上次提现时间
     * lastOrder    |int    |   上次下单时间
     * lastForGoods |int    |   上次求货时间
     * lastComment  |int    |   上次评论时间
     * createdTime  |int    |
     * updateTime   |string |
     *
     * @throws StatusException
     *
     * @return array
     * @requestExample({"condition":{"lastLogin":1, "lastCharge":1,"lastOrder":1,"lastForGoods":1},"currentPage":1,"limit":10})
     * @returnExample([{"userId":148086,"lastLogin":1506653850,"lastIp":"127.0.01","lastCharge":1506653850,"lastDraw":1506653850,"lastOrder":1506653850,
     *     "lastForGoods":1506653850,"lastComment":1506653850,"createdTime":1506653850,"updateTime":"2017-09-29 10:58:32"}])
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017/9/29
     */
    public function listStatusPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('user/status', 'listStatusPage', true, $condition, $currentPage, $limit);
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