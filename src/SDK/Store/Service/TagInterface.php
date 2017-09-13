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

namespace Eelly\SDK\Store\Service;

use Eelly\DTO\UidDTO;

/**
 * 店铺标签信息.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface TagInterface
{
    /**
     * 新增标签
     * 新增店铺的标签信息
     *
     * @param int $storeId 店铺id
     * @param array $tagData 标签数据
     * @param int $tagData["type"] 标签类型 1 卖家服务认证身份 2 主营类目 3 销售风格 4 销售档次 5 所在商圈
     * @param array $tagData["items"] 标签类型关联id数据
     * @param int $tagData["items"]["0"] 标签关联id
     * @param int $tagData["items"]["1"] 标签关联id
     * @param int $tagData["items"]["2"] 标签关联id
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 新增结果
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({
     *     "storeId":1,
     *     "tagData":[
     *         {
     *             "type":1,
     *             "items":[1,2,3]
     *         }
     *     ]
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月13日
     */
    public function addTag(int $storeId, array $tagData, UidDTO $user = null): bool;

    /**
     * 修改标签
     * 修改店铺的标签信息
     *
     * @param int $storeId 店铺id
     * @param array $tagData 标签数据
     * @param int $tagData["type"] 标签类型 1 卖家服务认证身份 2 主营类目 3 销售风格 4 销售档次 5 所在商圈
     * @param array $tagData["items"] 标签类型关联id数据
     * @param int $tagData["items"]["0"] 标签关联id
     * @param int $tagData["items"]["1"] 标签关联id
     * @param int $tagData["items"]["2"] 标签关联id
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 修改结果
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({
     *     "storeId":1,
     *     "tagData":[
     *         {
     *             "type":1,
     *             "items":[1,2,3]
     *         }
     *     ]
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月13日
     */
    public function updateTag(int $storeId, array $tagData, UidDTO $user = null): bool;

    /**
     * 删除标签
     * 删除店铺的标签信息
     *
     * @param int $storeId 店铺id
     * @param int $type 标签类型 1 卖家服务认证身份 2 主营类目 3 销售风格 4 销售档次 5 所在商圈
     * @param UidDTO $user 登录用户信息
     * @return bool 删除结果
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({
     *     "storeId":1,
     *     "type":1
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月13日
     */
    public function deleteTag(int $storeId, int $type, UidDTO $user = null): bool;

    /**
     * 获取标签
     * 获取店铺的标签信息
     *
     * @param int $storeId 店铺id
     * @param int $type 标签类型 0全部 1 卖家服务认证身份 2 主营类目 3 销售风格 4 销售档次 5 所在商圈
     * @return array
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({
     *     "storeId":1,
     *     "type":1
     * })
     * @returnExample([
     *     {
     *         "tagType":1,
     *         "tagItems" : [1,2,3]
     *     }
     * ])
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月13日
     */
    public function getTag(int $storeId, int $type = 0): array;
}
