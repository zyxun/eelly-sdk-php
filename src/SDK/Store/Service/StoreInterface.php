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
 * 店铺操作.
 *
 * @author wangjiang<wangjiang@eelly.net>
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
     * @param int  $userId         用户id
     * @param int  $storeId        店铺id
     * @param bool $onlyCheckOwner 是否只校验用户是否为店主 true是 false否
     *
     * @throws StoreException
     *
     * @return bool true 允许操作 false 不允许操作
     * @requestExample({"userId":1,"storeId":1,"onlyCheckOwner":false})
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-09-11
     */
    public function checkCanOperateStore(int $userId, int $storeId, bool $onlyCheckOwner = false): bool;

    /**
     * 店铺店主变更
     * 对店铺的店主进行变更.
     *
     * @param int    $newOwner 新店主id
     * @param int    $storeId  店铺id
     * @param UidDTO $user     登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 变更结果
     * @requestExample({
     *     "newOwner":123,
     *     "storeId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月9日
     */
    public function updateStoreOwner(int $newOwner, int $storeId, UidDTO $user = null): bool;

    /**
     * 通过用户ID批量获取店铺信息.
     *
     * @param array $userIds 多个用户的ID
     * @return array
     * @requestExample({'userIds':{148086,148087}})
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @returnExample({"storeId": 2,"userId": 148086,"storeName":"店铺名称22","domain":"domain-2","status": 1,"logo":"","weight":0,"creditMark":0,"createdTime":1502278521})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年10月27日
     */
    public function getStoreInfoByUserIds(array $userIds): array;
	
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
    public function listStoreElasticData(int $currentPage = 1,int $limit = 100):array;

    /**
     * 分页获取店铺列表
     *
     * @param array      $condition              店铺的查询条件
     * @param int|string $condition['storeId']   店铺id,多个以逗号隔开
     * @param int|string $condition['userId']    店主id,多个以逗号隔开
     * @param string     $condition['storeName'] 店铺名称：默认name-店铺ID
     * @param int        $condition['status']    状态：0 未开启 1 开启 2 关闭(到期或违规) 3 挂起(违规) 4 卖家暂停营业
     * @param int        $currentPage            当前页码
     * @param int        $limit                  每页条数
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array 店铺列表
     * @requestExample({"condition":{"userId":1,"storeName":"店铺名称","status":1}})
     * @returnExample({"items":[{"storeId":"1","userId":"148086","storeName":"\u5e97\u94fa\u540d\u79f0","domain":"domain-1","status":"1","logo":"","weight":"0","creditMark":"0"}],"page":{"totalPages":1,"totalItems":1,"limit":10}})
     *
     * @author wujunhua<wujunhua@eelly.net>
     * @since 2017-10-27
     */
    public function listStorePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;

}
