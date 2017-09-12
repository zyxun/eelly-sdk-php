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

namespace Eelly\SDK\Goods\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\Goods\DTO\CategoryCustomDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CategoryCustomInterface
{
    /**
     * 新增店铺自定义商品分类.
     *
     * @param array     $data               商品分类数据
     * @param int       $data['storeId']    店铺id
     * @param string    $data['name']       分类名称
     * @param int       $data['parentId']   父分类ID
     * @param int       $data['status']     显示状态：0 不显示 1 显示
     * @param int       $data['isOpen']     是否展开子分类：0 否 1 是
     * @param int       $data['sort']       排序
     * @param UidDTO    $user               登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * 
     * @return bool 新增结果
     * @requestExample({"data":{"storeId":1,"name":"分类名称","parentId":0,"status":1,"isOpen":1,"sort":0}})
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-09-02
     */
    public function addCategory(array $data, UidDTO $user = null): bool;
    
    /**
     * 获取店铺自定义商品分类.
     *
     * @param int    $categoryId   分类id
     * @param UidDTO $user         登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * 
     * @return CategoryCustomDTO
     * @requestExample(1)
     * @returnExample({"gcc_id":1,"storeId":1,"name":"分类名称","parentId":0,"status":1,"isOpen":1,"sort":0})
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-29
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的id",operator:["gt",0]})
     * )
     */
    public function getCategory(int $categoryId, UidDTO $user = null): CategoryCustomDTO;

    /**
     * 删除店铺自定义商品分类.
     *
     * @param int    $categoryId   分类id
     * @param UidDTO $user         登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * 
     * @return bool  删除结果
     * @requestExample(1)
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-29
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的id",operator:["gt",0]})
     * )
     */
    public function deleteCategory(int $categoryId, UidDTO $user = null): bool;

    /**
     * 更新店铺自定义商品分类.
     *
     * @param int       $categoryId         分类id
     * @param array     $data               商品分类数据
     * @param int       $data['storeId']    店铺id
     * @param string    $data['name']       分类名称
     * @param int       $data['parentId']   父分类ID
     * @param int       $data['status']     显示状态：0 不显示 1 显示
     * @param int       $data['isOpen']     是否展开子分类：0 否 1 是
     * @param int       $data['sort']       排序
     * @param UidDTO    $user               登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * 
     * @return bool  更新结果
     * @requestExample({"categoryId":1,"data":{"storeId":1,"name":"分类名称","parentId":0,"status":1,"isOpen":1,"sort":0}})
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-29
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的id",operator:["gt",0]})
     * )
     */
    public function updateCategory(int $categoryId, array $data, UidDTO $user = null): bool;

    /**
     * 获取店铺自定义商品分类分页列表.
     *
     * @param int    $storeId              店铺id
     * @param int    $currentPage          页码
     * @param int    $limit                分页条数
     * @param UidDTO $user                 登录用户信息
     *
     * @throws \Eelly\SDK\Goods\Exception\GoodsException
     * 
     * @return array  分页结果
     * @requestExample([1,1,10])
     * @returnExample({"data": {"items": [{"gcc_id":1,"storeId":1,"name":"分类名称","parentId":0,"status":1,"isOpen":1,"sort":0,"createdTime": "1504172537","updateTime": "2017-08-31 09:42:17"}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"limit": 10,"totalPages": 1,"totalItems": 1}},"returnType": "array"})
     * 
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-29
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的店铺id",operator:["gt",0]}),
     *   @OperatorValidator(1,{message:"非法的页码",operator:["gt",0]}),
     *   @OperatorValidator(2,{message:"非法的条数",operator:["gt",0]})
     * )
     */
    public function listCategoryPage(int $storeId, int $currentPage = 1, int $limit = 10, UidDTO $user = null): array;
}
