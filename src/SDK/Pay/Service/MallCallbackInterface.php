<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Pay\Service;

/**
 * 支付交易流水接口
 * @author eellytools<localhost.shell@gmail.com>
 */
interface MallCallbackInterface
{
    /**
     * 添加 第三方支付成功的回调记录.
     *
     * @param array $data
     * @param int   $data['billNo']  交易号
     * @param int   $data['channel'] 支付渠道：1 支付宝 2 微信钱包 3 QQ钱包 4 银联 5 移动支付
     * @param int   $data['money']   金额：单位为分
     * @param int   $data['content'] 回调内容
     * @param int   $data['remark']  备注
     *
     * @throws LogicException
     *
     * @return bool
     * @requestExample({"data":{"billNo":"001","channel":1,"money":100,"content":"测试写入","remark":""}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since  2017年11月9日
     */
    public function addCallback(array $data): bool;

    /**
     * 更新支付状态.
     *
     * @param string $billNo 支付ID
     * @return bool
     * @requestExample({"billNo":"5ab0c5dff2509Vtk"})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年03月21日
     */
    public function updateStatus(string $billNo): bool;

    /**
     * 获取支付回调中没有更新成功的数据.
     *
     * @param int $status 状态
     * @param array $billNoArr billNo数组
     * @return array
     * @requestExample({"5ab0c5dff2509Vtk":{"pcId":{"$oid":"5ab31014ea8b1c001a4ffcea"},"billNo":"5ab0c5dff2509Vtk","channel":"1","money":1,"content":{"outTradeNo":"5ab0c5dff2509Vtk","tradeNo":"2018032021001004800533817981","totalFee":"0.01","buyerEmail":"228***@qq.com","payType":"alipay_app","channel":"1"},"remark":"","createdTime":{"$date":{"$numberLong":"1521684500218"}},"updateTime":{"$date":{"$numberLong":"1521684673791"}},"status":0,"_id":{"$oid":"5ab31014ea8b1c001a4ffceb"}}})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年03月22日
     */
    public function getCallBackList(int $status = 0, array $billNoArr = []): array;
}