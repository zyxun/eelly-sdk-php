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
use Eelly\SDK\Pay\Service\VoucherTypeInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class VoucherType implements VoucherTypeInterface
{
    /**
     * 获取一条科目类型信息
     * 
     * @return array
     * 
     * @param string $voucherCode
     * 
     * @requestExample({"voucherCode":"110"})
     * @returnExample({"voucherCode":"101","voucherName":"充值凭证","refDb":"","refTable":"","refField":"","createdTime":"1508466305","updateTime":"2017-10-20 10:26:00"})
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月14日
     * 
     */
    public function getOneVoucherType(string $voucherCode): array
    {
        return EellyClient::request('pay/vouchertype', __FUNCTION__, true, $voucherCode);
    }

    /**
     * 获取一条科目类型信息
     * 
     * @return array
     * 
     * @param string $voucherCode
     * 
     * @requestExample({"voucherCode":"110"})
     * @returnExample({"voucherCode":"101","voucherName":"充值凭证","refDb":"","refTable":"","refField":"","createdTime":"1508466305","updateTime":"2017-10-20 10:26:00"})
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月14日
     * 
     */
    public function getOneVoucherTypeAsync(string $voucherCode)
    {
        return EellyClient::request('pay/vouchertype', __FUNCTION__, false, $voucherCode);
    }

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
     * @requestExample({"data":{"voucherCode":101,"voucherName":"xx凭证","refDb":"pay","refDable":"pay_record","refField":"pr_id"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月14日
     */
    public function addVoucherType(array $data): bool
    {
        return EellyClient::request('pay/vouchertype', __FUNCTION__, true, $data);
    }

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
     * @requestExample({"data":{"voucherCode":101,"voucherName":"xx凭证","refDb":"pay","refDable":"pay_record","refField":"pr_id"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月14日
     */
    public function addVoucherTypeAsync(array $data)
    {
        return EellyClient::request('pay/vouchertype', __FUNCTION__, false, $data);
    }

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
     * @requestExample({"voucherCode":101,"data":{"voucherName":"xx凭证","refDb":"pay","refDable":"pay_record","refField":"pr_id"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月14日
     */
    public function updateVoucherType(string $voucherCode, array $data): bool
    {
        return EellyClient::request('pay/vouchertype', __FUNCTION__, true, $voucherCode, $data);
    }

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
     * @requestExample({"voucherCode":101,"data":{"voucherName":"xx凭证","refDb":"pay","refDable":"pay_record","refField":"pr_id"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月14日
     */
    public function updateVoucherTypeAsync(string $voucherCode, array $data)
    {
        return EellyClient::request('pay/vouchertype', __FUNCTION__, false, $voucherCode, $data);
    }

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
     * @requestExample({"voucherCode":101})
     * @returnExample(true)
     * 
     */
    public function deleteVoucherType(string $voucherCode): bool
    {
        return EellyClient::request('pay/vouchertype', __FUNCTION__, true, $voucherCode);
    }

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
     * @requestExample({"voucherCode":101})
     * @returnExample(true)
     * 
     */
    public function deleteVoucherTypeAsync(string $voucherCode)
    {
        return EellyClient::request('pay/vouchertype', __FUNCTION__, false, $voucherCode);
    }

    /**
     * 获取所有的凭证类型
     * 
     * @return array
     * 
     * @param $data array 请求参数
     * @param int $data['currentPage'] 当前页面
     * @param int $data['limit'] 每页数量
     * 
     * @requestExample({"data":{"currentPage":"1","limit":"100"}})
     * @returnExample([{"voucherCode":"101","voucherName":"充值凭证","refDb":"","refTable":"","refField":"","createdTime":"1508466305"}])
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月14日
     */
    public function getVoucherTypeList(array $data): array
    {
        return EellyClient::request('pay/vouchertype', __FUNCTION__, true, $data);
    }

    /**
     * 获取所有的凭证类型
     * 
     * @return array
     * 
     * @param $data array 请求参数
     * @param int $data['currentPage'] 当前页面
     * @param int $data['limit'] 每页数量
     * 
     * @requestExample({"data":{"currentPage":"1","limit":"100"}})
     * @returnExample([{"voucherCode":"101","voucherName":"充值凭证","refDb":"","refTable":"","refField":"","createdTime":"1508466305"}])
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月14日
     */
    public function getVoucherTypeListAsync(array $data)
    {
        return EellyClient::request('pay/vouchertype', __FUNCTION__, false, $data);
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