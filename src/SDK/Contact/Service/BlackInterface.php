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

namespace Eelly\SDK\Contact\Service;

use Eelly\DTO\UidDTO;

/**
 * 黑名单.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 *
 * @since 2017年10月25日
 */
interface BlackInterface
{
    /**
     * 获取黑名单数量.
     *
     * @param int         $fromType 系统来源：1 APP厂+ 2 APP店+ 3 CRM 4 APP云店
     * @param UidDTO|null $user     登录用户信息
     *
     * @return int
     * @requestExample({'fromType':1})
     * @returnExample({2})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月25日
     */
    public function getBlackCount(int $fromType, UidDTO $user = null): int;

    /**
     * 获取黑名单列表.
     *
     * @param int         $source 系统来源：1 APP厂+ 2 APP店+ 3 CRM 4 APP云店
     * @param UidDTO|null $user   登录用户信息
     *
     * @return array
     * @requestExample({'source':1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月25日
     * @Validation(
     *  @InclusionIn(0,{message:"非法的系统来源",domain:[1,2,3,4]})
     * )
     */
    public function getBlack(int $source, UidDTO $user = null): array;

    /**
     * 添加黑名单.
     *
     * @param array       $data 黑名单数据
     * @param int         $data ['userId'] 黑名单用户ID
     * @param int         $data ['fromType'] 来源类型：1 厂+ 2 店+ 3 CRM 4 云店卖家 5 云店买家
     * @param int         $data ['userType'] 用户类型：1 厂+ 2 店+ 3 云店卖家 4 云店买家
     * @param UidDTO|null $user 登录用户信息
     *
     * @throws \Eelly\SDK\Contact\Exception\BlackException
     *
     * @return bool
     * @requestExample({'userId':148086,'fromType':1,'userType':2})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月28日
     */
    public function addBlack(array $data, UidDTO $user = null): bool;

    /**
     * 批量删除黑名单.
     *
     * @param array       $cbIds
     * @param UidDTO|null $user  登录用户信息
     *
     * @return bool
     * @requestExample({'cbIds':[1,2,3]})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月30日
     */
    public function delete(array $cbIds, UidDTO $user = null): bool;
}
