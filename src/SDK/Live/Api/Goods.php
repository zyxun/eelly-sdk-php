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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\GoodsInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Goods
{
    /**
     * 获取直播商品信息.
     *
     * @param array $condition   查询条件
     * @param array $sort        排序信息
     * @param int   $currentPage 当前页
     * @param int   $limit       每页数量
     *
     * @return array 商品信息
     * @requestExample({
     *     "condition":{
     *         "liveId":[1,2,3],
     *         "status":[1]
     *     },
     *     "sort":{
     *         "sort":"DESC"
     *     },
     *     "currentPage":1,
     *     "limit":10
     * })
     * @returnExample({
     *     "items":[
     *         {
     *             "lgId":3,
     *             "liveId":1,
     *             "goodsId":678,
     *             "status":1,
     *             "createdTime":"1517219537",
     *             "updateTime":"2018-01-30 10:43:30"
     *         }
     *     ],
     *     "page":{
     *         "totalPage":1,
     *         "totalItems":1,
     *         "current":1,
     *         "limit":10
     *     }
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2018年1月30日
     */
    public function getLiveGoodsList(array $condition, array $sort = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('live/goods', 'getLiveGoodsList', true, $condition, $sort, $currentPage, $limit);
    }

    /**
     * 获取直播商品信息.
     *
     * @param array $condition   查询条件
     * @param array $sort        排序信息
     * @param int   $currentPage 当前页
     * @param int   $limit       每页数量
     *
     * @return array 商品信息
     * @requestExample({
     *     "condition":{
     *         "liveId":[1,2,3],
     *         "status":[1]
     *     },
     *     "sort":{
     *         "sort":"DESC"
     *     },
     *     "currentPage":1,
     *     "limit":10
     * })
     * @returnExample({
     *     "items":[
     *         {
     *             "lgId":3,
     *             "liveId":1,
     *             "goodsId":678,
     *             "status":1,
     *             "createdTime":"1517219537",
     *             "updateTime":"2018-01-30 10:43:30"
     *         }
     *     ],
     *     "page":{
     *         "totalPage":1,
     *         "totalItems":1,
     *         "current":1,
     *         "limit":10
     *     }
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2018年1月30日
     */
    public function getLiveGoodsListAsync(array $condition, array $sort = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('live/goods', 'getLiveGoodsList', false, $condition, $sort, $currentPage, $limit);
    }

    /**
     * 设置直播商品的排序.
     *
     * @param int $liveId  直播id
     * @param int $goodsId 商品id
     * @param int $sort    排序id
     *
     * @return bool
     */
    public function setSort(int $liveId, int $goodsId, int $sort): bool
    {
        return EellyClient::request('live/goods', 'setSort', true, $liveId, $goodsId, $sort);
    }

    /**
     * 设置直播商品的排序.
     *
     * @param int $liveId  直播id
     * @param int $goodsId 商品id
     * @param int $sort    排序id
     *
     * @return bool
     */
    public function setSortAsync(int $liveId, int $goodsId, int $sort)
    {
        return EellyClient::request('live/goods', 'setSort', false, $liveId, $goodsId, $sort);
    }

    /**
     * 设置直播间讲解商品
     *
     * @param int $liveId 直播id
     * @param int $goodsId 商品id
     * @return bool 设置结果
     * @requestExample({
     *     "liveId":1,
     *     "goodsId":2
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年2月2日
     */
    public function setLiveIntroduceGoods(int $liveId, int $goodsId): bool
    {
        return EellyClient::request('live/goods', 'setLiveIntroduceGoods', true, $liveId, $goodsId);
    }

    /**
     * 设置直播间讲解商品
     *
     * @param int $liveId 直播id
     * @param int $goodsId 商品id
     * @return bool 设置结果
     * @requestExample({
     *     "liveId":1,
     *     "goodsId":2
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年2月2日
     */
    public function setLiveIntroduceGoodsAsync(int $liveId, int $goodsId)
    {
        return EellyClient::request('live/goods', 'setLiveIntroduceGoods', false, $liveId, $goodsId);
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