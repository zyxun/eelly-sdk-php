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

class ServiceListDTO extends AbstractDTO
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
     * 客服号id
     *
     * @var int
     */
    public $listId;

    /**
     * 客服名称
     *
     * @var string
     */
    public $listName;

    /**
     * 号码类型 0/QQ号 1/旺旺 2/企业QQ
     *
     * @var int
     */
    public $listType;

    /**
     * 客服号码
     *
     * @var string
     */
    public $listNumber;

    /**
     * 添加时间
     *
     * @var string
     */
    public $createdTime;
}