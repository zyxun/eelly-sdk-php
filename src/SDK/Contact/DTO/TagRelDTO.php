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

/**
 * 标签名称.
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 *
 * @since  2017年10月12日
 */
class TagRelDTO extends AbstractDTO
{
    /**
     * 联系人标签关系ID，自增主键.
     *
     * @var int
     */
    public $ctrId;
    /**
     * 联系人ID.
     *
     * @var int
     */
    public $contactId;

    /**
     * 联系人标签表：标签名称.
     *
     * @var int
     */
    public $name;
}
