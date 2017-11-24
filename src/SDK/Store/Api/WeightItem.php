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
use Eelly\SDK\Store\Service\WeightItemInterface;
use Eelly\SDK\Store\DTO\WeightItemDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class WeightItem implements WeightItemInterface
{
    /**
     * 新增权重项
     * 新增店铺的权重项.
     *
     * @param array  $itemData           权重项数据
     * @param string $itemData["name"]   权重项名称
     * @param int    $itemData["score"]  权重项基数分(正为加分项,负为扣分项)
     * @param int    $itemData["sort"]   排序
     * @param int    $itemData["status"] 状态 0 禁用 1 正常 4 删除
     * @param string $itemData["remark"] 备注
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "itemData":{
     *         "name":"权重项名称",
     *         "score":123,
     *         "sort":1,
     *         "status":1,
     *         "remark":"备注"
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function addWeightItem(array $itemData): bool
    {
        return EellyClient::request('store/weightItem', __FUNCTION__, true, $itemData);
    }

    /**
     * 新增权重项
     * 新增店铺的权重项.
     *
     * @param array  $itemData           权重项数据
     * @param string $itemData["name"]   权重项名称
     * @param int    $itemData["score"]  权重项基数分(正为加分项,负为扣分项)
     * @param int    $itemData["sort"]   排序
     * @param int    $itemData["status"] 状态 0 禁用 1 正常 4 删除
     * @param string $itemData["remark"] 备注
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "itemData":{
     *         "name":"权重项名称",
     *         "score":123,
     *         "sort":1,
     *         "status":1,
     *         "remark":"备注"
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function addWeightItemAsync(array $itemData)
    {
        return EellyClient::request('store/weightItem', __FUNCTION__, false, $itemData);
    }

    /**
     * 修改权重项
     * 修改店铺的权重项.
     *
     * @param array  $itemData           权重项数据
     * @param int    $itemData["itemId"] 权重项id
     * @param string $itemData["name"]   权重项名称
     * @param int    $itemData["score"]  权重项基数分(正为加分项,负为扣分项)
     * @param int    $itemData["sort"]   排序
     * @param int    $itemData["status"] 状态 0 禁用 1 正常 4 删除
     * @param string $itemData["remark"] 备注
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "itemData":{
     *         "itemId":1,
     *         "name":"权重项名称",
     *         "score":123,
     *         "sort":1,
     *         "status":1,
     *         "remark":"备注"
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function updateWeightItem(array $itemData): bool
    {
        return EellyClient::request('store/weightItem', __FUNCTION__, true, $itemData);
    }

    /**
     * 修改权重项
     * 修改店铺的权重项.
     *
     * @param array  $itemData           权重项数据
     * @param int    $itemData["itemId"] 权重项id
     * @param string $itemData["name"]   权重项名称
     * @param int    $itemData["score"]  权重项基数分(正为加分项,负为扣分项)
     * @param int    $itemData["sort"]   排序
     * @param int    $itemData["status"] 状态 0 禁用 1 正常 4 删除
     * @param string $itemData["remark"] 备注
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "itemData":{
     *         "itemId":1,
     *         "name":"权重项名称",
     *         "score":123,
     *         "sort":1,
     *         "status":1,
     *         "remark":"备注"
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function updateWeightItemAsync(array $itemData)
    {
        return EellyClient::request('store/weightItem', __FUNCTION__, false, $itemData);
    }

    /**
     * 删除权重项
     * 删除店铺的权重项.
     *
     * @param int $itemId 权重项id
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "itemId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function deleteWeightItem(int $itemId): bool
    {
        return EellyClient::request('store/weightItem', __FUNCTION__, true, $itemId);
    }

    /**
     * 删除权重项
     * 删除店铺的权重项.
     *
     * @param int $itemId 权重项id
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "itemId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function deleteWeightItemAsync(int $itemId)
    {
        return EellyClient::request('store/weightItem', __FUNCTION__, false, $itemId);
    }

    /**
     * 获取权重项
     * 获取店铺的权重项信息.
     *
     * @param int $itemId 权重项id
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return WeightItemDTO
     * @requestExample({
     *     "itemId":1
     * })
     * @returnExample({
     *     "itemId":1,
     *     "itemName":"权重项名称",
     *     "itemScore":12,
     *     "sort":2,
     *     "status":1,
     *     "remark":"备注"
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function getWeightItem(int $itemId): WeightItemDTO
    {
        return EellyClient::request('store/weightItem', __FUNCTION__, true, $itemId);
    }

    /**
     * 获取权重项
     * 获取店铺的权重项信息.
     *
     * @param int $itemId 权重项id
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return WeightItemDTO
     * @requestExample({
     *     "itemId":1
     * })
     * @returnExample({
     *     "itemId":1,
     *     "itemName":"权重项名称",
     *     "itemScore":12,
     *     "sort":2,
     *     "status":1,
     *     "remark":"备注"
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月13日
     */
    public function getWeightItemAsync(int $itemId)
    {
        return EellyClient::request('store/weightItem', __FUNCTION__, false, $itemId);
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