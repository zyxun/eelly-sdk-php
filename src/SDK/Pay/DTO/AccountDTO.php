<?php
declare(strict_types=1);
/**
 * PHP version 7.1+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Pay\DTO;


use Eelly\DTO\AbstractDTO;

class AccountDTO extends AbstractDTO
{
    /**
     * 账户ID，自增主键
     *
     * @var int
     */
    public $paId;

    /**
     * 用户ID：0 平台系统帐户
     *
     * @var int
     */
    public $userId;

    /**
     * 店铺ID：0 买家帐户
     *
     * @var int
     */
    public $storeId;

    /**
     * 账户金额
     *
     * @var float
     */
    public $money;

    /**
     * 提现手续费率
     *
     * @var float
     */
    public $commissionRatio;

    /**
     * 状态：0 正常 1 风险监控 2 冻结提现 4 冻结支付
     *
     * @var int
     */
    public $status;

    /**
     * 支付宝账号
     *
     * @var string
     */
    public $alipayAccount;

    /**
     * 微信钱包绑定的微信账户open_id
     *
     * @var string
     */
    public $wechatPurseOpenId;


    /**
     * 添加时间
     *
     * @var int
     */
    public $createdTime;


    /**
     * 表名
     *
     * @var string
     */
    protected $tableName = 'pay_account';
}