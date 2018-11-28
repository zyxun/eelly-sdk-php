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
use Eelly\SDK\Store\Service\WeightInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Weight implements WeightInterface
{
    /**
     * 添加权重记录
     * 添加店铺的权重记录.
     *
     * @param int    $storeId              店铺id
     * @param array  $weightData           权重记录数据
     * @param int    $weightData["itemId"] 权重项id
     * @param int    $weightData["score"]  获得权重分
     * @param int    $weightData["status"] 状态 0 无效 1 有效
     * @param string $weightData["remark"] 备注:权重分变更原因
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "storeId":1,
     *     "weightData":[
     *         {
     *             "itemId":1,
     *             "score":11,
     *             "status":1,
     *             "remark":"备注"
     *         }
     *     ]
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月14日
     */
    public function addWeight(int $storeId, array $weightData): bool
    {
        return EellyClient::request('store/weight', __FUNCTION__, true, $storeId, $weightData);
    }

    /**
     * 添加权重记录
     * 添加店铺的权重记录.
     *
     * @param int    $storeId              店铺id
     * @param array  $weightData           权重记录数据
     * @param int    $weightData["itemId"] 权重项id
     * @param int    $weightData["score"]  获得权重分
     * @param int    $weightData["status"] 状态 0 无效 1 有效
     * @param string $weightData["remark"] 备注:权重分变更原因
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "storeId":1,
     *     "weightData":[
     *         {
     *             "itemId":1,
     *             "score":11,
     *             "status":1,
     *             "remark":"备注"
     *         }
     *     ]
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月14日
     */
    public function addWeightAsync(int $storeId, array $weightData)
    {
        return EellyClient::request('store/weight', __FUNCTION__, false, $storeId, $weightData);
    }

    /**
     * 分页获取权重记录
     * 分页获取店铺的权重记录.
     *
     *
     * @param int $storeId 店铺id
     * @param int $itemId  权重项id 0 所有 ...其他值关联权重项
     * @param int $status  状态 -1 所有 0 无效 1 有效
     * @param int $page    页数
     * @param int $limit   每页数据返回的数量
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array
     * @requestExample({
     *     "storeId":1,
     *     "itemId":2,
     *     "status":1,
     *     "page":1,
     *     "limit":10
     * })
     * @returnExample({
     *    "items" : [{
     *         "itemName":"权重项名称",
     *         "score":123,
     *         "status":1,
     *         "remark":"权重变更原因",
     *         "createdTime":"1970-01-01 12:12:12"
     *     }],
     *    "currentPage":1,
     *    "totalPage":2,
     *    "totalItems":2
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月14日
     */
    public function listWeightPage(int $storeId, int $itemId = 0, int $status = -1, int $page = 1, int $limit = 10): array
    {
        return EellyClient::request('store/weight', __FUNCTION__, true, $storeId, $itemId, $status, $page, $limit);
    }

    /**
     * 分页获取权重记录
     * 分页获取店铺的权重记录.
     *
     *
     * @param int $storeId 店铺id
     * @param int $itemId  权重项id 0 所有 ...其他值关联权重项
     * @param int $status  状态 -1 所有 0 无效 1 有效
     * @param int $page    页数
     * @param int $limit   每页数据返回的数量
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array
     * @requestExample({
     *     "storeId":1,
     *     "itemId":2,
     *     "status":1,
     *     "page":1,
     *     "limit":10
     * })
     * @returnExample({
     *    "items" : [{
     *         "itemName":"权重项名称",
     *         "score":123,
     *         "status":1,
     *         "remark":"权重变更原因",
     *         "createdTime":"1970-01-01 12:12:12"
     *     }],
     *    "currentPage":1,
     *    "totalPage":2,
     *    "totalItems":2
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月14日
     */
    public function listWeightPageAsync(int $storeId, int $itemId = 0, int $status = -1, int $page = 1, int $limit = 10)
    {
        return EellyClient::request('store/weight', __FUNCTION__, false, $storeId, $itemId, $status, $page, $limit);
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
