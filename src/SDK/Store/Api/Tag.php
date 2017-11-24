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

namespace Eelly\SDK\Store\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Store\Service\TagInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Tag implements TagInterface
{
    /**
     * 新增标签
     * 新增店铺的标签信息.
     *
     * @param int               $storeId               店铺id
     * @param array             $tagData               标签数据
     * @param int               $tagData["type"]       标签类型 1 卖家服务认证身份 2 主营类目 3 销售风格 4 销售档次 5 所在商圈
     * @param array             $tagData["items"]      标签类型关联id数据
     * @param int               $tagData["items"]["0"] 标签关联id
     * @param int               $tagData["items"]["1"] 标签关联id
     * @param int               $tagData["items"]["2"] 标签关联id
     * @param \Eelly\DTO\UidDTO $user                  登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 新增结果
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
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function addTag(int $storeId, array $tagData, UidDTO $user = null): bool
    {
        return EellyClient::request('store/tag', __FUNCTION__, true, $storeId, $tagData, $user);
    }

    /**
     * 新增标签
     * 新增店铺的标签信息.
     *
     * @param int               $storeId               店铺id
     * @param array             $tagData               标签数据
     * @param int               $tagData["type"]       标签类型 1 卖家服务认证身份 2 主营类目 3 销售风格 4 销售档次 5 所在商圈
     * @param array             $tagData["items"]      标签类型关联id数据
     * @param int               $tagData["items"]["0"] 标签关联id
     * @param int               $tagData["items"]["1"] 标签关联id
     * @param int               $tagData["items"]["2"] 标签关联id
     * @param \Eelly\DTO\UidDTO $user                  登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 新增结果
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
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function addTagAsync(int $storeId, array $tagData, UidDTO $user = null)
    {
        return EellyClient::request('store/tag', __FUNCTION__, false, $storeId, $tagData, $user);
    }

    /**
     * 修改标签
     * 修改店铺的标签信息.
     *
     * @param int               $storeId               店铺id
     * @param array             $tagData               标签数据
     * @param int               $tagData["type"]       标签类型 1 卖家服务认证身份 2 主营类目 3 销售风格 4 销售档次 5 所在商圈
     * @param array             $tagData["items"]      标签类型关联id数据
     * @param int               $tagData["items"]["0"] 标签关联id
     * @param int               $tagData["items"]["1"] 标签关联id
     * @param int               $tagData["items"]["2"] 标签关联id
     * @param \Eelly\DTO\UidDTO $user                  登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 修改结果
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
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function updateTag(int $storeId, array $tagData, UidDTO $user = null): bool
    {
        return EellyClient::request('store/tag', __FUNCTION__, true, $storeId, $tagData, $user);
    }

    /**
     * 修改标签
     * 修改店铺的标签信息.
     *
     * @param int               $storeId               店铺id
     * @param array             $tagData               标签数据
     * @param int               $tagData["type"]       标签类型 1 卖家服务认证身份 2 主营类目 3 销售风格 4 销售档次 5 所在商圈
     * @param array             $tagData["items"]      标签类型关联id数据
     * @param int               $tagData["items"]["0"] 标签关联id
     * @param int               $tagData["items"]["1"] 标签关联id
     * @param int               $tagData["items"]["2"] 标签关联id
     * @param \Eelly\DTO\UidDTO $user                  登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 修改结果
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
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function updateTagAsync(int $storeId, array $tagData, UidDTO $user = null)
    {
        return EellyClient::request('store/tag', __FUNCTION__, false, $storeId, $tagData, $user);
    }

    /**
     * 删除标签
     * 删除店铺的标签信息.
     *
     * @param int    $storeId 店铺id
     * @param int    $type    标签类型 1 卖家服务认证身份 2 主营类目 3 销售风格 4 销售档次 5 所在商圈
     * @param UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "storeId":1,
     *     "type":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function deleteTag(int $storeId, int $type, UidDTO $user = null): bool
    {
        return EellyClient::request('store/tag', __FUNCTION__, true, $storeId, $type, $user);
    }

    /**
     * 删除标签
     * 删除店铺的标签信息.
     *
     * @param int    $storeId 店铺id
     * @param int    $type    标签类型 1 卖家服务认证身份 2 主营类目 3 销售风格 4 销售档次 5 所在商圈
     * @param UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "storeId":1,
     *     "type":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function deleteTagAsync(int $storeId, int $type, UidDTO $user = null)
    {
        return EellyClient::request('store/tag', __FUNCTION__, false, $storeId, $type, $user);
    }

    /**
     * 获取标签
     * 获取店铺的标签信息.
     *
     * @param int $storeId 店铺id
     * @param int $type    标签类型 0全部 1 卖家服务认证身份 2 主营类目 3 销售风格 4 销售档次 5 所在商圈
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array
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
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function getTag(int $storeId, int $type = 0): array
    {
        return EellyClient::request('store/tag', __FUNCTION__, true, $storeId, $type);
    }

    /**
     * 获取标签
     * 获取店铺的标签信息.
     *
     * @param int $storeId 店铺id
     * @param int $type    标签类型 0全部 1 卖家服务认证身份 2 主营类目 3 销售风格 4 销售档次 5 所在商圈
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array
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
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function getTagAsync(int $storeId, int $type = 0)
    {
        return EellyClient::request('store/tag', __FUNCTION__, false, $storeId, $type);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}