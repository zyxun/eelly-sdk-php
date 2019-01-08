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

namespace Eelly\SDK\System\Service;


/**
 * 客服微信号
 *
 * @author zhangyangxun
 */
interface WechatInterface
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
    public function getWechat(int $wechatId): array;

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
    public function addWechat(array $data): bool;

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
    public function updateWechat(int $wechatId, array $data): bool;

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
    public function getWechatList(array $condition = []): array;

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
    public function deleteWechat(int $wechatId): bool;
}
