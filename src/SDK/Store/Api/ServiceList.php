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
use Eelly\SDK\Store\Service\ServiceListInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ServiceList implements ServiceListInterface
{
    /**
     * 新增店铺客服号
     * 新增店铺客服号的信息.
     *
     * @param array             $listData               客服号数据
     * @param int               $listData["teamId"]     客服组id
     * @param string            $listData["listName"]   客服号名称
     * @param int               $listData["listType"]   客服号类型 0/QQ号 1/旺旺 2/企业QQ
     * @param string            $listData["listNumber"] 客服号码
     * @param \Eelly\DTO\UidDTO $user                   登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "listData":{
     *         "teamId":1,
     *         "listName":"客服名称",
     *         "listType":1,
     *         "listNumber":"123456789"
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月7日
     */
    public function addServiceList(array $listData, UidDTO $user = null): bool
    {
        return EellyClient::request('store/serviceList', __FUNCTION__, true, $listData, $user);
    }

    /**
     * 新增店铺客服号
     * 新增店铺客服号的信息.
     *
     * @param array             $listData               客服号数据
     * @param int               $listData["teamId"]     客服组id
     * @param string            $listData["listName"]   客服号名称
     * @param int               $listData["listType"]   客服号类型 0/QQ号 1/旺旺 2/企业QQ
     * @param string            $listData["listNumber"] 客服号码
     * @param \Eelly\DTO\UidDTO $user                   登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "listData":{
     *         "teamId":1,
     *         "listName":"客服名称",
     *         "listType":1,
     *         "listNumber":"123456789"
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月7日
     */
    public function addServiceListAsync(array $listData, UidDTO $user = null)
    {
        return EellyClient::request('store/serviceList', __FUNCTION__, false, $listData, $user);
    }

    /**
     * 修改店铺客服号
     * 修改店铺的客服号信息.
     *
     * @param int               $listId      客服号id
     * @param string            $updateField 修改的字段 listName/客服号名称 listType/号码类型 listNumber/客服号码
     * @param string            $updateValue 修改的值
     * @param \Eelly\DTO\UidDTO $user        登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "listId":1,
     *     "updateField":"listName",
     *     "updateValue":"新名称"
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月7日
     */
    public function updateServiceList(int $listId, string $updateField, string $updateValue, UidDTO $user = null): bool
    {
        return EellyClient::request('store/serviceList', __FUNCTION__, true, $listId, $updateField, $updateValue, $user);
    }

    /**
     * 修改店铺客服号
     * 修改店铺的客服号信息.
     *
     * @param int               $listId      客服号id
     * @param string            $updateField 修改的字段 listName/客服号名称 listType/号码类型 listNumber/客服号码
     * @param string            $updateValue 修改的值
     * @param \Eelly\DTO\UidDTO $user        登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "listId":1,
     *     "updateField":"listName",
     *     "updateValue":"新名称"
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月7日
     */
    public function updateServiceListAsync(int $listId, string $updateField, string $updateValue, UidDTO $user = null)
    {
        return EellyClient::request('store/serviceList', __FUNCTION__, false, $listId, $updateField, $updateValue, $user);
    }

    /**
     * 删除店铺客服号码
     * 删除店铺客服号码
     *
     * @param int               $listId 客服号id
     * @param \Eelly\DTO\UidDTO $user   登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "listId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月7日
     */
    public function deleteServiceList(int $listId, UidDTO $user = null): bool
    {
        return EellyClient::request('store/serviceList', __FUNCTION__, true, $listId, $user);
    }

    /**
     * 删除店铺客服号码
     * 删除店铺客服号码
     *
     * @param int               $listId 客服号id
     * @param \Eelly\DTO\UidDTO $user   登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "listId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月7日
     */
    public function deleteServiceListAsync(int $listId, UidDTO $user = null)
    {
        return EellyClient::request('store/serviceList', __FUNCTION__, false, $listId, $user);
    }

    /**
     * 分页获取店铺客服号码信息
     * 分页获取店铺客服号码信息.
     *
     * @param int $teamId 客服组id
     * @param int $page   页数
     * @param int $limit  每页数据返回的数量
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array
     * @requestExample({
     *     "teamId":1,
     *     "page":1,
     *     "limit":10
     * })
     * @returnExample({
     *     "items":[{
     *         "teamId":1,
     *         "teamName":"客服组名",
     *         "listId":1,
     *         "listName":"客服名称",
     *         "listType":1,
     *         "listNumber":"123456789",
     *         "createdTime":"1970-01-01 01:01:01"
     *     }],
     *     "currentPage":1,
     *     "totalPage":2,
     *     "totalItems":2
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月7日
     */
    public function listServiceListPage(int $teamId, int $page = 1, int $limit = 10): array
    {
        return EellyClient::request('store/serviceList', __FUNCTION__, true, $teamId, $page, $limit);
    }

    /**
     * 分页获取店铺客服号码信息
     * 分页获取店铺客服号码信息.
     *
     * @param int $teamId 客服组id
     * @param int $page   页数
     * @param int $limit  每页数据返回的数量
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array
     * @requestExample({
     *     "teamId":1,
     *     "page":1,
     *     "limit":10
     * })
     * @returnExample({
     *     "items":[{
     *         "teamId":1,
     *         "teamName":"客服组名",
     *         "listId":1,
     *         "listName":"客服名称",
     *         "listType":1,
     *         "listNumber":"123456789",
     *         "createdTime":"1970-01-01 01:01:01"
     *     }],
     *     "currentPage":1,
     *     "totalPage":2,
     *     "totalItems":2
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月7日
     */
    public function listServiceListPageAsync(int $teamId, int $page = 1, int $limit = 10)
    {
        return EellyClient::request('store/serviceList', __FUNCTION__, false, $teamId, $page, $limit);
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