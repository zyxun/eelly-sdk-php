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

namespace Eelly\SDK\Pay\Service;

/**
 * 凭证类型
 * 
 * @author wechan<liweiquan@eelly.net>
 */
interface VoucherTypeInterface
{
    /**
     * 获取一条科目类型信息
     * 
     * @return array
     * 
     * @param string $voucherCode
     * 
     * @requestExample()
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月14日
     * 
     * @Validation(
     *    @PresenceOf(0,{message : "非法的凭证代码"}),
     * )
     */
    public function getOneVoucherType(string $voucherCode): array;

    /**
     * 添加凭证类型
     * 
     * @param array $data 请求参数
     * @param string $data["voucherCode"] 凭证代码
     * @param string $data["voucherName"] 凭证名称
     * @param string $data["refDb"] 关联库
     * @param string $data["refDable"] 关联表
     * @param string $data["refField"] 关联字段
     * 
     * @requestExample()
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月14日
     */
    public function addVoucherType(array $data): bool;

    /**
     * 更新凭证类型
     * 
     * @return bool
     * 
     * @param string $voucherCode 凭证代码
     * @param array $data 请求参数
     * @param array $data['voucherName'] 凭证名称
     * @param array $data['refDb'] 关联库
     * @param array $data['refTable'] 关联表
     * @param array $data['refField'] 关联字段
     * 
     * @requestExample()
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月14日
     */
    public function updateVoucherType(string $voucherCode, array $data): bool;

    /**
     * 删除一条凭证明细记录
     * 
     * @return bool
     * 
     * @param string $voucherCode 凭证代码
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月14日
     * 
     * @requestExample()
     * @returnExample()
     * 
     * @Validation(
     *    @PresenceOf(0,{message : "非法的科目代码"}),
     * )
     */
    public function deleteVoucherType(int $voucherCode): bool;

    /**
     * 获取所有的凭证类型
     * 
     * @return array
     * 
     * @param $data array 请求参数
     * @param int $data['currentPage'] 当前页面
     * @param int $data['limit'] 每页数量
     * 
     * @requestExample()
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月14日
     */
    public function getVoucherTypeList(array $data): array;
}
