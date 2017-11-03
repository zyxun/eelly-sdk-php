<?php

declare(strict_types=1);

/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\SDK\Contact\DTO;

use Eelly\DTO\AbstractDTO;

class TagDTO extends AbstractDTO
{
    /**
     * 标签ID，自增主键，系统检签ID范围1-1000.
     *
     * @var int
     */
    public $ctId;

    /**
     * 标签所属用户ID：0 系统标签，系统标签面向全部用户.
     *
     * @var int
     */
    public $userId;

    /**
     * 标签名称.
     *
     * @var string
     */
    public $name;

    /**
     * 系统来源：1 APP厂+ 2 APP店+ 3 CRM 4 APP云店 （这个字段有存在必要吗？）.
     *
     * @var int
     */
    public $source;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;
}
