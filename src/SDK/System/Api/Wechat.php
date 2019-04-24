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

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\WechatInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Wechat
{
    /**
     * 获取单个微信号.
     *
     * @param int $wechatId  微信号id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-01-08
     *
     * @internal
     */
    public function getWechat(int $wechatId): array
    {
        return EellyClient::request('system/wechat', 'getWechat', true, $wechatId);
    }

    /**
     * 获取单个微信号.
     *
     * @param int $wechatId  微信号id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-01-08
     *
     * @internal
     */
    public function getWechatAsync(int $wechatId)
    {
        return EellyClient::request('system/wechat', 'getWechat', false, $wechatId);
    }

    /**
     * 添加一个微信号
     *
     * @param array  $data
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"data":{"account": "eelly123", "status": 0}})
     * @returnExample(true)
     *
     * @author zhangyangxun
     * @since   2019-01-08
     *
     * @internal
     */
    public function addWechat(array $data): bool
    {
        return EellyClient::request('system/wechat', 'addWechat', true, $data);
    }

    /**
     * 添加一个微信号
     *
     * @param array  $data
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"data":{"account": "eelly123", "status": 0}})
     * @returnExample(true)
     *
     * @author zhangyangxun
     * @since   2019-01-08
     *
     * @internal
     */
    public function addWechatAsync(array $data)
    {
        return EellyClient::request('system/wechat', 'addWechat', false, $data);
    }

    /**
     * 修改微信号
     *
     * @param int $wechatId 微信号id
     * @param array $data 微信号内容
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"wechatId":1,"data":{"account": "eelly1234","status": 1}})
     * @returnExample(true)
     *
     * @author zhangyangxun
     * @since   2019-01-08
     *
     * @internal
     */
    public function updateWechat(int $wechatId, array $data): bool
    {
        return EellyClient::request('system/wechat', 'updateWechat', true, $wechatId, $data);
    }

    /**
     * 修改微信号
     *
     * @param int $wechatId 微信号id
     * @param array $data 微信号内容
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"wechatId":1,"data":{"account": "eelly1234","status": 1}})
     * @returnExample(true)
     *
     * @author zhangyangxun
     * @since   2019-01-08
     *
     * @internal
     */
    public function updateWechatAsync(int $wechatId, array $data)
    {
        return EellyClient::request('system/wechat', 'updateWechat', false, $wechatId, $data);
    }

    /**
     * 分页获取版本信息.
     *
     * @param array  $condition
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     *
     * @author zhangyangxun
     * @since  2019-01-08
     *
     * @internal
     */
    public function getWechatList(array $condition = []): array
    {
        return EellyClient::request('system/wechat', 'getWechatList', true, $condition);
    }

    /**
     * 分页获取版本信息.
     *
     * @param array  $condition
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     *
     * @author zhangyangxun
     * @since  2019-01-08
     *
     * @internal
     */
    public function getWechatListAsync(array $condition = [])
    {
        return EellyClient::request('system/wechat', 'getWechatList', false, $condition);
    }

    /**
     * 删除微信号
     *
     * @param int $wechatId
     * @return bool
     *
     * @author zhangyangxun
     * @since  2019-01-08
     *
     * @internal
     */
    public function deleteWechat(int $wechatId): bool
    {
        return EellyClient::request('system/wechat', 'deleteWechat', true, $wechatId);
    }

    /**
     * 删除微信号
     *
     * @param int $wechatId
     * @return bool
     *
     * @author zhangyangxun
     * @since  2019-01-08
     *
     * @internal
     */
    public function deleteWechatAsync(int $wechatId)
    {
        return EellyClient::request('system/wechat', 'deleteWechat', false, $wechatId);
    }

    /**
     * 获取前端展示的微信号
     *
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-01-08
     */
    public function getServiceWechat(): array
    {
        return EellyClient::request('system/wechat', 'getServiceWechat', true);
    }

    /**
     * 获取前端展示的微信号
     *
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-01-08
     */
    public function getServiceWechatAsync()
    {
        return EellyClient::request('system/wechat', 'getServiceWechat', false);
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