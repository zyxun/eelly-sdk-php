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

class ContractUserDTO extends AbstractDTO
{

    /**
     * 合同购买记录id
     *
     * @var int
     */
    public $scuId;

    /**
     * 店铺id
     *
     * @var int
     */
    public $storeId;

    /**
     * 乙方名称，默认取用户姓名、帐号
     *
     * @var string
     */
    public $partyBName;

    /**
     * 乙方地址，默认取user_extend表用户地址
     *
     * @var string
     */
    public $partyBAddress;

    /**
     * 乙方联系电话，默认取用户绑定手机号
     *
     * @var string
     */
    public $partyBPhone;

    /**
     * 合同版本名称
     *
     * @var string
     */
    public $name;

    /**
     * 合同期限：表示N个月，大于0
     *
     * @var int
     */
    public $timeLimit;

    /**
     * 收费金额，单位为分
     *
     * @var int
     */
    public $money;

    /**
     * 折扣：0<=X<=1，0和1都表示无折扣
     *
     * @var string
     */
    public $discount;

    /**
     * 服务集合：格式 sl_id,sl_id
     *
     * @var string
     */
    public $serviceIds;

    /**
     * 合同编号前缀
     *
     * @var string
     */
    public $versionNo;

    /**
     * 合同编号
     *
     * @var string
     */
    public $number;

    /**
     * 合同开始时间
     *
     * @var int
     */
    public $startTime;

    /**
     * 合同结束时间
     *
     * @var int
     */
    public $endTime;

    /**
     * 合同付款时间
     *
     * @var int
     */
    public $payTime;

    /**
     * 合同状态：1 正常 2 暂停（合同时间继续） 4 终止（合同失效）
     *
     * @var int
     */
    public $status;

    /**
     * 支付类型：1 储蓄卡 2 信用卡 3支付宝余额 4 微信 5 银联 6 微信扫一扫 7 现金
     *
     * @var int
     */
    public $payType;

    /**
     * 支付方式：0 银行汇款 1 支付宝 2 财付通 3 网银 4 联付宝 5 手机支付 6 快捷支付 7 衣联通充值 8 流量宝充值 9 广告系统充值 10 银联 11 支付宝扫一扫 12 信誉卡支付 13 线下支付
     *
     * @var int
     */
    public $payStyle;

    /**
     * 创建时间
     *
     * @var int
     */
    public $createdTime;

}
