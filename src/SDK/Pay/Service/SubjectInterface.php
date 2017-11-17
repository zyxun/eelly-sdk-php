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
 * 科目明细接口
 * 
 * @author wechan<liweiquan@eelly.net>
 */
interface SubjectInterface
{
    /**
     * 插入科目明细信息
     * 
     * @throws \Eelly\SDK\Pay\Exception\SubjectException
     * 
     * @return bool 插入科目明细信息结果
     * 
     * @param array $data 请求参数
     * @param string $data["subjectCode"] 科目代码
     * @param int $data["moneyDebit"] 发生额（借）
     * @param int $data["moneyCredit"] 发生额（贷）
     * @param string $data["voucherSn"] 关联凭证
     * @param string $data["remark"] 备注
     * @requestExample({"data":{"subjectCode":"13001","moneyDebit":"100","moneyCredit":"100","voucherSn":"2019110900000001","remark":"备注"}})
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月09日
     */
    public function addSubject(array $data): bool;

    /**
     * 更新科目明细信息
     * 
     * @return bool
     * 
     * @param string $subjectSn 科目序号
     * @param array $data 请求参数
     * @param string $data['remark'] 备注
     * 
     * @requestExample()
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月11日
     * 
     */
    public function updateSubject(string $subjectSn, array $data): bool;
    
    /**
     * 根据结算日期 获取制定时间内的科目明细信息
     * 
     * @param $data array 请求的参数
     * @param string $data['workDate'] 结算日期
     * @param int $data['currentPage'] 当前页面
     * @param int $data['limit'] 每页数量
     * 
     * @return array
     * 
     * @requestExample()
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月10日
     */
    public function getSubjectByWorkData(array $data): array;
    
        /**
     * 计算某时间段内的科目的发生额总和
     * 
     * @param string $workDate 结算日期
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月16日
     * 
     * @Validation(
     *    @PresenceOf(0,{message : "非法的结算日期"}),
     * )
     */
    public function sumSujectByWorkDate(string $workDate) : array;
}
