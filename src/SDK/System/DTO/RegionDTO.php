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

namespace Eelly\SDK\System\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * Class GbDTO.
 */
class RegionDTO extends AbstractDTO
{
    /**
     * 区域国标编码
     *
     * @var int
     */
    public $gbCode;

    /**
     * 区域名称.
     *
     * @var string
     */
    public $areaName;

    /**
     * 区域简称.
     *
     * @var string
     */
    public $shortName;

    /**
     * 上级编码
     *
     * @var int
     */
    public $parentCode;

    /**
     * 电话区号.
     *
     * @var string
     */
    public $telCode;

    /**
     * 邮政编码
     *
     * @var int
     */
    public $zipCode;

    /**
     * 区域所属片区.
     *
     * @var int
     */
    public $regionCode;
}
