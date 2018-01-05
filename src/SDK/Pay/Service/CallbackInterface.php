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

use Eelly\SDK\Pay\DTO\CallbackDTO;


/**
 * 第三方回调接口
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CallbackInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCallback(int $callbackId): CallbackDTO;

    /**
     * 添加 第三方支付回调记录.
     *
     * @param array $data
     * @param int $data['billNo'] 交易号
     * @param int $data['channel'] 支付渠道：1 支付宝 2 微信钱包 3 QQ钱包 4 银联 5 移动支付
     * @param int $data['money'] 金额：单位为分
     * @param int $data['content']  回调内容
     * @param int $data['remark']  备注
     * @throws LogicException
     *
     * @return bool
     * @requestExample({"data":{"billNo":"001","channel":1,"money":100,"content":"测试写入","remark":""}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017年11月9日
     */
    public function addCallback(array $data): bool;

    /**
     * 处理第三方支付回调.
     *
     * @param array  $data
     * @param int    $data['billNo']      衣联交易号
     * @param string $data['thirdNo']     第三方交易号
     * @param int    $data['userId']      用户ID
     * @param int    $data['paId']        会员资金账户ID
     * @param string $data['channelType'] 发起交易类型,如： 1(payment,订单|服务),2(recharge,充值),3(withdraw,提现)
     * @param int    $data['recordType']  操作类型：1 充值 2 提现 3 消费 4 结算 5 退款 6 诚保冻结 7 诚保解冻
     * @param string $data['channel']     1:(支付宝),2:(微信钱包),3(QQ钱包),4(银联),5(移动支付)
     *
     * @throws CallbackException
     *
     * @requestExample({
     *     "data":{
     *          "billNo":"1122",
     *          "thirdNo":"5566",
     *          "userId":"148086",
     *          "paId":"12",
     *          "channelType":"1",
     *          "recordType":"1",
     *          "channel":"1"
     *      }
     * })
     * @returnExample(true)
     *
     * @return bool
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017年11月14日
     */
    public function dealCallback(array $data): bool;

}
