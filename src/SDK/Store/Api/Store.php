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
use Eelly\SDK\Store\DTO\StoreDTO;
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
     * {@inheritdoc}
     *
     * @see \Eelly\SDK\Store\Service\StoreInterface::deleteStoreOperator()
     */
    public function listStorePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('store/store', __FUNCTION__, $condition, $currentPage, $limit);
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
     * @param int  $userId         用户id
     * @param int  $storeId        店铺id
     * @param bool $onlyCheckOwner 是否只校验用户是否为店主 true是 false否
     *
     * @throws StoreException
     *
     * @return bool true 校验结果 允许操作 false 不允许操作
     * @requestExample({"userId":1,"storeId":1,"onlyCheckOwner":false})
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
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
	
	/**
     * 获取店铺搜索引擎所需数据.
     *
     * @param int $currentPage  当前页
     * @param int $limit    限制数
     * @return array 返回入库会员搜索引擎所需数据
     * @requestExample({"currentPage":1,"limit":100})
     * @returnExample({"items":[{"storeId":"3","storeName":"LiWeiQuan123456","domain":"domain-3","creditValue":null,"addedCredit":null,"isMix":null,"mixNum":null,"mixMoney":null,"limitActivityExpireTime":null,"introduction":null,"storeWeight":0,"favorityNum":0,"isEntity":0,"isEnterprise":0,"isReturnedExchange":0,"isRealShot":0,"isTimeShipping":0,"isIntegrity":0,"isTryOn":0,"isRealGoods":0,"isMobiePay":0,"isSelfLift":0,"isHot":0}],"page":{"totalPages":3,"totalItems":3,"limit":1}})
     * @throws StoreException
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-10-23
     */
    public function listStoreElasticData(int $currentPage = 1,int $limit = 100):array
	{
		 return EellyClient::request('store/store', __FUNCTION__, $currentPage, $limit);
	}

    /**
     * 获取店铺基本信息.
     *
     * @param int      $storeId              店铺Id
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return StoreDTO 店铺列表
     * @requestExample({"storeId": 1})
     * @returnExample({"storeId":"1","userId":"148086","storeName":"\u5e97\u94fa\u540d\u79f0","domain":"domain-1","status":"1","logo":"","weight":"0","creditMark":"0"})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-10-27
     */
    public function getStore(int $storeId): StoreDTO
    {
        return EellyClient::request('store/store', __FUNCTION__, $storeId);
    }


}
