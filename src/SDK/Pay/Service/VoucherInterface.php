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
 * 凭证明细接口
 * 
 * @author wechan<liweiquan@eelly.net>
 */
interface VoucherInterface
{
    /**
     * 新增凭证明细信息
     * 
     * @return bool
     * 
     * @param array $data 请求参数
     * @param string $data["voucherCode"] 凭证代码
     * @param int $data["money"] 发生额
     * @param int $data['refId'] 关联业务ID
     * @param string $data['remark'] 备注
     * 
     * @requestExample()
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月13日
     */
    public function addVoucher(array $data): bool;

    /**
     * 根据结算日期 获取指定时间内的科目明细信息
     * 
     * @param $data array 请求的参数
     * @param string $data['workDate'] 结算日期
     * @param int $data['currentPage'] 当前页面
     * @param int $data['limit'] 每页数量
     * 
     * @requestExample()
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月14日
     */
    public function getVoucherByWorkData(array $data): array;
}
