<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Log\DTO;


use Eelly\DTO\AbstractDTO;

/**
 * PayAccountDTO.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  2017年11月15日
 */
class PayAccountDTO extends AbstractDTO
{
    /**
     * 支付帐户操作日志ID，自增主键
     *
     * @var int
     */
    public $lpaId;

    /**
     * 支付帐户ID
     *
     * @var int
     */
    public $paId;

    /**
     * 状态：0 正常 1 风险监控 2 冻结提现 4 冻结支付
     *
     * @var int
     */
    public $fromStatus;

    /**
     * 状态：0 正常 1 风险监控 2 冻结提现 4 冻结支付
     *
     * @var int
     */
    public $toStatus;

    /**
     * 管理员ID
     *
     * @var int
     */
    public $adminId;

    /**
     * 管理员名称
     *
     * @var string
     */
    public $adminName;

    /**
     * 操作备注
     *
     * @var string
     */
    public $remark;

    /**
     * 创建时间
     *
     * @var int
     */
    public $createdTime;

    /**
     * 最后更新时间
     *
     * @var string
     */
    public $updateTime;
}