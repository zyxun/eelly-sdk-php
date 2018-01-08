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
use Eelly\SDK\Pay\Service\CallbackAdjustInterface;
use Eelly\SDK\Pay\DTO\CallbackAdjustDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class CallbackAdjust implements CallbackAdjustInterface
{
    /**
     * 根据清算流水id，返回对应的详细记录
     *
     * @param int $pcaId 清算流水id
     * @return CallbackAdjustDTO
     *
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     * @requestExample({"pcaId":1})
     * @returnExample({"pcaId":1,"billNo":"eelly123","type":1,"itemId":1,"itemMoney":100,"requestMoney":100,"callbackMoney":100,"recordMoney":100,"recordMoney":100,"changeMoney":100,"status":1,"remark":"","createdTime":1510211720})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2017-11-13
     */
    public function getCallbackAdjust(int $pcaId): CallbackAdjustDTO
    {
        return EellyClient::request('pay/callbackAdjust', 'getCallbackAdjust', true, $pcaId);
    }

    /**
     * 根据清算流水id，返回对应的详细记录
     *
     * @param int $pcaId 清算流水id
     * @return CallbackAdjustDTO
     *
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     * @requestExample({"pcaId":1})
     * @returnExample({"pcaId":1,"billNo":"eelly123","type":1,"itemId":1,"itemMoney":100,"requestMoney":100,"callbackMoney":100,"recordMoney":100,"recordMoney":100,"changeMoney":100,"status":1,"remark":"","createdTime":1510211720})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2017-11-13
     */
    public function getCallbackAdjustAsync(int $pcaId)
    {
        return EellyClient::request('pay/callbackAdjust', 'getCallbackAdjust', false, $pcaId);
    }

    /**
     * 根据传过来的交易号跟操作类型，插入对应的交易清算流水记录
     *
     * @param string $billNo  衣联交易号
     * @param int $type       操作类型：1 充值 2 提现 3 退款
     * @return bool
     *
     * @requestExample({"billNo":"eelly1234", "type":1})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2017-11-14
     */
    public function addCallBackAdjust(string $billNo, int $type): bool
    {
        return EellyClient::request('pay/callbackAdjust', 'addCallBackAdjust', true, $billNo, $type);
    }

    /**
     * 根据传过来的交易号跟操作类型，插入对应的交易清算流水记录
     *
     * @param string $billNo  衣联交易号
     * @param int $type       操作类型：1 充值 2 提现 3 退款
     * @return bool
     *
     * @requestExample({"billNo":"eelly1234", "type":1})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2017-11-14
     */
    public function addCallBackAdjustAsync(string $billNo, int $type)
    {
        return EellyClient::request('pay/callbackAdjust', 'addCallBackAdjust', false, $billNo, $type);
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