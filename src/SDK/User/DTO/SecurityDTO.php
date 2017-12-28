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

class SecurityDTO extends AbstractDTO
{
    /**
     * 密保ID，自增主键.
     *
     * @var int
     */
    public $usId;

    /**
     * 用户ID.
     *
     * @var int
     */
    public $userId;

    /**
     * 密保问题ID，el_config库配置.
     *
     * @var int
     */
    public $questionId;

    /**
     * 密保答案.
     *
     * @var string
     */
    public $answer;

    /**
     * 添加时间.
     *
     * @var int
     */
    public $createdTime;

    /**
     * 修改时间.
     *
     * @var string
     */
    public $updateTime;
}
