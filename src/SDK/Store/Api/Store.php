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
use Eelly\SDK\Store\Service\StoreInterface;
use Eelly\DTO\UidDTO;
use Eelly\SDK\Store\DTO\StoreDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Store implements StoreInterface
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
    public function addStore(array $storeData, UidDTO $user = null): bool
    {
        return EellyClient::request('store/store', 'addStore', true, $storeData, $user);
    }

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
    public function addStoreAsync(array $storeData, UidDTO $user = null)
    {
        return EellyClient::request('store/store', 'addStore', false, $storeData, $user);
    }

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
    public function deleteStoreOperator(int $operatorId, int $storeId, int $type, UidDTO $user = null): bool
    {
        return EellyClient::request('store/store', 'deleteStoreOperator', true, $operatorId, $storeId, $type, $user);
    }

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
    public function deleteStoreOperatorAsync(int $operatorId, int $storeId, int $type, UidDTO $user = null)
    {
        return EellyClient::request('store/store', 'deleteStoreOperator', false, $operatorId, $storeId, $type, $user);
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
     * @return bool true 允许操作 false 不允许操作
     * @requestExample({"userId":1,"storeId":1,"onlyCheckOwner":false})
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-09-11
     */
    public function checkCanOperateStore(int $userId, int $storeId, bool $onlyCheckOwner = false): bool
    {
        return EellyClient::request('store/store', 'checkCanOperateStore', true, $userId, $storeId, $onlyCheckOwner);
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
     * @return bool true 允许操作 false 不允许操作
     * @requestExample({"userId":1,"storeId":1,"onlyCheckOwner":false})
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-09-11
     */
    public function checkCanOperateStoreAsync(int $userId, int $storeId, bool $onlyCheckOwner = false)
    {
        return EellyClient::request('store/store', 'checkCanOperateStore', false, $userId, $storeId, $onlyCheckOwner);
    }

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
    public function updateStoreOwner(int $newOwner, int $storeId, UidDTO $user = null): bool
    {
        return EellyClient::request('store/store', 'updateStoreOwner', true, $newOwner, $storeId, $user);
    }

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
    public function updateStoreOwnerAsync(int $newOwner, int $storeId, UidDTO $user = null)
    {
        return EellyClient::request('store/store', 'updateStoreOwner', false, $newOwner, $storeId, $user);
    }

    /**
     * 通过用户ID批量获取店铺信息.
     *
     * @param array $userIds 多个用户的ID
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array
     * @requestExample({'userIds':{148086,148087}})
     * @returnExample({"storeId": 2,"userId": 148086,"storeName":"店铺名称22","domain":"domain-2","status": 1,"logo":"","weight":0,"creditMark":0,"createdTime":1502278521})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月27日
     */
    public function getStoreInfoByUserIds(array $userIds): array
    {
        return EellyClient::request('store/store', 'getStoreInfoByUserIds', true, $userIds);
    }

    /**
     * 通过用户ID批量获取店铺信息.
     *
     * @param array $userIds 多个用户的ID
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array
     * @requestExample({'userIds':{148086,148087}})
     * @returnExample({"storeId": 2,"userId": 148086,"storeName":"店铺名称22","domain":"domain-2","status": 1,"logo":"","weight":0,"creditMark":0,"createdTime":1502278521})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月27日
     */
    public function getStoreInfoByUserIdsAsync(array $userIds)
    {
        return EellyClient::request('store/store', 'getStoreInfoByUserIds', false, $userIds);
    }

    /**
     * 获取店铺搜索引擎所需数据.
     *
     * @param int $currentPage 当前页
     * @param int $limit       限制数
     *
     * @throws StoreException
     *
     * @return array 返回入库会员搜索引擎所需数据
     * @requestExample({"currentPage":1,"limit":100})
     * @returnExample({"items":{"1":{"storeId":"1","storeName":"店铺名称","domain":"domain-1","storeStatus":"1","storeLog":"","storeWeight":"0","createdTime":"1502278385","gbCodes":["65","6542","654223","654223100"],"creditValue":"0","minQuantity":"0","minPrice":"0","storeIntro":"","cateId":["22","22"],"storeYear":1,"isEnterprise":0,"isEntity":0,"isBrand":0,"isSeller":0,"isHot":0,"isTimeShipping":0,"isIntegrity":0,"isRealShot":0,"onlineStatus":1,"isBehalfof":1,"floorId":0,"marketId":0,"goodsNewTime":0,"recommendGoods":["goodsInfo"]}},"page":{"totalPages":1,"totalItems":3,"current":1,"limit":100}})
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-23
     */
    public function listStoreElasticData(int $currentPage = 1, int $limit = 100): array
    {
        return EellyClient::request('store/store', 'listStoreElasticData', true, $currentPage, $limit);
    }

    /**
     * 获取店铺搜索引擎所需数据.
     *
     * @param int $currentPage 当前页
     * @param int $limit       限制数
     *
     * @throws StoreException
     *
     * @return array 返回入库会员搜索引擎所需数据
     * @requestExample({"currentPage":1,"limit":100})
     * @returnExample({"items":{"1":{"storeId":"1","storeName":"店铺名称","domain":"domain-1","storeStatus":"1","storeLog":"","storeWeight":"0","createdTime":"1502278385","gbCodes":["65","6542","654223","654223100"],"creditValue":"0","minQuantity":"0","minPrice":"0","storeIntro":"","cateId":["22","22"],"storeYear":1,"isEnterprise":0,"isEntity":0,"isBrand":0,"isSeller":0,"isHot":0,"isTimeShipping":0,"isIntegrity":0,"isRealShot":0,"onlineStatus":1,"isBehalfof":1,"floorId":0,"marketId":0,"goodsNewTime":0,"recommendGoods":["goodsInfo"]}},"page":{"totalPages":1,"totalItems":3,"current":1,"limit":100}})
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-23
     */
    public function listStoreElasticDataAsync(int $currentPage = 1, int $limit = 100)
    {
        return EellyClient::request('store/store', 'listStoreElasticData', false, $currentPage, $limit);
    }

    /**
     * 分页获取店铺列表.
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
     *
     * @since 2017-10-27
     */
    public function listStorePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('store/store', 'listStorePage', true, $condition, $currentPage, $limit);
    }

    /**
     * 分页获取店铺列表.
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
     *
     * @since 2017-10-27
     */
    public function listStorePageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('store/store', 'listStorePage', false, $condition, $currentPage, $limit);
    }

    /**
     * 获取店铺基本信息.
     *
     * @param int $storeId 店铺Id
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array 店铺列表
     * @requestExample({"storeId": 1})
     * @returnExample({"storeId":"1","userId":"148086","storeName":"\u5e97\u94fa\u540d\u79f0","domain":"domain-1","status":"1","logo":"","weight":"0","creditMark":"0"})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-27
     */
    public function getStore(int $storeId): StoreDTO
    {
        return EellyClient::request('store/store', 'getStore', true, $storeId);
    }

    /**
     * 获取店铺基本信息.
     *
     * @param int $storeId 店铺Id
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array 店铺列表
     * @requestExample({"storeId": 1})
     * @returnExample({"storeId":"1","userId":"148086","storeName":"\u5e97\u94fa\u540d\u79f0","domain":"domain-1","status":"1","logo":"","weight":"0","creditMark":"0"})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-27
     */
    public function getStoreAsync(int $storeId)
    {
        return EellyClient::request('store/store', 'getStore', false, $storeId);
    }

    /**
     * 获取店铺认证服务
     * 获取店铺认证服务信息.
     *
     * @param array $storeIds 店铺id
     * @param array $types    服务类型(默认为空获取全部) 0:实体认证 1:企业认证 2:48小时包退货 3:商品实拍 4:准时发货 5:诚信保障 6:卖家认证 7:品牌认证 8:全店包邮
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array 店铺认证服务信息
     * @requestExample({
     *     "storeIds":[
     *         1,
     *         2,
     *         3
     *     ],
     *     "types":[
     *         0,
     *         1,
     *         2
     *     ]
     * })
     * @returnExample({
     *     "1":{
     *         "entityCertification":1,
     *         "enterpriseCertification":0,
     *         "returnedCertification":1,
     *         "realShotCertification":1,
     *         "timeShippingCertification":1,
     *         "integrityCertification":1,
     *         "sellerCertification":1,
     *         "brandCertification":1,
     *         "freeShippingCertification":1,
     *         "hotCertification":1
     *     }
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月31日
     */
    public function getCertificationServices(array $storeIds, array $types = []): array
    {
        return EellyClient::request('store/store', 'getCertificationServices', true, $storeIds, $types);
    }

    /**
     * 获取店铺认证服务
     * 获取店铺认证服务信息.
     *
     * @param array $storeIds 店铺id
     * @param array $types    服务类型(默认为空获取全部) 0:实体认证 1:企业认证 2:48小时包退货 3:商品实拍 4:准时发货 5:诚信保障 6:卖家认证 7:品牌认证 8:全店包邮
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array 店铺认证服务信息
     * @requestExample({
     *     "storeIds":[
     *         1,
     *         2,
     *         3
     *     ],
     *     "types":[
     *         0,
     *         1,
     *         2
     *     ]
     * })
     * @returnExample({
     *     "1":{
     *         "entityCertification":1,
     *         "enterpriseCertification":0,
     *         "returnedCertification":1,
     *         "realShotCertification":1,
     *         "timeShippingCertification":1,
     *         "integrityCertification":1,
     *         "sellerCertification":1,
     *         "brandCertification":1,
     *         "freeShippingCertification":1,
     *         "hotCertification":1
     *     }
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年10月31日
     */
    public function getCertificationServicesAsync(array $storeIds, array $types = [])
    {
        return EellyClient::request('store/store', 'getCertificationServices', false, $storeIds, $types);
    }

    /**
     * 开店流程
     *
     * @param array  $data 开店流程请求参数
     * @param string $data['storeId'] 店铺id
     * @param string $data['storeName'] 店铺名称
     * @param string $data['consignee'] 联系人姓名
     * @param string $data['gbCode'] 地区编码
     * @param string $data['zipcode'] 邮政编码
     * @param string $data['address'] 详细地址
     * @param string $data['mobile'] 手机号
     * @param string $data['marketId'] 市场id
     * @param string $data['address'] 详细地址
     * @param int $data['floorId'] 楼层id
     * @param array $data['entNumber'] 档口号
     * @param int $data['gcId'] 主营类型Id
     * @param array $data['gpvIds'] 销售风格Id
     * @param int $data['glId'] 销售档次id
     * @param UidDTO $user 登录用户信息
     * @return  boolean
     *
     * @requestExample()
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月24日
     */
    public function addStoreMainInfo(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('store/store', 'addStoreMainInfo', true, $data, $user);
    }

    /**
     * 开店流程
     *
     * @param array  $data 开店流程请求参数
     * @param string $data['storeId'] 店铺id
     * @param string $data['storeName'] 店铺名称
     * @param string $data['consignee'] 联系人姓名
     * @param string $data['gbCode'] 地区编码
     * @param string $data['zipcode'] 邮政编码
     * @param string $data['address'] 详细地址
     * @param string $data['mobile'] 手机号
     * @param string $data['marketId'] 市场id
     * @param string $data['address'] 详细地址
     * @param int $data['floorId'] 楼层id
     * @param array $data['entNumber'] 档口号
     * @param int $data['gcId'] 主营类型Id
     * @param array $data['gpvIds'] 销售风格Id
     * @param int $data['glId'] 销售档次id
     * @param UidDTO $user 登录用户信息
     * @return  boolean
     *
     * @requestExample()
     * @returnExample()
     *
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月24日
     */
    public function addStoreMainInfoAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('store/store', 'addStoreMainInfo', false, $data, $user);
    }

    /**
     * 店铺信息页--店铺档案【新版档案】.
     *
     * @param int $storeId      店铺id
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------------------------------|-------|--------------
     * storeId                          |string |   店铺id
     * storeName                        |string |   店铺名
     * storeLogo                        |string |   店铺logo
     * addTime                          |string |   开店时间
     * status                           |string |   店铺状态
     * creditValue                      |string |   店铺信誉值
     * tel                              |string |   店铺电话
     * storeDesc                        |string |   店铺描述
     * isMix                            |string |   是否混批
     * mixNum                           |string |   混批数量
     * mixMoney                         |string |   混批最大金额
     * shopfront                        |string |   店招
     * dealIn                           |string |   店铺主营
     * goodsCount                       |int    |   店铺商品数
     * streetAddr                       |string |   店铺地址
     * creditInfo                       |string |   店铺信誉值图片url
     * authAll                          |array  |   (店铺认证数组)
     * authAll["isEntity"]              |int    |   实体认证
     * authAll["isEnterprise"]          |int    |   企业认证
     * authAll["returnGoodsStatus"]     |int    |   48小时包退换认证
     * authAll["isRealShot"]            |int    |   商品实拍认证
     * authAll["isTimeShipping"]        |int    |   准时发货认证
     * authAll["isIntegrity"]           |int    |   诚信保障
     * authAll["isSellerCredit"]        |int    |   卖家认证
     * authAll["isBrandCredit"]         |int    |   品牌认证
     * authAll["isStoreShipping"]       |int    |   全店包邮
     * authAll["isHot"]                 |int    |   热销店铺认证
     * entityAuth                       |array  |   (实体认证)
     * entityAuth["authName"]           |string |   认证名称
     * entityAuth["authRank"]           |string |   认证等级
     * entityAuth["auditTime"]          |int    |   认证开始时间
     * entityAuth["expireTime"]         |int    |   认证结束时间
     * entityAuth["imagesArr"]          |array  |   认证图片数组
     * enterpriseAuth                   |array  |   (企业认证)
     * enterpriseAuth["authName"]       |string |   认证名称
     * enterpriseAuth["authRank"]       |string |   认证等级
     * enterpriseAuth["auditTime"]      |int    |   认证开始时间
     * enterpriseAuth["expireTime"]     |int    |   认证结束时间
     * enterpriseAuth["imagesArr"]      |array  |   认证图片数组
     * sellerAuth                       |array  |   (卖家认证)
     * sellerAuth["authName"]           |string |   认证名称
     * sellerAuth["authRank"]           |string |   认证等级
     * sellerAuth["auditTime"]          |int    |   认证开始时间
     * sellerAuth["expireTime"]         |int    |   认证结束时间
     * brandAuth                        |array  |   (品牌认证)
     * brandAuth["authName"]            |string |   认证名称
     * brandAuth["authRank"]            |string |   认证等级
     * brandAuth["auditTime"]           |int    |   认证开始时间
     * brandAuth["expireTime"]          |int    |   认证结束时间
     * cautionMoney                     |string |   诚信保障金 金额
     *
     * @throws StoreException
     *
     * @return array
     * @requestExample({"storeId":1})
     * @returnExample({"storeId":"1","storeName":"店铺名称","storeLogo":"https:\/\/img01.eelly.com\/G02\/M00\/00\/E9\/small_640_pIYBAFmS3KKIJNktAAN3bO9UX0YAABoNwFuSc8AA3eE62.jpeg","addTime":"1502278385","status":"1","creditValue":"0","tel":"13333333333","storeDesc":"","isMix":"0","mixNum":"0","mixMoney":"0","shopfront":"","dealIn":"男装 女装","goodsCount":0,"streetAddr":"黑龙江省双鸭山市宝山区十三行新中国大厦9层110A","creditInfo":"https:\/\/pifaquan.eelly.com\/Data\/image\/credit_icon\/s_red_1.png","authAll":{"isEntity":1,"isEnterprise":1,"returnGoodsStatus":0,"isRealShot":0,"isTimeShipping":0,"isIntegrity":0,"isSellerCredit":0,"isBrandCredit":0,"isStoreShipping":0,"isHot":0},"entityAuth":{"authName":"档口地址真实性认证","authRank":"中级认证","auditTime":1525107661,"expireTime":1538326861,"imagesArr":["https://img.eelly.com"]},"enterpriseAuth":{"authName":"企业身份真实性认证","authRank":"中级认证","auditTime":0,"expireTime":0,"imagesArr":["https://img.eelly.com"]},"sellerAuth":{"authName":"卖家身份真实性认证","authRank":"初级认证","auditTime":0,"expireTime":0},"brandAuth":{"authName":"品牌真实性认证","authRank":"高级认证","auditTime":0,"expireTime":0},"cautionMoney":""})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月24日
     */
    public function storeArchiveV2(int $storeId): array
    {
        return EellyClient::request('store/store', 'storeArchiveV2', true, $storeId);
    }

    /**
     * 店铺信息页--店铺档案【新版档案】.
     *
     * @param int $storeId      店铺id
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------------------------------|-------|--------------
     * storeId                          |string |   店铺id
     * storeName                        |string |   店铺名
     * storeLogo                        |string |   店铺logo
     * addTime                          |string |   开店时间
     * status                           |string |   店铺状态
     * creditValue                      |string |   店铺信誉值
     * tel                              |string |   店铺电话
     * storeDesc                        |string |   店铺描述
     * isMix                            |string |   是否混批
     * mixNum                           |string |   混批数量
     * mixMoney                         |string |   混批最大金额
     * shopfront                        |string |   店招
     * dealIn                           |string |   店铺主营
     * goodsCount                       |int    |   店铺商品数
     * streetAddr                       |string |   店铺地址
     * creditInfo                       |string |   店铺信誉值图片url
     * authAll                          |array  |   (店铺认证数组)
     * authAll["isEntity"]              |int    |   实体认证
     * authAll["isEnterprise"]          |int    |   企业认证
     * authAll["returnGoodsStatus"]     |int    |   48小时包退换认证
     * authAll["isRealShot"]            |int    |   商品实拍认证
     * authAll["isTimeShipping"]        |int    |   准时发货认证
     * authAll["isIntegrity"]           |int    |   诚信保障
     * authAll["isSellerCredit"]        |int    |   卖家认证
     * authAll["isBrandCredit"]         |int    |   品牌认证
     * authAll["isStoreShipping"]       |int    |   全店包邮
     * authAll["isHot"]                 |int    |   热销店铺认证
     * entityAuth                       |array  |   (实体认证)
     * entityAuth["authName"]           |string |   认证名称
     * entityAuth["authRank"]           |string |   认证等级
     * entityAuth["auditTime"]          |int    |   认证开始时间
     * entityAuth["expireTime"]         |int    |   认证结束时间
     * entityAuth["imagesArr"]          |array  |   认证图片数组
     * enterpriseAuth                   |array  |   (企业认证)
     * enterpriseAuth["authName"]       |string |   认证名称
     * enterpriseAuth["authRank"]       |string |   认证等级
     * enterpriseAuth["auditTime"]      |int    |   认证开始时间
     * enterpriseAuth["expireTime"]     |int    |   认证结束时间
     * enterpriseAuth["imagesArr"]      |array  |   认证图片数组
     * sellerAuth                       |array  |   (卖家认证)
     * sellerAuth["authName"]           |string |   认证名称
     * sellerAuth["authRank"]           |string |   认证等级
     * sellerAuth["auditTime"]          |int    |   认证开始时间
     * sellerAuth["expireTime"]         |int    |   认证结束时间
     * brandAuth                        |array  |   (品牌认证)
     * brandAuth["authName"]            |string |   认证名称
     * brandAuth["authRank"]            |string |   认证等级
     * brandAuth["auditTime"]           |int    |   认证开始时间
     * brandAuth["expireTime"]          |int    |   认证结束时间
     * cautionMoney                     |string |   诚信保障金 金额
     *
     * @throws StoreException
     *
     * @return array
     * @requestExample({"storeId":1})
     * @returnExample({"storeId":"1","storeName":"店铺名称","storeLogo":"https:\/\/img01.eelly.com\/G02\/M00\/00\/E9\/small_640_pIYBAFmS3KKIJNktAAN3bO9UX0YAABoNwFuSc8AA3eE62.jpeg","addTime":"1502278385","status":"1","creditValue":"0","tel":"13333333333","storeDesc":"","isMix":"0","mixNum":"0","mixMoney":"0","shopfront":"","dealIn":"男装 女装","goodsCount":0,"streetAddr":"黑龙江省双鸭山市宝山区十三行新中国大厦9层110A","creditInfo":"https:\/\/pifaquan.eelly.com\/Data\/image\/credit_icon\/s_red_1.png","authAll":{"isEntity":1,"isEnterprise":1,"returnGoodsStatus":0,"isRealShot":0,"isTimeShipping":0,"isIntegrity":0,"isSellerCredit":0,"isBrandCredit":0,"isStoreShipping":0,"isHot":0},"entityAuth":{"authName":"档口地址真实性认证","authRank":"中级认证","auditTime":1525107661,"expireTime":1538326861,"imagesArr":["https://img.eelly.com"]},"enterpriseAuth":{"authName":"企业身份真实性认证","authRank":"中级认证","auditTime":0,"expireTime":0,"imagesArr":["https://img.eelly.com"]},"sellerAuth":{"authName":"卖家身份真实性认证","authRank":"初级认证","auditTime":0,"expireTime":0},"brandAuth":{"authName":"品牌真实性认证","authRank":"高级认证","auditTime":0,"expireTime":0},"cautionMoney":""})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月24日
     */
    public function storeArchiveV2Async(int $storeId)
    {
        return EellyClient::request('store/store', 'storeArchiveV2', false, $storeId);
    }

    /**
     * 店铺评论接口.
     *
     * @param int $storeId  店铺id
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -----------------------|-------|--------------
     * storeId                |string | 店铺id
     * storeName              |string | 店铺名
     * storeLogo              |string | 店铺logo
     * addTime                |string | 开店时间
     * status                 |string | 店铺状态
     * creditInfo             |string | 店铺等级图片地址
     * streetAddr             |string | 店铺地址
     * tel                    |string | 店铺电话
     * GoodsEvaluation        |array  |
     * GoodsEvaluation["zg"]  |int    | 加工分
     * GoodsEvaluation["ml"]  |int    | 面料分
     * GoodsEvaluation["bx"]  |double | 版型分
     * GoodsEvaluation["com"] |double | 综合分
     * list                   |array  |
     * list["comment"]        |string | 商品评论
     * list["createdTime"]    |string | 商品评论时间
     * list["isAnonymous"]    |string | 是否匿名
     * list["isDefault"]      |string | 是否默认
     * list["goodsId"]        |string | 商品id
     * list["buyerName"]      |string | 买家用户名
     * list["buyerId"]        |string | 买家用户id
     * list["goodsImage"]     |string | 商品默认图
     * list["price"]          |string | 商品下单价格
     *
     * @return array
     * @requestExample({"storeId":1})
     * @returnExample({"storeId":"1","storeName":"店铺名称","storeLogo":"https:\/\/img01.eelly.com\/G02\/M00\/00\/E9\/small_640_pIYBAFmS3KKIJNktAAN3bO9UX0YAABoNwFuSc8AA3eE62.jpeg","addTime":"1502278385","status":"1","creditInfo":"https:\/\/pifaquan.eelly.com\/Data\/image\/credit_icon\/s_red_1.png","streetAddr":"黑龙江省双鸭山市宝山区十三行新中国大厦9层110A","tel":"13333333333","GoodsEvaluation":{"zg":3,"ml":3,"bx":3.3,"com":3.1},"list":[{"comment":"不好用","createdTime":"1511946394","isAnonymous":"1","isDefault":"1","goodsId":"2","buyerName":"匿名处理","buyerId":"2","goodsImage":null,"price":null},{"comment":"商品不错！","createdTime":"1511846394","isAnonymous":"0","isDefault":"1","goodsId":"3","buyerName":"呜呜二峨山","buyerId":"2","goodsImage":null,"price":null},{"comment":"好用哈哈哈","createdTime":"1511841630","isAnonymous":"0","isDefault":"1","goodsId":"1","buyerName":"呜呜二峨山","buyerId":"2","goodsImage":"G01\/M00\/01\/14\/oYYBAFndBNaIZ-lsAAAVS2gig-4AABr9QIY5KkAABVj276.jpg","price":"1258"}]})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月29日
     */
    public function getStoresEvaluation(int $storeId): array
    {
        return EellyClient::request('store/store', 'getStoresEvaluation', true, $storeId);
    }

    /**
     * 店铺评论接口.
     *
     * @param int $storeId  店铺id
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -----------------------|-------|--------------
     * storeId                |string | 店铺id
     * storeName              |string | 店铺名
     * storeLogo              |string | 店铺logo
     * addTime                |string | 开店时间
     * status                 |string | 店铺状态
     * creditInfo             |string | 店铺等级图片地址
     * streetAddr             |string | 店铺地址
     * tel                    |string | 店铺电话
     * GoodsEvaluation        |array  |
     * GoodsEvaluation["zg"]  |int    | 加工分
     * GoodsEvaluation["ml"]  |int    | 面料分
     * GoodsEvaluation["bx"]  |double | 版型分
     * GoodsEvaluation["com"] |double | 综合分
     * list                   |array  |
     * list["comment"]        |string | 商品评论
     * list["createdTime"]    |string | 商品评论时间
     * list["isAnonymous"]    |string | 是否匿名
     * list["isDefault"]      |string | 是否默认
     * list["goodsId"]        |string | 商品id
     * list["buyerName"]      |string | 买家用户名
     * list["buyerId"]        |string | 买家用户id
     * list["goodsImage"]     |string | 商品默认图
     * list["price"]          |string | 商品下单价格
     *
     * @return array
     * @requestExample({"storeId":1})
     * @returnExample({"storeId":"1","storeName":"店铺名称","storeLogo":"https:\/\/img01.eelly.com\/G02\/M00\/00\/E9\/small_640_pIYBAFmS3KKIJNktAAN3bO9UX0YAABoNwFuSc8AA3eE62.jpeg","addTime":"1502278385","status":"1","creditInfo":"https:\/\/pifaquan.eelly.com\/Data\/image\/credit_icon\/s_red_1.png","streetAddr":"黑龙江省双鸭山市宝山区十三行新中国大厦9层110A","tel":"13333333333","GoodsEvaluation":{"zg":3,"ml":3,"bx":3.3,"com":3.1},"list":[{"comment":"不好用","createdTime":"1511946394","isAnonymous":"1","isDefault":"1","goodsId":"2","buyerName":"匿名处理","buyerId":"2","goodsImage":null,"price":null},{"comment":"商品不错！","createdTime":"1511846394","isAnonymous":"0","isDefault":"1","goodsId":"3","buyerName":"呜呜二峨山","buyerId":"2","goodsImage":null,"price":null},{"comment":"好用哈哈哈","createdTime":"1511841630","isAnonymous":"0","isDefault":"1","goodsId":"1","buyerName":"呜呜二峨山","buyerId":"2","goodsImage":"G01\/M00\/01\/14\/oYYBAFndBNaIZ-lsAAAVS2gig-4AABr9QIY5KkAABVj276.jpg","price":"1258"}]})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月29日
     */
    public function getStoresEvaluationAsync(int $storeId)
    {
        return EellyClient::request('store/store', 'getStoresEvaluation', false, $storeId);
    }

    /**
     * 获取店铺接口公共信息.
     *
     * @param int   $storeId                   店铺id
     * @param array $condition                 条件数组
     * @param int   $condition["addressStyle"] 店铺地址格式
     *
     * @throws StoreException
     *
     * @return array
     * @requestExample({"storeId":1,"condition":{"addressStyle":3}})
     * @returnExample()
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017年12月1日
     */
    public function getStoreCommon(int $storeId, array $condition = []): array
    {
        return EellyClient::request('store/store', 'getStoreCommon', true, $storeId, $condition);
    }

    /**
     * 获取店铺接口公共信息.
     *
     * @param int   $storeId                   店铺id
     * @param array $condition                 条件数组
     * @param int   $condition["addressStyle"] 店铺地址格式
     *
     * @throws StoreException
     *
     * @return array
     * @requestExample({"storeId":1,"condition":{"addressStyle":3}})
     * @returnExample()
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017年12月1日
     */
    public function getStoreCommonAsync(int $storeId, array $condition = [])
    {
        return EellyClient::request('store/store', 'getStoreCommon', false, $storeId, $condition);
    }

    /**
     * 获取商城登录店铺信息
     *
     * @param int $userId
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-10-17
     */
    public function getMallLoginStore(int $userId): array
    {
        return EellyClient::request('store/store', 'getMallLoginStore', true, $userId);
    }

    /**
     * 获取商城登录店铺信息
     *
     * @param int $userId
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-10-17
     */
    public function getMallLoginStoreAsync(int $userId)
    {
        return EellyClient::request('store/store', 'getMallLoginStore', false, $userId);
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