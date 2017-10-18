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

class GradeChangeDTO extends AbstractDTO
{
    /**
     * 联系人等级变更ID，自增主键.
     *
     * @var int
     */
    public $cgcId;

    /**
     * 联系人ID.
     *
     * @var int
     */
    public $contactId;

    /**
     * 原等级ID.
     *
     * @var int
     */
    public $fromCgId;

    /**
     * 新等级ID.
     *
     * @var int
     */
    public $toCgId;

    /**
     * 备注.
     *
     * @var string
     */
    public $remark;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;
}