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

namespace Eelly\SDK\Store\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Store\Service\WaybillInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Waybill implements WaybillInterface
{
    /**
     * 添加用户店铺电子面单Token绑定.
     *
     * @param array $data
     * @return bool
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年05月23日
     * @Validation(
     *     @PresenceOf(0,{message : "非法参数"})
     * )
     */
    public function addData(array $data): bool
    {
        return EellyClient::request('store/waybill', 'addData', true, $data);
    }

    /**
     * 添加用户店铺电子面单Token绑定.
     *
     * @param array $data
     * @return bool
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年05月23日
     * @Validation(
     *     @PresenceOf(0,{message : "非法参数"})
     * )
     */
    public function addDataAsync(array $data)
    {
        return EellyClient::request('store/waybill', 'addData', false, $data);
    }

    /**
     * 更新默认的电子面单.
     *
     * @param int $userId 用户ID
     * @param int $type   绑定类型：1 淘宝帐户 2 菜鸟帐户
     * @param int $cpCode 快递编号
     *
     * @return bool
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月23日
     * @Validation(
     *      @OperatorValidator(0,{message : "非法用户ID/店铺ID",operator:["gt",0]}),
     *      @InclusionIn(1,{message : "非法的绑定类型",domain:[1, 2]})
     * )
     */
    public function updateCpCode(int $userId, int $type, string $cpCode): bool
    {
        return EellyClient::request('store/waybill', 'updateCpCode', true, $userId, $type, $cpCode);
    }

    /**
     * 更新默认的电子面单.
     *
     * @param int $userId 用户ID
     * @param int $type   绑定类型：1 淘宝帐户 2 菜鸟帐户
     * @param int $cpCode 快递编号
     *
     * @return bool
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月23日
     * @Validation(
     *      @OperatorValidator(0,{message : "非法用户ID/店铺ID",operator:["gt",0]}),
     *      @InclusionIn(1,{message : "非法的绑定类型",domain:[1, 2]})
     * )
     */
    public function updateCpCodeAsync(int $userId, int $type, string $cpCode)
    {
        return EellyClient::request('store/waybill', 'updateCpCode', false, $userId, $type, $cpCode);
    }

    /**
     * 解除授权.
     *
     * @param string $userId 用户ID/店铺ID
     * @param int    $type   绑定类型：1 淘宝帐户 2 菜鸟帐户
     *
     * @return bool
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月23日
     * @Validation(
     *      @OperatorValidator(0,{message : "非法用户ID/店铺ID",operator:["gt",0]}),
     *      @InclusionIn(1,{message : "非法的绑定类型",domain:[1, 2]})
     * )
     */
    public function unbindToken(int $userId, int $type): bool
    {
        return EellyClient::request('store/waybill', 'unbindToken', true, $userId, $type);
    }

    /**
     * 解除授权.
     *
     * @param string $userId 用户ID/店铺ID
     * @param int    $type   绑定类型：1 淘宝帐户 2 菜鸟帐户
     *
     * @return bool
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月23日
     * @Validation(
     *      @OperatorValidator(0,{message : "非法用户ID/店铺ID",operator:["gt",0]}),
     *      @InclusionIn(1,{message : "非法的绑定类型",domain:[1, 2]})
     * )
     */
    public function unbindTokenAsync(int $userId, int $type)
    {
        return EellyClient::request('store/waybill', 'unbindToken', false, $userId, $type);
    }

    /**
     * 用户店铺电子面单Token绑定获取.
     *
     * @param int $userId 用户ID/店铺ID
     * @param int $type   绑定类型：1 淘宝帐户 2 菜鸟帐户
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月23日
     */
    public function getWaybillInfo(int $userId, int $type): array
    {
        return EellyClient::request('store/waybill', 'getWaybillInfo', true, $userId, $type);
    }

    /**
     * 用户店铺电子面单Token绑定获取.
     *
     * @param int $userId 用户ID/店铺ID
     * @param int $type   绑定类型：1 淘宝帐户 2 菜鸟帐户
     *
     * @return array
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月23日
     * @Validation(
     *      @OperatorValidator(0,{message : "非法用户ID/店铺ID",operator:["gt",0]}),
     *      @InclusionIn(1,{message : "非法的绑定类型",domain:[0, 1, 2]})
     * )
     */
    public function getWaybillInfoAsync(int $userId, int $type)
    {
        return EellyClient::request('store/waybill', 'getWaybillInfo', false, $userId, $type);
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