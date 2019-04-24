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
use Eelly\SDK\Store\Service\StoreRefactoringInterface;

/**
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
class StoreRefactoring
{
    /**
     * 获取店铺已经通过的认证类型与服务.
     *
     * > authAll 数组说明
     *   key | value
     *   --------------------|--------------------
     *   isReturnGoods      |    string  48小时包退换
     *   isRealShot         |    string  实拍认证
     *   isTimeShipping     |    string  准时发货
     *
     * @param array $storeIds
     *
     * @return array
     * @requestExample({"storeIds":[148086]})
     * @returnExample({
     *      "148086":{
     *          "isReturnGoods":1,
     *          "isRealShot":1,
     *          "isTimeShipping":1
     *      }
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.08.21
     */
    public function getCreditMarkByStoreIds(array $storeIds): array
    {
        return EellyClient::request('store/storeRefactoring', __FUNCTION__, true, $storeIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getCreditMarkByStoreIdsAsync(array $storeIds): array
    {
        return EellyClient::request('store/storeRefactoring', __FUNCTION__, false, $storeIds);
    }

    /**
     * 根据传过来的店铺id，返回订单详情页店铺相关信息.
     *
     * @param int $storeId 店铺id
     *
     * @return array
     *
     * @requestExample({"storeId":148086})
     * @returnExample({
     *          "userName":"molimoq",
     *          "phoneMob":"13430245645"
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2018.08.23
     */
    public function getStoreOrderDetailInfo(int $storeId): array
    {
        return EellyClient::request('store/storeRefactoring', __FUNCTION__, true, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreOrderDetailInfoAsync(int $storeId): array
    {
        return EellyClient::request('store/storeRefactoring', __FUNCTION__, false, $storeId);
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
