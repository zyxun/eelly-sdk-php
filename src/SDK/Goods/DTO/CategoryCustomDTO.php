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

namespace Eelly\SDK\Goods\DTO;

use Eelly\DTO\AbstractDTO;

/**
 * CategoryCustomDTO.
 *
 * @author zhoujiansheng<zhoujiansheng@eelly.net>
 */
class CategoryCustomDTO extends AbstractDTO
{
    /**
     * 自定义分类ID，自增主键
     *
     * @var int
     */
    public $gccId; 
    
    /**
     * 店铺ID
     *
     * @var int
     */
    public $storeId; 

    /**
     * 分类名称
     *
     * @var string
     */
    public $name; 

    /**
     * 父分类ID
     *
     * @var int
     */
    public $parentId; 

    /**
     * 店铺分类排序，倒序
     *
     * @var int
     */
    public $sort; 

    /**
     * 显示状态：0 不显示 1 显示
     *
     * @var int
     */
    public $status; 

    /**
     * 是否展开子分类：0 否 1 是
     *
     * @var int
     */
    public $isOpen; 

    /**
     * 创建时间
     *
     * @var int
     */
    public $createdTime; 

    /**
     * 最后更新时间
     *
     * @var unknown
     */
    public $updateTime; 

}
