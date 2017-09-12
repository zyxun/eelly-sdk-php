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

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Store\Service\StoreInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Store implements StoreInterface
{
    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Store\Service\StoreInterface::addStore()
     */
    public function addStore(array $storeData, UidDTO $user = null): bool
    {
        return EellyClient::request('store/store', __FUNCTION__, $storeData, $user);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Store\Service\StoreInterface::addStoreOperator()
     */
    public function addStoreOperator(int $userId, int $storeId, UidDTO $user = null): bool
    {
        return EellyClient::request('store/store', __FUNCTION__, $userId, $storeId, $user);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Store\Service\StoreInterface::deleteStoreOperator()
     */
    public function deleteStoreOperator(int $operatorId, int $storeId, int $type, UidDTO $user = null): bool
    {
        return EellyClient::request('store/store', __FUNCTION__, $operatorId, $storeId, $type, $user);
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
    /**
     * 校验用户是否能操作管理店铺.
     *
     * @param int $userId 用户id
     * @param int $storeId 店铺id
     * @param bool $onlyCheckOwner 是否只校验用户是否为店主 true是 false否
     * @throws StoreException
     * @return bool true 允许操作 false 不允许操作
     * @requestExample({"userId":1,"storeId":1,"onlyCheckOwner":false})
     * @returnExample(true)
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     * @since 2017-09-11
     */
    public function checkCanOperateStore(int $userId, int $storeId, bool $onlyCheckOwner = false): bool
    {
        return EellyClient::request('store/store', __FUNCTION__, $userId, $storeId, $onlyCheckOwner);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Store\Service\StoreInterface::updateStoreOwner()
     */
    public function updateStoreOwner(int $newOwner, int $storeId, UidDTO $user = null): bool
    {
        return EellyClient::request('store/store', __FUNCTION__, $newOwner, $storeId, $user);
    }
}
