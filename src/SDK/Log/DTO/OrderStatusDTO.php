<?php
declare(strict_types=1);
/**
 * PHP version 7.1
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Log\DTO;


use Eelly\DTO\AbstractDTO;

/**
 * 订单状态变更记录TDO
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since  2017年09月11日
 * @version 1.0
 */
class OrderStatusDTO extends AbstractDTO
{
    /**
     * 订单状态变更ID，自增主键
     *
     * @var int
     */
    public $losId;

    /**
     * 订单ID
     *
     * @var int
     */
    public $orderId;

    /**
     * 原状态ID
     *
     * @var int
     */
    public $fromOsId;

    /**
     * 新状态ID
     *
     * @var int
     */
    public $toOsId;

    /**
     * 操作人ID：0 系统操作，买家为user_id，卖家为store_id
     *
     * @var int
     */
    public $handleId;

    /**
     * (冗余)操作人
     *
     * @var string
     */
    public $handleName;

    /**
     * 操作IP
     *
     * @var string
     */
    public $userIp;

    /**
     * 添加时间
     *
     * @var int
     */
    public $createdTime;
}