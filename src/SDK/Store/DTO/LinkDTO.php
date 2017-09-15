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
 * LinkDTO.
 *
 * @author zhoujiansheng<zhoujiansheng@eelly.net>
 */
class LinkDTO extends AbstractDTO
{
    /**
     * 店铺id.
     *
     * @var int
     */
    public $storeId;

    /**
     * 友链名称.
     *
     * @var string
     */
    public $title;

    /**
     * 友链地址.
     *
     * @var string
     */
    public $url;

    /**
     * logo地址.
     *
     * @var string
     */
    public $logo;
}
