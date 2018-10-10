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

namespace Eelly\SDK\Order\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Order\Service\ArbitrateInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Arbitrate implements ArbitrateInterface
{
    /**
     * 添加订单仲裁记录
     *
     * @param array $data 订单仲裁数据
     * @param int $data["orderId"] 订单id
     * @param int $data["applyFlag"] 仲裁申请标志：1 买家申请 2 卖家申请
     * @param string $data["phone"] 仲裁申请联系电话
     * @param string $data["qq"] 仲裁申请联系QQ
     * @param string $data["wechat"] 仲裁申请联系微信号
     * @param int $data["buyerNumber"] 买家申请仲裁次数
     * @param int $data["sellerNumber"] 卖家申请仲裁次数
     * @param array $data["certificate"] 仲裁申请凭证
     * @return bool
     *
     * @requestExample({"data":{"orderId":116,"applyFlag":1,"phone":"13430245645","qq":"","wechat":"","buyerNumber":1,"sellerNumber":0,"certificate":{}}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.14
     */
    public function addOrderArbitrate(array $data): bool
    {
        return EellyClient::request('order/arbitrate', 'addOrderArbitrate', true, $data);
    }

    /**
     * 添加订单仲裁记录
     *
     * @param array $data 订单仲裁数据
     * @param int $data["orderId"] 订单id
     * @param int $data["applyFlag"] 仲裁申请标志：1 买家申请 2 卖家申请
     * @param string $data["phone"] 仲裁申请联系电话
     * @param string $data["qq"] 仲裁申请联系QQ
     * @param string $data["wechat"] 仲裁申请联系微信号
     * @param int $data["buyerNumber"] 买家申请仲裁次数
     * @param int $data["sellerNumber"] 卖家申请仲裁次数
     * @param array $data["certificate"] 仲裁申请凭证
     * @return bool
     *
     * @requestExample({"data":{"orderId":116,"applyFlag":1,"phone":"13430245645","qq":"","wechat":"","buyerNumber":1,"sellerNumber":0,"certificate":{}}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.09.14
     */
    public function addOrderArbitrateAsync(array $data)
    {
        return EellyClient::request('order/arbitrate', 'addOrderArbitrate', false, $data);
    }

    /**
     * 仲裁跟进
     * 
     * > params 请求数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * adminId | int | 管理员id
     * adminName | string | 管理员姓名
     * 
     * @param integer $orderId 订单id
     * @param array $params 所需数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.30
     */
    public function follow(int $orderId, array $params): bool
    {
        return EellyClient::request('order/arbitrate', 'follow', true, $orderId, $params);
    }

    /**
     * 仲裁跟进
     * 
     * > params 请求数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * adminId | int | 管理员id
     * adminName | string | 管理员姓名
     * 
     * @param integer $orderId 订单id
     * @param array $params 所需数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.30
     */
    public function followAsync(int $orderId, array $params)
    {
        return EellyClient::request('order/arbitrate', 'follow', false, $orderId, $params);
    }

    /**
     * 处理仲裁
     *
     * > params 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * adminId | int | 管理员id
     * adminName | string | 管理员姓名
     * handleType | int | 仲裁类型 1 全部退给买家 2 全部退给卖家 3 部分退给买家
     * handleFlag | int | 仲裁标记 0 其他 1 发货存在问题 2 包裹拒收 3 邮费争议 4 无理由退货 5 质量问题退货 6 退货存在问题 7 平台问题
     * handleRemark | string | 仲裁操作备注
     * blameFlag | int | 责任标记 1 卖家 2 买家 3 双方责任 4 其他原因
     * blameRemark | string | 责任备注
     * returnAmount | int | 退款金额(全额则订单全款)
     * freight | int | 退款运费
     * 
     * @param integer $orderId 订单id
     * @param array $params 所需数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.30
     */
    public function handleArbitrate(int $orderId, array $params): bool
    {
        return EellyClient::request('order/arbitrate', 'handleArbitrate', true, $orderId, $params);
    }

    /**
     * 处理仲裁
     *
     * > params 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * adminId | int | 管理员id
     * adminName | string | 管理员姓名
     * handleType | int | 仲裁类型 1 全部退给买家 2 全部退给卖家 3 部分退给买家
     * handleFlag | int | 仲裁标记 0 其他 1 发货存在问题 2 包裹拒收 3 邮费争议 4 无理由退货 5 质量问题退货 6 退货存在问题 7 平台问题
     * handleRemark | string | 仲裁操作备注
     * blameFlag | int | 责任标记 1 卖家 2 买家 3 双方责任 4 其他原因
     * blameRemark | string | 责任备注
     * returnAmount | int | 退款金额(全额则订单全款)
     * freight | int | 退款运费
     * 
     * @param integer $orderId 订单id
     * @param array $params 所需数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2018.9.30
     */
    public function handleArbitrateAsync(int $orderId, array $params)
    {
        return EellyClient::request('order/arbitrate', 'handleArbitrate', false, $orderId, $params);
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