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
 * CategoryDTO.
 * 商品分类表
 * @author zhoujiansheng<zhoujiansheng@eelly.net>
 */
class CategoryDTO extends AbstractDTO
{
    /**
     * 自定义分类ID，自增主键
     *
     * @var int
     */
    public $gcId; 
    
    /**
     * 商品分类名称
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
     * 显示标志：1 全局显示控制 2 商品发布(可选分类) 4 首页 8 频道页 16 搜索页 32 平台头部
     *
     * @var int
     */
    public $showFlag; 

    /**
     * 功能标志：1 高亮显示 2 热门分类 4 新增分类 8 批量销售 16 规格报价 32 限制最低价 64 限制重量
     *
     * @var int
     */
    public $useFlag; 

    /**
     * 最低价格，单位为分
     *
     * @var int
     */
    public $minPrice; 

    /**
     * 最大重量
     *
     * @var int
     */
    public $maxWeight; 

    /**
     * 分类状态：0 未启用 1 启用
     *
     * @var int
     */
    public $status; 

    /**
     * 排序，倒序
     *
     * @var int
     */
    public $sort; 
    
    /**
     * 分类图片路径
     *
     * @var string
     */
    public $logo; 

    /**
     * 淘宝分类，逗号分割
     *
     * @var string
     */
    public $taobaoIds; 

    /**
     * 添加时间
     *
     * @var int
     */
    public $createdTime; 

    /**
     * 修改时间
     *
     * @var string
     */
    public $updateTime; 
}
