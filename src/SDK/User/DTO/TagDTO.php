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

namespace Eelly\SDK\User\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * TagDTO.
 *
 * @author zhangzeqiang<zhangzeqiang@eelly.net>
 */
class TagDTO extends AbstractDTO
{

    /**
     * 用户标签ID，自增主键.
     *
     * @var int
     */
    public $utId;

    /**
     * 用户ID.
     *
     * @var int
     */
    public $userId;

    /**
     * 标签类型：1 用户身份 2 进货类目 3 进货风格 4 进货档次 5 进货商圈，可扩展
     *
     * @var int
     */
    public $type;

    /**
     * 关联ID
     *
     * @var int
     */
    public $itemId;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;

    /**
     * 修改时间.
     *
     * @var unknown
     */
    public $updateTime;
}
