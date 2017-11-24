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
use Eelly\SDK\Pay\Service\VoucherSubjectInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class VoucherSubject implements VoucherSubjectInterface
{
    /**
     * 获取一条凭证科目信息
     * 
     * @param string $voucherCode
     * 
     * @requestExample({"voucherCode":"110"})
     * @returnExample({"voucherCode":"101","subjectCodeDebit":"1300102","subjectCodeCredit":"310","remark":"测试清算","createdTime":"1508466305","updateTime":"2017-11-20 16:59:11"})
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月15日
     * 
     * @Validation(
     *    @PresenceOf(0,{message : "非法的凭证代码"}),
     * )
     */
    public function getVoucherSubject(string $voucherCode)
    {
        return EellyClient::request('pay/voucherSubject', __FUNCTION__, true, $voucherCode);
    }

    /**
     * 获取一条凭证科目信息
     * 
     * @param string $voucherCode
     * 
     * @requestExample({"voucherCode":"110"})
     * @returnExample({"voucherCode":"101","subjectCodeDebit":"1300102","subjectCodeCredit":"310","remark":"测试清算","createdTime":"1508466305","updateTime":"2017-11-20 16:59:11"})
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月15日
     * 
     * @Validation(
     *    @PresenceOf(0,{message : "非法的凭证代码"}),
     * )
     */
    public function getVoucherSubjectAsync(string $voucherCode)
    {
        return EellyClient::request('pay/voucherSubject', __FUNCTION__, false, $voucherCode);
    }

    /**
     * 添加凭证科目对应信息
     * 
     * @return bool
     * 
     * @param array $data 请求参数
     * @param string $data['voucherCode'] 凭证代码
     * @param string $data['subjectCodeDebit'] 记借方科目代码
     * @param string $data['subjectCodeCredit'] 记贷方科目代码
     * @param string $data['remark'] 备注
     * 
     * @requestExample({"data":{"voucherCode":"101","subjectCodeDebit":"1300102","subjectCodeCredit":"1300102","remark":"123"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月15日
     */
    public function addVoucherSubject(array $data): bool
    {
        return EellyClient::request('pay/voucherSubject', __FUNCTION__, true, $data);
    }

    /**
     * 添加凭证科目对应信息
     * 
     * @return bool
     * 
     * @param array $data 请求参数
     * @param string $data['voucherCode'] 凭证代码
     * @param string $data['subjectCodeDebit'] 记借方科目代码
     * @param string $data['subjectCodeCredit'] 记贷方科目代码
     * @param string $data['remark'] 备注
     * 
     * @requestExample({"data":{"voucherCode":"101","subjectCodeDebit":"1300102","subjectCodeCredit":"1300102","remark":"123"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月15日
     */
    public function addVoucherSubjectAsync(array $data)
    {
        return EellyClient::request('pay/voucherSubject', __FUNCTION__, false, $data);
    }

    /**
     * 更新凭证科目信息
     * 
     * @param string $voucherCode 凭证代码
     * @param array $data 请求参数
     * @param string $data['subjectCodeDebit'] 记借方科目代码
     * @param string $data['subjectCodeCredit'] 记借方科目代码
     * @param string $data['remark'] 备注
     * 
     * @requestExample({"$voucherCode":"120","data":{"subjectCodeDebit":"1234", "subjectCodeCredit":"1234", "remark":"1234"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月15日
     */
    public function updateVoucherSubject(string $voucherCode, array $data): bool
    {
        return EellyClient::request('pay/voucherSubject', __FUNCTION__, true, $voucherCode, $data);
    }

    /**
     * 更新凭证科目信息
     * 
     * @param string $voucherCode 凭证代码
     * @param array $data 请求参数
     * @param string $data['subjectCodeDebit'] 记借方科目代码
     * @param string $data['subjectCodeCredit'] 记借方科目代码
     * @param string $data['remark'] 备注
     * 
     * @requestExample({"$voucherCode":"120","data":{"subjectCodeDebit":"1234", "subjectCodeCredit":"1234", "remark":"1234"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月15日
     */
    public function updateVoucherSubjectAsync(string $voucherCode, array $data)
    {
        return EellyClient::request('pay/voucherSubject', __FUNCTION__, false, $voucherCode, $data);
    }

    /**
     * 删除一条凭证科目信息
     * 
     * @return bool
     * 
     * @param $voucherCode 凭证代码
     * 
     * @requestExample({"voucherCode":"120"})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月15日
     */
    public function deleteVoucherSubject(string $voucherCode): bool
    {
        return EellyClient::request('pay/voucherSubject', __FUNCTION__, true, $voucherCode);
    }

    /**
     * 删除一条凭证科目信息
     * 
     * @return bool
     * 
     * @param $voucherCode 凭证代码
     * 
     * @requestExample({"voucherCode":"120"})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月15日
     */
    public function deleteVoucherSubjectAsync(string $voucherCode)
    {
        return EellyClient::request('pay/voucherSubject', __FUNCTION__, false, $voucherCode);
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