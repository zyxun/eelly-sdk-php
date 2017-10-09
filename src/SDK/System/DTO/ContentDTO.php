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
class ContentDTO extends AbstractDTO
{
    /**
     * 文章id.
     *
     * @var int
     */
    public $articleId;

    /**
     * 文章内容.
     *
     * @var string
     */
    public $content;

    /**
     * 添加时间
     *
     * @var int
     */
    public $createdTime;

}
