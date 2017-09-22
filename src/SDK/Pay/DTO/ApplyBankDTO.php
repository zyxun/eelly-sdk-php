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

/**
 * 发起交易申请银行信息.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since   2017年09月21日
 * @version 1.0
 */
class ApplyBankDTO extends AbstractDTO
{
    /**
     * 用户银行信息ID，自增主键
     *
     * @var int
     */
    public $pbId;

    /**
     * 用户ID
     *
     * @var int
     */
    public $userId;

    /**
     * 开户银行所在地区ID
     *
     * @var int
     */
    public $gbCode;

    /**
     * 开户银行ID：el_config->bank->bank_id
     *
     * @var int
     */
    public $bankId;

    /**
     * 支行名称
     *
     * @var string
     */
    public $bankSubbranch;

    /**
     * 银行账号
     *
     * @var string
     */
    public $bankAccount;

    /**
     * 真实姓名
     *
     * @var string
     */
    public $realName;

    /**
     * 手机号
     *
     * @var string
     */
    public $phone;

    /**
     * 是否默认使用此卡：0 否 1 是
     *
     * @var int
     */
    public $isDefault;

    /**
     * 添加时间
     *
     * @var int
     */
    public $createdTime;

}