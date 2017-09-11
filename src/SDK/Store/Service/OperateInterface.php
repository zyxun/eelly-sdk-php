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

namespace Eelly\SDK\Store\Service;

/**
 * 店铺运营管理.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface OperateInterface
{
    /**
     * 添加店铺运营
     * 添加店铺的运营管理人员.
     *
     * @param int    $userId  运营管理人员的userId
     * @param int    $storeId 店铺id
     * @param UidDTO $user    登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({"userId":1,"storeId":2})
     *
     * @return bool 新增结果
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-21
     */
    public function addStoreOperator(int $userId, int $storeId, UidDTO $user = null): bool;
}
