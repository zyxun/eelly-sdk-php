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
