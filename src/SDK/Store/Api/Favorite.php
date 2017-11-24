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
use Eelly\SDK\Store\Service\FavoriteInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Favorite implements FavoriteInterface
{
    /**
     * 新增店铺收藏.
     *
     * @param int    $storeId 店铺id
     * @param UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 新增结果
     * @requestExample(1)
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-09-01
     *
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的店铺id",operator:["gt",0]})
     * )
     */
    public function addFavorite(int $storeId, UidDTO $user = null): bool
    {
        return EellyClient::request('store/favorite', __FUNCTION__, true, $storeId, $user);
    }

    /**
     * 新增店铺收藏.
     *
     * @param int    $storeId 店铺id
     * @param UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 新增结果
     * @requestExample(1)
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-09-01
     *
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的店铺id",operator:["gt",0]})
     * )
     */
    public function addFavoriteAsync(int $storeId, UidDTO $user = null)
    {
        return EellyClient::request('store/favorite', __FUNCTION__, false, $storeId, $user);
    }

    /**
     * 删除店铺收藏.
     *
     * @param int    $storeId 店铺id
     * @param UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 删除结果
     * @requestExample(1)
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-09-01
     *
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的店铺id",operator:["gt",0]})
     * )
     */
    public function deleteFavorite(int $linkId, UidDTO $user = null): bool
    {
        return EellyClient::request('store/favorite', __FUNCTION__, true, $linkId, $user);
    }

    /**
     * 删除店铺收藏.
     *
     * @param int    $storeId 店铺id
     * @param UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 删除结果
     * @requestExample(1)
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-09-01
     *
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的店铺id",operator:["gt",0]})
     * )
     */
    public function deleteFavoriteAsync(int $linkId, UidDTO $user = null)
    {
        return EellyClient::request('store/favorite', __FUNCTION__, false, $linkId, $user);
    }

    /**
     * 获取用户所有店铺收藏分页列表.
     *
     * @param UidDTO $user        登录用户信息
     * @param int    $currentPage 页码
     * @param int    $limit       分页条数
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array 店铺分页结果
     * @requestExample(["currentPage":1,"limit":10])
     * @returnExample({"data": {"items": [{"sfId": "5","userId": "148086","storeId": "1","createdTime": "1504254588","updateTime": "2017-09-01 08:29:48"}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"limit": 1,"totalPages": 1,"totalItems": 1}},"returnType": "array"})
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-09-01
     *
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的页码",operator:["gt",0]}),
     *   @OperatorValidator(1,{message:"非法的数据条数",operator:["gt",0]})
     * )
     */
    public function listFavoritePageByUser(int $currentPage = 1, int $limit = 10, UidDTO $user = null): array
    {
        return EellyClient::request('store/favorite', __FUNCTION__, true, $currentPage, $limit, $user);
    }

    /**
     * 获取用户所有店铺收藏分页列表.
     *
     * @param UidDTO $user        登录用户信息
     * @param int    $currentPage 页码
     * @param int    $limit       分页条数
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array 店铺分页结果
     * @requestExample(["currentPage":1,"limit":10])
     * @returnExample({"data": {"items": [{"sfId": "5","userId": "148086","storeId": "1","createdTime": "1504254588","updateTime": "2017-09-01 08:29:48"}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"limit": 1,"totalPages": 1,"totalItems": 1}},"returnType": "array"})
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-09-01
     *
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的页码",operator:["gt",0]}),
     *   @OperatorValidator(1,{message:"非法的数据条数",operator:["gt",0]})
     * )
     */
    public function listFavoritePageByUserAsync(int $currentPage = 1, int $limit = 10, UidDTO $user = null)
    {
        return EellyClient::request('store/favorite', __FUNCTION__, false, $currentPage, $limit, $user);
    }

    /**
     * 获取收藏店铺所有用户分页列表.
     *
     * @param int $storeId     店铺id
     * @param int $currentPage 页码
     * @param int $limit       分页条数
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array 用户分页结果
     * @requestExample([1,1,10])
     * @returnExample({"data": {"items": [{"sfId": "5","userId": "148086","storeId": "1","createdTime": "1504254588","updateTime": "2017-09-01 08:29:48"}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"limit": 1,"totalPages": 1,"totalItems": 1}},"returnType": "array"})
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-09-01
     *
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的店铺id",operator:["gt",0]}),
     *   @OperatorValidator(1,{message:"非法的页码",operator:["gt",0]}),
     *   @OperatorValidator(2,{message:"非法的数据条数",operator:["gt",0]})
     * )
     */
    public function listFavoritePageByStore(int $storeId, int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('store/favorite', __FUNCTION__, true, $storeId, $currentPage, $limit);
    }

    /**
     * 获取收藏店铺所有用户分页列表.
     *
     * @param int $storeId     店铺id
     * @param int $currentPage 页码
     * @param int $limit       分页条数
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array 用户分页结果
     * @requestExample([1,1,10])
     * @returnExample({"data": {"items": [{"sfId": "5","userId": "148086","storeId": "1","createdTime": "1504254588","updateTime": "2017-09-01 08:29:48"}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"limit": 1,"totalPages": 1,"totalItems": 1}},"returnType": "array"})
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-09-01
     *
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的店铺id",operator:["gt",0]}),
     *   @OperatorValidator(1,{message:"非法的页码",operator:["gt",0]}),
     *   @OperatorValidator(2,{message:"非法的数据条数",operator:["gt",0]})
     * )
     */
    public function listFavoritePageByStoreAsync(int $storeId, int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('store/favorite', __FUNCTION__, false, $storeId, $currentPage, $limit);
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