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
 * Class CategoryDTO.
 */
class ImageDTO extends AbstractDTO
{

    /**
     * 文章图片主键id.
     *
     * @var int
     */
    public $saiId;

    /**
     * 文章id.
     *
     * @var int
     */
    public $articleId;

    /**
     * 来源图片地址.
     *
     * @var string
     */
    public $fromImage;

    /**
     * 下载到本地图片地址.
     *
     * @var string
     */
    public $toImage;

    /**
     * 添加时间
     *
     * @var int
     */
    public $createdTime;

}
