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
 * ScoreDTO.
 *
 * @author zhangzeqiang<zhangzeqiang@eelly.net>
 */
class ScoreDTO extends AbstractDTO
{
    /**
     * 用户.
     *
     * @var int
     */
    public $userId;

    /**
     * 总积分.
     *
     * @var int
     */
    public $totalScore;

    /**
     * 使用积分.
     *
     * @var int
     */
    public $usedScore;

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
