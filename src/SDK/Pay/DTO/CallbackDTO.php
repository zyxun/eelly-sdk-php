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

namespace Eelly\SDK\Pay\DTO;

use Eelly\DTO\AbstractDTO;

class CallbackDTO extends AbstractDTO
{
    /**
     * 支付回调ID，自增主键
     * @var
     */
    public $pcId;

    /**
     * 交易号
     * @var
     */
    public $billNo;

    /**
     * 支付渠道：1 支付宝 2 微信钱包 3 QQ钱包 4 银联 5 移动支付
     * @var
     */
    public $channel;

    /**
     * 金额：单位为分
     * @var
     */
    public $money;

    /**
     * 回调内容
     * @var
     */
    public $content;

    /**
     * 备注
     * @var
     */
    public $remark;

    /**
     * 添加时间
     * @var
     */
    public $createdTime;
}