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
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
class StoreRefactoring implements StoreRefactoringInterface
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