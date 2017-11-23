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

namespace Eelly\SDK\Log\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\UserAuthInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class UserAuth implements UserAuthInterface
{
    /**
     * 通过时间获取数据.
     *
     * @param int $userId    用户Id
     * @param int $startTime 开始时间
     * @param int $endTime   结束时间
     *
     * @return int
     * @requestExample({'startTime':1509003169,'endTime':1509003169})
     * @returnExample(1)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月26日
     * @Validation(
     *    @OperatorValidator(0,{message : "用户Id",operator:["gt",0]}),
     *    @OperatorValidator(1,{message : "开始时间非法",operator:["gt",0]})
     * )
     */
    public function getUserAuthCount(int $userId, int $startTime, int $endTime = 0): int
    {
        return EellyClient::request('log/userauth', __FUNCTION__, true, $userId, $startTime, $endTime);
    }

    /**
     * 通过时间获取数据.
     *
     * @param int $userId    用户Id
     * @param int $startTime 开始时间
     * @param int $endTime   结束时间
     *
     * @return int
     * @requestExample({'startTime':1509003169,'endTime':1509003169})
     * @returnExample(1)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月26日
     * @Validation(
     *    @OperatorValidator(0,{message : "用户Id",operator:["gt",0]}),
     *    @OperatorValidator(1,{message : "开始时间非法",operator:["gt",0]})
     * )
     */
    public function getUserAuthCountAsync(int $userId, int $startTime, int $endTime = 0)
    {
        return EellyClient::request('log/userauth', __FUNCTION__, false, $userId, $startTime, $endTime);
    }

    /**
     * 插入日志数据.
     *
     * @param array  $data   插入数据
     * @param int    $data   ['fromStatus'] 状态：0 未处理 1 审核通过 2 审核失败
     * @param int    $data   ['fromStatus'] 状态：0 未处理 1 审核通过 2 审核失败
     * @param int    $data   ['toStatus']   状态：0 未处理 1 审核通过 2 审核失败
     * @param int    $data   ['adminId']    管理员ID：0 接口自动认证
     * @param string $data   ['adminName']  管理员名称：自动认证时填认证接口名称
     * @param string $data   ['remark']     操作备注：JSON格式，可以存放历史认证信息
     * @param int    $userId 用户登录ID
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return bool
     * @requestExample({'fromStatus':0,'toStatus':1,'adminId':1,'adminName':'admin','remark':{'ssss'}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月26日
     */
    public function addUserAuth(array $data, int $userId): bool
    {
        return EellyClient::request('log/userauth', __FUNCTION__, true, $data, $userId);
    }

    /**
     * 插入日志数据.
     *
     * @param array  $data   插入数据
     * @param int    $data   ['fromStatus'] 状态：0 未处理 1 审核通过 2 审核失败
     * @param int    $data   ['fromStatus'] 状态：0 未处理 1 审核通过 2 审核失败
     * @param int    $data   ['toStatus']   状态：0 未处理 1 审核通过 2 审核失败
     * @param int    $data   ['adminId']    管理员ID：0 接口自动认证
     * @param string $data   ['adminName']  管理员名称：自动认证时填认证接口名称
     * @param string $data   ['remark']     操作备注：JSON格式，可以存放历史认证信息
     * @param int    $userId 用户登录ID
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return bool
     * @requestExample({'fromStatus':0,'toStatus':1,'adminId':1,'adminName':'admin','remark':{'ssss'}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月26日
     */
    public function addUserAuthAsync(array $data, int $userId)
    {
        return EellyClient::request('log/userauth', __FUNCTION__, false, $data, $userId);
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