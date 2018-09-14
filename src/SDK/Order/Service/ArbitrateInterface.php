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

namespace Eelly\SDK\Order\Service;

/**
 * 订单仲裁
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
interface ArbitrateInterface
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
    public function addOrderArbitrate(array $data):bool;
}
