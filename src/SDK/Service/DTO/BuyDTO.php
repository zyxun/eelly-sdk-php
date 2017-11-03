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

namespace Eelly\SDK\Service\DTO;

use Eelly\DTO\AbstractDTO;

class BuyDTO extends AbstractDTO
{
    /**
     * 用户服务购买ID.
     *
     * @var int
     */
    public $sbId;

    /**
     * 用户ID.
     *
     * @var int
     */
    public $userId;

    /**
     * 店铺ID.
     *
     * @var int
     */
    public $storeId;

    /**
     * 服务清单ID.
     *
     * @var int
     */
    public $slId;

    /**
     * 服务名称.
     *
     * @var string
     */
    public $name;

    /**
     * 数量设置：对应计数模式的数量，0为无限制.
     *
     * @var int
     */
    public $number;

    /**
     * 收费金额，单位为分.
     *
     * @var int
     */
    public $money;

    /**
     * 折扣：0<=X<=1，0和1都表示无折扣.
     *
     * @var float
     */
    public $discount;

    /**
     * 服务期限：表示N个月.
     *
     * @var int
     */
    public $timeLimit;

    /**
     * 计数模式：1 服务期内 2 每月 4 每日，全部模式：1+2+4=7.
     *
     * @var int
     */
    public $model;

    /**
     * 总使用过的数量（次数）.
     *
     * @var int
     */
    public $usedNumber;

    /**
     * 来源类型：1 购买合同版本 2 购买服务 3 赠送服务
     *
     * @var int
     */
    public $fromType;

    /**
     * 付款来源：1 在线付款 2 线下付款 3 免费赠送
     *
     * @var int
     */
    public $paySource;

    /**
     * ecm_pay_record表主键（待定）.
     *
     * @var int
     */
    public $prId;

    /**
     * 支付类型：1 储蓄卡 2 信用卡 3 支付宝余额 4 微信 5 银联 6 微信扫一扫 7 现金.
     *
     * @var int
     */
    public $payType;

    /**
     * 销售员工ID.
     *
     * @var int
     */
    public $salespersonId;

    /**
     * 服务到期时间.
     *
     * @var int
     */
    public $expireTime;

    /**
     * 备注.
     *
     * @var string
     */
    public $remark;

    /**
     * 创建时间.
     *
     * @var int
     */
    public $createdTime;
}
