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
use Eelly\SDK\Pay\Service\SubjectAdjustInterface;
use Eelly\SDK\Pay\DTO\SubjectAdjustDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class SubjectAdjust implements SubjectAdjustInterface
{
    /**
     * 根据结算日期跟科目代码，获取会计科目日核算记录
     *
     * @param string $subjectCode 科目代码
     * @param string $workDate 结算日期：格式YYYYMMDD
     * @return SubjectAdjustDTO
     *
     * @requestExample({"workDate":"20171109","subjectCode":"eellyPay"})
     * @returnExample({"workDate":"20171109","subjectCode":"eellyPay","subjectMoney":20,"accountMoney":10,"balanceStatus":1,"remark":"","createdTime":135234565})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since  2017-11-20
     */
    public function getSubjectAdjust(string $subjectCode, string $workDate): SubjectAdjustDTO
    {
        return EellyClient::request('pay/subjectAdjust', __FUNCTION__, true, $subjectCode, $workDate);
    }

    /**
     * 根据结算日期跟科目代码，获取会计科目日核算记录
     *
     * @param string $subjectCode 科目代码
     * @param string $workDate 结算日期：格式YYYYMMDD
     * @return SubjectAdjustDTO
     *
     * @requestExample({"workDate":"20171109","subjectCode":"eellyPay"})
     * @returnExample({"workDate":"20171109","subjectCode":"eellyPay","subjectMoney":20,"accountMoney":10,"balanceStatus":1,"remark":"","createdTime":135234565})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since  2017-11-20
     */
    public function getSubjectAdjustAsync(string $subjectCode, string $workDate)
    {
        return EellyClient::request('pay/subjectAdjust', __FUNCTION__, false, $subjectCode, $workDate);
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