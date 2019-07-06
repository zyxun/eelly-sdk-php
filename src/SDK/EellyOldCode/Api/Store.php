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

namespace Eelly\SDK\EellyOldCode\Api;

use Eelly\SDK\EellyClient;

class Store
{
    public function getOne(int $storeId): array
    {
        return EellyClient::request('eellyOldCode/store', __FUNCTION__, true, $storeId);
    }

    public static function getList(array $storeIds): array
    {
        return EellyClient::requestJson('eellyOldCode/store', __FUNCTION__, ['storeIds' => $storeIds]);
    }

    public function newGoodsCount(int $storeId, int $days = 7): int
    {
        return EellyClient::request('eellyOldCode/store', __FUNCTION__, true, $storeId, $days);
    }

    public static function getStoreStatus(int $storeId): int
    {
        return EellyClient::request('eellyOldCode/store', __FUNCTION__, true, $storeId);
    }

    public static function checkImStoreInfo(int $storeId, array $data): bool
    {
        return EellyClient::requestJson('eellyOldCode/store', __FUNCTION__, ['storeId' => $storeId, 'data' => $data]);
    }

    /**
     * 店铺分页列表.
     *
     * @param array  $condition
     * @param int    $currentPage
     * @param int    $limit
     * @param string $field
     *
     * @return array
     *
     * @author zhangyangxun
     *
     * @since 2019-04-01
     */
    public function getListPage(array $condition, int $currentPage = 1, int $limit = 20, string $field = 'base'): array
    {
        return EellyClient::request('eellyOldCode/Store', __FUNCTION__, true, $condition, $currentPage, $limit, $field);
    }

    public function getInfo(array $condition, string $field = 'base'): array
    {
        return EellyClient::request('eellyOldCode/Store', __FUNCTION__, true, $condition, $field);
    }
}
