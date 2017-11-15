<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Pay\DTO;


use Eelly\DTO\AbstractDTO;

/**
 * AccountLogDTO.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  2017年11月14日
 */
class AccountLogDTO extends AbstractDTO
{
    /**
     * 会员账户资金变更ID，自增主键
     *
     * @var int
     */
    public $palId;

    /**
     * 会员帐户ID
     *
     * @var int
     */
    public $paId;

    /**
     * 交易ID
     *
     * @var int
     */
    public $prId;

    /**
     * 变动前余额：单位为分
     *
     * @var int
     */
    public $moneyBefore;

    /**
     * 变动金额：单位为分
     *
     * @var int
     */
    public $moneyChange;

    /**
     * 变动后余额：单位为分
     *
     * @var int
     */
    public $moneyAfter;

    /**
     * 备注
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
}