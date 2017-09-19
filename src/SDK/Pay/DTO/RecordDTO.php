<?php
/**
 * PHP version 7.1
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Pay\DTO;


use Eelly\DTO\AbstractDTO;

class RecordDTO extends AbstractDTO
{
    /**
     * 资金变动日志ID，自增主键
     *
     * @var int
     */
    public $prId;

    /**
     * 交易申请ID
     *
     * @var int
     */
    public $paId;

    /**
     * 资金来源用户ID：0 系统帐户
     *
     * @var int
     */
    public $fromUserId;

    /**
     * 资金来源店铺ID：0 系统帐户或买家帐户
     *
     * @var int
     */
    public $fromStoreId;

    /**
     * 资金目标用户ID：0 系统帐户
     *
     * @var int
     */
    public $toUserId;

    /**
     * 资金目标店铺ID：0 系统帐户或买家帐户
     *
     * @var int
     */
    public $toStoreId;

    /**
     * 操作类型：1 充值到系统 2 系统到帐户 3 帐户消费 4 消费结算 5 消费退款 6 购买服务 7 服务退款 8 提现到系统(冻结) 9 系统打款
     *
     * @var int
     */
    public $type;

    /**
     * 变动前余额
     *
     * @var int
     */
    public $moneyBefore;

    /**
     * 变动金额
     *
     * @var float
     */
    public $money;

    /**
     * 变动后余额
     *
     * @var float
     */
    public $moneyAfter;

    /**
     * 备注：JSON格式
     *
     * @var string
     */
    public $remark;

    /**
     * 添加时间
     *
     * @var int
     */
    public $createdTime;

    /**
     * 修改时间
     *
     * @var string
     */
    public $updateTime;

    /**
     * 主键
     *
     * @var int
     */
    protected $pk = 'prId';

}