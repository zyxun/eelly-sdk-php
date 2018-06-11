<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Store\Service;


interface WaybillInterface
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
     * @Validation(
     *      @OperatorValidator(0,{message : "非法用户ID/店铺ID",operator:["gt",0]}),
     *      @InclusionIn(1,{message : "非法的绑定类型",domain:[0, 1, 2]})
     * )
     */
    public function getWaybillInfo(int $userId, int $type): array;
}