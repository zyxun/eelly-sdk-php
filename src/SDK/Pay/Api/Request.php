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
use Eelly\SDK\Pay\Service\RequestInterface;
use Eelly\SDK\Pay\DTO\RequestDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Request implements RequestInterface
{
    /**
     * 获取 一条数据.
     *
     * @param string $billNo    衣联交易号
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------------------------------|-------|--------------
     * billNo                              |string |    衣联交易号
     * channel                             |int    |    支付渠道：1 支付宝 2 微信钱包 3 QQ钱包 4 银联 5 移动支付
     * money                               |int    |    金额：单位为分
     * content                             |string |    请求内容
     * remark                              |string |    备注
     * createdTime                         |array  |    添加时间
     * updateTime                          |null   |    更新时间
     * preqId                              |null   |    支付请求ID
     * Id                                  |array  |
     * Id["$oid"]                          |string |    mongoId
     *
     *
     * @throws LogicException
     *
     * @return RequestDTO
     * @requestExample({"billNo":"1122"})
     * @returnExample({"billNo":"00002","channel":1,"money":100,"content":"测试002","remark":"","createdTime":{"$date":{"$numberLong":"1510278148435"}},"updateTime":null,"preqId":null,"Id":{"$oid":"5a05040497e143001d4c7353"}})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月10日
     */
    public function getRequest(string $billNo): RequestDTO
    {
        return EellyClient::request('pay/request', 'getRequest', true, $billNo);
    }

    /**
     * 获取 一条数据.
     *
     * @param string $billNo    衣联交易号
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------------------------------|-------|--------------
     * billNo                              |string |    衣联交易号
     * channel                             |int    |    支付渠道：1 支付宝 2 微信钱包 3 QQ钱包 4 银联 5 移动支付
     * money                               |int    |    金额：单位为分
     * content                             |string |    请求内容
     * remark                              |string |    备注
     * createdTime                         |array  |    添加时间
     * updateTime                          |null   |    更新时间
     * preqId                              |null   |    支付请求ID
     * Id                                  |array  |
     * Id["$oid"]                          |string |    mongoId
     *
     *
     * @throws LogicException
     *
     * @return RequestDTO
     * @requestExample({"billNo":"1122"})
     * @returnExample({"billNo":"00002","channel":1,"money":100,"content":"测试002","remark":"","createdTime":{"$date":{"$numberLong":"1510278148435"}},"updateTime":null,"preqId":null,"Id":{"$oid":"5a05040497e143001d4c7353"}})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月10日
     */
    public function getRequestAsync(string $billNo)
    {
        return EellyClient::request('pay/request', 'getRequest', false, $billNo);
    }

    /**
     * 添加 发起第三方支付数据记录.
     *
     * @param array $data
     * @param string $data['billNo']    衣联交易号
     * @param string $data['channel']   支付渠道：1 支付宝 2 微信钱包 3 QQ钱包 4 银联 5 移动支付
     * @param string $data['money']     金额：单位为分
     * @param string $data['content']   请求内容
     * @param string $data['remark']    备注
     * @throws LogicException
     *
     * @return bool
     * @requestExample({"data":{"billNo":"001","channel":1,"money":100,"content":"第三方支付请求前测试写入","remark":""}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017年11月9日
     */
    public function addRequest(array $data): bool
    {
        return EellyClient::request('pay/request', 'addRequest', true, $data);
    }

    /**
     * 添加 发起第三方支付数据记录.
     *
     * @param array $data
     * @param string $data['billNo']    衣联交易号
     * @param string $data['channel']   支付渠道：1 支付宝 2 微信钱包 3 QQ钱包 4 银联 5 移动支付
     * @param string $data['money']     金额：单位为分
     * @param string $data['content']   请求内容
     * @param string $data['remark']    备注
     * @throws LogicException
     *
     * @return bool
     * @requestExample({"data":{"billNo":"001","channel":1,"money":100,"content":"第三方支付请求前测试写入","remark":""}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017年11月9日
     */
    public function addRequestAsync(array $data)
    {
        return EellyClient::request('pay/request', 'addRequest', false, $data);
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