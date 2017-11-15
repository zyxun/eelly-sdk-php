<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Service;

use Eelly\SDK\Pay\DTO\SubjectAdjustDTO;

/**
 * 会计科目日核算表
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
interface SubjectAdjustInterface
{

    /**
     * 根据结算日期跟科目代码，获取会计科目日核算记录
     *
     * @param string $workDate 结算日期：格式YYYYMMDD
     * @param string $subjectCode 科目代码
     * @return SubjectAdjustDTO
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since  2017-11-09
     */
    public function getSubjectAdjust(string $workDate, string $subjectCode): SubjectAdjustDTO;

    /**
     * 添加一条会计科目日核算记录
     *
     * @param array $data 会计科目日核算记录数据
     * @param string $data['workDate'] 结算日期：格式YYYYMMDD
     * @param string $data['subjectCode'] 科目代码
     * @param int $data['subjectMoney'] 科目资金发生额：科目贷方金额减去借方金额
     * @param int $data['accountMoney'] 帐户变动流水发生额
     * @param int $data['balanceStatus'] 比较结果：0 未比较 1 平衡 2 不平衡
     * @param string $data['remark'] 备注
     * @return bool
     *
     * @requestExample({"data":{"workDate":"20171109","subjectCode":"dd","subjectMoney":20,"accountMoney":10,"balanceStatus":1,"remark":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     * @since  2017-11-09
     */
    public function addSubjectAdjust(array $data): bool;
    
    /**
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     */
    public function deleteSubjectAdjust(int $subjectAdjustId): bool;

    /**
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     */
    public function listSubjectAdjustPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}