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

use Eelly\DTO\UidDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface StoreInterface
{
    /**
     * 新增店铺
     * 用户新增店铺并添加店铺标签.
     *
     * @param array  $storeData              店铺数据
     * @param string $storeData['storeName'] 店铺名称
     * @param string $storeData['consignee'] 联系人姓名
     * @param string $storeData['gbCode']    地区编码
     * @param string $storeData['zipcode']   邮政编码
     * @param string $storeData['address']   详细地址
     * @param string $storeData['mobile']    手机号
     * @param int    $storeData['gcId']      主营类型Id
     * @param array  $storeData['gpvIds']    销售风格Id
     * @param int    $storeData['glId']      销售档次id
     * @param UidDTO $user                   登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({"storeData":{"storeName":"店铺名称", "consignee":"联系人姓名","gdCode":"123","zipcode":"123","address":"详细地址","mobile":"123456789","gcId":1,"gpvIds":[1,2,3],"glId":1}})
     *
     * @return bool 新增结果
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-08
     */
    public function addStore(array $storeData, UidDTO $user = null): bool;

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

    /**
     * 撤销店铺运营
     * 禁用或删除店铺运营.
     *
     * @param int    $operatorId 店铺运营id
     * @param int    $storeId    店铺id
     * @param int    $type       操作类型 1禁用2删除
     * @param UidDTO $user       登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({"operatorId":1,"storeId":2,"type":1})
     *
     * @return bool 撤销结果
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-21
     */
    public function deleteStoreOperator(int $operatorId, int $storeId, int $type, UidDTO $user = null): bool;

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
    public function checkCanOperateStore(int $userId, int $storeId, bool $onlyCheckOwner = false): bool;
}
