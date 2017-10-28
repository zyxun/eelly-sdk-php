<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Contact\Service;


use Eelly\DTO\UidDTO;

/**
 * 黑名单.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 * @since 2017年10月25日
 */
interface BlackInterface
{
    /**
     * 获取黑名单数量.
     *
     * @param int $fromType 系统来源：1 APP厂+ 2 APP店+ 3 CRM 4 APP云店
     * @param UidDTO|null $user 登录用户信息
     * @return int
     * @requestExample({'fromType':1})
     * @returnExample({2})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年10月25日
     */
    public function getBlackCount(int $fromType, UidDTO $user = null): int;

    /**
     * 获取黑名单列表.
     *
     * @param int $source 系统来源：1 APP厂+ 2 APP店+ 3 CRM 4 APP云店
     * @param UidDTO|null $user 登录用户信息
     * @return array
     * @requestExample({'source':1})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年10月25日
     * @Validation(
     *  @InclusionIn(0,{message:"非法的系统来源",domain:[1,2,3,4]})
     * )
     */
    public function getBlack(int $source, UidDTO $user = null): array;
}