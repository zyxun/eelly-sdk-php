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
class CategoryDTO extends AbstractDTO
{
    /**
     * 分类id.
     *
     * @var int
     */
    public $categoryId;

    /**
     * 分类名称.
     *
     * @var string
     */
    public $name;

    /**
     * 分类编码
     *
     * @var string
     */
    public $code;

    /**
     * 分类父id.
     *
     * @var int
     */
    public $parentId;

    /**
     * 排序.
     *
     * @var int
     */
    public $sort;

    /**
     * 状态 0:无效 1:有效.
     *
     * @var int
     */
    public $status;

    /**
     * 分类文章审核标志：0:需审核 1:不需审核.
     *
     * @var int
     */
    public $checkFlag;

    /**
     * 分类备注.
     *
     * @var string
     */
    public $remark;
}
