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
 * GradeDTO.
 *
 * @author zhangzeqiang<zhangzeqiang@eelly.net>
 */
class GradeDTO extends AbstractDTO
{
    /**
     * 等级ID，自增主键.
     *
     * @var int
     */
    public $ugId;

    /**
     * 等级名称.
     *
     * @var string
     */
    public $name;

    /**
     * 等级对应分数.
     *
     * @var int
     */
    public $score;

    /**
     * 等级对应的特权.
     *
     * @var string
     */
    public $privilege;

    /**
     * 等级状态：0 有效 4 删除.
     *
     * @var int
     */
    public $status;

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
