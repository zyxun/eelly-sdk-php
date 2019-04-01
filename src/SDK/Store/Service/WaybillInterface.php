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

namespace Eelly\SDK\Store\Service;

interface WaybillInterface
{
    /**
     * 添加用户店铺电子面单Token绑定.
     *
     * @param array $data
     *
     * @return bool
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月23日
     * @Validation(
     *     @PresenceOf(0,{message : "非法参数"})
     * )
     */
    public function addData(array $data): bool;

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
    public function updateCpCode(int $userId, int $type, string $cpCode): bool;

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
    public function unbindToken(int $userId, int $type): bool;

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
    public function getWaybillInfo(int $userId, int $type): array;

    /**
     * 设置默认的发货地址
     *
     * @param integer $userId 用户id
     * @param string $cpCode 物流服务id
     * @param string $branchCode 地址唯一id
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.12.20
     */
    public function setDefaultShipAddress(int $userId, string $cpCode, string $branchCode):bool;
}
