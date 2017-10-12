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

class TagDTO extends AbstractDTO
{
    /**
     * 标签ID，自增主键，系统检签ID范围1-1000
     *
     * @var int
     */
    public $ctId;

    /**
     * 标签所属用户ID：0 系统标签，系统标签面向全部用户
     *
     * @var int
     */
    public $userId;

    /**
     * 标签名称
     *
     * @var string
     */
    public $name;

    /**
     * 系统来源：1 APP厂+ 2 APP店+ 3 CRM 4 APP云店 （这个字段有存在必要吗？）
     *
     * @var int
     */
    public $source;

    /**
     * 添加时间
     *
     * @var int
     */
    public $createdTime;
}