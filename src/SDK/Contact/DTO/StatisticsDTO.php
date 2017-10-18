<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Contact\DTO;


use Eelly\DTO\AbstractDTO;

class StatisticsDTO extends AbstractDTO
{
    /**
     * 联系人ID，自增主键.
     *
     * @var int
     */
    public $contactId;

    /**
     * 统计类型：0 线上 1 线下(这个字段是否有必要？？).
     *
     * @var int
     */
    public $type;

    /**
     * 交易金额，单位为分.
     *
     * @var int
     */
    public $money;

    /**
     * 交易件数.
     *
     * @var int
     */
    public $quantity;

    /**
     * 交易次数.
     *
     * @var int
     */
    public $times;

    /**
     * 最近一次交易时间：增加线上线下订单时更新该字段.
     *
     * @var int
     */
    public $lastPayTime;

    /**
     * 最近一次更新时间：统计完成后更新该字段.
     *
     * @var int
     */
    public $lastUpdateTime;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;
}