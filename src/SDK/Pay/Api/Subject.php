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

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\SubjectInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Subject
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
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月09日
     */
    public function addSubject(array $data): bool
    {
        return EellyClient::request('pay/subject', 'addSubject', true, $data);
    }

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
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月09日
     */
    public function addSubjectAsync(array $data)
    {
        return EellyClient::request('pay/subject', 'addSubject', false, $data);
    }

    /**
     * 更新科目明细信息
     * 
     * @return bool
     * 
     * @param string $subjectSn 科目序号
     * @param array $data 请求参数
     * @param string $data['remark'] 备注
     * 
     * @requestExample({"subjectSn":"110","data":{"remark":"100454"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月11日
     * 
     */
    public function updateSubject(string $subjectSn, array $data): bool
    {
        return EellyClient::request('pay/subject', 'updateSubject', true, $subjectSn, $data);
    }

    /**
     * 更新科目明细信息
     * 
     * @return bool
     * 
     * @param string $subjectSn 科目序号
     * @param array $data 请求参数
     * @param string $data['remark'] 备注
     * 
     * @requestExample({"subjectSn":"110","data":{"remark":"100454"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月11日
     * 
     */
    public function updateSubjectAsync(string $subjectSn, array $data)
    {
        return EellyClient::request('pay/subject', 'updateSubject', false, $subjectSn, $data);
    }

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
     * @requestExample({"data":{"workDate":"20170101","currentPage":"1","limit":"100"}})
     * @returnExample([{"subjectSn":"110","workDate":"20170101","subjectCode":"110","moneyDebit":"123","moneyCredit":"321","voucherSn":"","remark":"100454","createdTime":"0","subjectName":"库存现金"}])
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月10日
     */
    public function getSubjectByWorkData(array $data): array
    {
        return EellyClient::request('pay/subject', 'getSubjectByWorkData', true, $data);
    }

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
     * @requestExample({"data":{"workDate":"20170101","currentPage":"1","limit":"100"}})
     * @returnExample([{"subjectSn":"110","workDate":"20170101","subjectCode":"110","moneyDebit":"123","moneyCredit":"321","voucherSn":"","remark":"100454","createdTime":"0","subjectName":"库存现金"}])
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月10日
     */
    public function getSubjectByWorkDataAsync(array $data)
    {
        return EellyClient::request('pay/subject', 'getSubjectByWorkData', false, $data);
    }

    /**
     * 计算某时间段内的科目的发生额总和
     * 
     * @return array
     * 
     * @param string $workDate 结算日期
     * 
     * @requestExample({"workDate":"20171120"})
     * @returnExample({"totalDebit":"1400","totalCredit":"1400"})
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月16日
     * 
     */
    public function sumSujectByWorkDate(string $workDate): array
    {
        return EellyClient::request('pay/subject', 'sumSujectByWorkDate', true, $workDate);
    }

    /**
     * 计算某时间段内的科目的发生额总和
     * 
     * @return array
     * 
     * @param string $workDate 结算日期
     * 
     * @requestExample({"workDate":"20171120"})
     * @returnExample({"totalDebit":"1400","totalCredit":"1400"})
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月16日
     * 
     */
    public function sumSujectByWorkDateAsync(string $workDate)
    {
        return EellyClient::request('pay/subject', 'sumSujectByWorkDate', false, $workDate);
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