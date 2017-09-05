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

namespace Eelly\SDK\Store\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * ServiceTeamDTO.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
class ServiceTeamDTO extends AbstractDTO
{
    /**
     * 客服组id
     *
     * @var int
     */
    public $teamId;

    /**
     * 分组名称
     *
     * @var string
     */
    public $teamName;

    /**
     * 上班时间
     *
     * @var string
     */
    public $workTime;

    /**
     * 下班时间
     *
     * @var string
     */
    public $closeTime;

    /**
     * 电话号码
     *
     * @var string
     */
    public $phone;

    /**
     * 电话号码状态 0不显示 1显示
     *
     * @var int
     */
    public $phoneStatus;

    /**
     * 创建时间
     *
     * @var string
     */
    public $createdTime;
}