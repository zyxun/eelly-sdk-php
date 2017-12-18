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

namespace Eelly\SDK\User\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\StatusInterface;
use Eelly\SDK\User\DTO\StatusDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
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
        return EellyClient::request('user/status', __FUNCTION__, true, $userId);
    }

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
    public function getStatusAsync(int $userId)
    {
        return EellyClient::request('user/status', __FUNCTION__, false, $userId);
    }

    /**
     * 添加状态.
     *
     * @param array  $data
     * @param int    $data["userId"]
     * @param int    $data["lastLogin"]    上次登录时间
     * @param string $data["lastIp"]       上次登录IP
     * @param int    $data["lastCharge"]   上次充值时间
     * @param int    $data["lastDraw"]     上次提现时间
     * @param int    $data["lastOrder"]    上次下单时间
     * @param int    $data["lastForGoods"] 上次求货时间
     * @param int    $data["lastComment"]  上次评论时间
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
        return EellyClient::request('user/status', __FUNCTION__, true, $data);
    }

    /**
     * 添加状态.
     *
     * @param array  $data
     * @param int    $data["userId"]
     * @param int    $data["lastLogin"]    上次登录时间
     * @param string $data["lastIp"]       上次登录IP
     * @param int    $data["lastCharge"]   上次充值时间
     * @param int    $data["lastDraw"]     上次提现时间
     * @param int    $data["lastOrder"]    上次下单时间
     * @param int    $data["lastForGoods"] 上次求货时间
     * @param int    $data["lastComment"]  上次评论时间
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
    public function addStatusAsync(array $data)
    {
        return EellyClient::request('user/status', __FUNCTION__, false, $data);
    }

    /**
     * 更新用户状态.
     *
     * @param int    $userId               用户id
     * @param array  $data
     * @param int    $data["lastLogin"]    上次登录时间
     * @param string $data["lastIp"]       上次登录IP
     * @param int    $data["lastCharge"]   上次充值时间
     * @param int    $data["lastDraw"]     上次提现时间
     * @param int    $data["lastOrder"]    上次下单时间
     * @param int    $data["lastForGoods"] 上次求货时间
     * @param int    $data["lastComment"]  上次评论时间
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
        return EellyClient::request('user/status', __FUNCTION__, true, $userId, $data);
    }

    /**
     * 更新用户状态.
     *
     * @param int    $userId               用户id
     * @param array  $data
     * @param int    $data["lastLogin"]    上次登录时间
     * @param string $data["lastIp"]       上次登录IP
     * @param int    $data["lastCharge"]   上次充值时间
     * @param int    $data["lastDraw"]     上次提现时间
     * @param int    $data["lastOrder"]    上次下单时间
     * @param int    $data["lastForGoods"] 上次求货时间
     * @param int    $data["lastComment"]  上次评论时间
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
    public function updateStatusAsync(int $userId, array $data)
    {
        return EellyClient::request('user/status', __FUNCTION__, false, $userId, $data);
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
        return EellyClient::request('user/status', __FUNCTION__, true, $userId);
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
    public function deleteStatusAsync(int $userId)
    {
        return EellyClient::request('user/status', __FUNCTION__, false, $userId);
    }

    /**
     * 用户状态列表.
     *
     * @param array $condition
     * @param int   $condition["lastLogin"]    上次登录时间
     * @param int   $condition["lastCharge"]   上次充值时间
     * @param int   $condition["lastOrder"]    上次下单时间
     * @param int   $condition["lastForGoods"] 上次求货时间
     * @param int   $currentPage
     * @param int   $limit
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
        return EellyClient::request('user/status', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     * 用户状态列表.
     *
     * @param array $condition
     * @param int   $condition["lastLogin"]    上次登录时间
     * @param int   $condition["lastCharge"]   上次充值时间
     * @param int   $condition["lastOrder"]    上次下单时间
     * @param int   $condition["lastForGoods"] 上次求货时间
     * @param int   $currentPage
     * @param int   $limit
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
    public function listStatusPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('user/status', __FUNCTION__, false, $condition, $currentPage, $limit);
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