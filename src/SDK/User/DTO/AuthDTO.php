<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\User\DTO;


use Eelly\DTO\AbstractDTO;

/**
 * AuthDTO.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  2017年11月02日
 */
class AuthDTO extends AbstractDTO
{
    /**
     * 用户ID.
     *
     * @var int
     */
    public $userId;

    /**
     * 认证类型：0 个人实名认证 1 企业实名认证.
     *
     * @var int
     */
    public $type;

    /**
     * 真实姓名/企业名称.
     *
     * @var string
     */
    public $name;

    /**
     * 身份证号码/营业执照号.
     *
     * @var
     */
    public $license;

    /**
     * 证件有效期：0 有期限 1 长期.
     *
     * @var
     */
    public $idType;

    /**
     * 证件到期时间.
     *
     * @var
     */
    public $expiryDate;

    /**
     * 开户银行ID：el_system->system_bank->bank_id.
     *
     * @var
     */
    public $bankId;

    /**
     * 开户银行所在地：el_system->system_region->gb_code.
     *
     * @var
     */
    public $gbCode;

    /**
     * 支行名称.
     *
     * @var
     */
    public $bankSubbranch;

    /**
     * 银行账号.
     *
     * @var
     */
    public $bankAccount;

    /**
     * 身份证正面照片/营业执照图片路径.
     *
     * @var
     */
    public $cartPic;

    /**
     * 身份证反面照片.
     *
     * @var
     */
    public $cartReversedPic;

    /**
     * auditTime.
     *
     * @var
     */
    public $auditTime;

    /**
     * status.
     *
     * @var
     */
    public $status;

    /**
     * remark.
     *
     * @var
     */
    public $remark;

    /**
     * createdTime.
     *
     * @var
     */
    public $createdTime;

    /**
     * 修改时间.
     *
     * @var string
     */
    public $updateTime;
}