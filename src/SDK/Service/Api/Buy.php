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

namespace Eelly\SDK\Service\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Service\Service\BuyInterface;
use Eelly\SDK\Service\DTO\BuyDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Buy
{
    /**
     * 获取一条服务购买记录.
     *
     * @param int $sbId 服务购买记录id
     *
     * @throws \Eelly\SDK\Service\Exception\BuyException
     *
     * @return BuyDTO
     *
     * @requestExample({"sbId":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-23
     */
    public function getBuy(int $sbId): BuyDTO
    {
        return EellyClient::request('service/buy', __FUNCTION__, true, $sbId);
    }

    /**
     * 获取一条服务购买记录.
     *
     * @param int $sbId 服务购买记录id
     *
     * @throws \Eelly\SDK\Service\Exception\BuyException
     *
     * @return BuyDTO
     *
     * @requestExample({"sbId":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-23
     */
    public function getBuyAsync(int $sbId)
    {
        return EellyClient::request('service/buy', __FUNCTION__, false, $sbId);
    }

    /**
     * 新增一条服务购买记录.
     *
     * @param array  $data                  新增数据
     * @param int    $data['userId']        用户ID
     * @param int    $data['storeId']       店铺ID
     * @param int    $data['slId']          服务清单ID
     * @param string $data['name']          服务名称
     * @param int    $data['number']        数量设置：对应计数模式的数量；0为无限制
     * @param int    $data['money']         收费金额：单位为分
     * @param float  $data['discount']      折扣：0<=X<=1，0和1都表示无折扣
     * @param int    $data['timeLimit']     服务期限：表示N个月，大于0
     * @param int    $data['model']         计数模式：1 服务期内 2 每月 4 每日，全部模式：1+2+4=7
     * @param int    $data['usedNumber']    总使用过的数量（次数）
     * @param int    $data['fromType']      来源类型：1 购买合同版本 2 购买服务 3 赠送服务
     * @param int    $data['paySource']     付款来源：1 在线付款 2 线下付款 3 免费赠送
     * @param int    $data['prId']          ecm_pay_record表主键（待定）
     * @param int    $data['payType']       支付类型：1 储蓄卡 2 信用卡 3 支付宝余额 4 微信 5 银联 6 微信扫一扫 7 现金
     * @param int    $data['salespersonId'] 销售员工ID
     * @param int    $data['expireTime']    服务到期时间
     * @param string $data['remark']        备注
     * @param UidDTO $user                  登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\BuyException
     *
     * @return bool 新增结果
     *
     * @requestExample({"data":{"userId":1,"storeId":"\u5b9e\u4f53\u8ba4\u8bc1","slId":0,"name":1,"number":7,"money":1,"discount":1,"timeLimit":1,"model":"service_entity","usedNumber":0,"fromType":1,"paySource":7,"prId":1,"payType":1,"salespersonId":1,"expireTime":7,"remark":"备注"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-23
     */
    public function addBuy(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/buy', __FUNCTION__, true, $data, $user);
    }

    /**
     * 新增一条服务购买记录.
     *
     * @param array  $data                  新增数据
     * @param int    $data['userId']        用户ID
     * @param int    $data['storeId']       店铺ID
     * @param int    $data['slId']          服务清单ID
     * @param string $data['name']          服务名称
     * @param int    $data['number']        数量设置：对应计数模式的数量；0为无限制
     * @param int    $data['money']         收费金额：单位为分
     * @param float  $data['discount']      折扣：0<=X<=1，0和1都表示无折扣
     * @param int    $data['timeLimit']     服务期限：表示N个月，大于0
     * @param int    $data['model']         计数模式：1 服务期内 2 每月 4 每日，全部模式：1+2+4=7
     * @param int    $data['usedNumber']    总使用过的数量（次数）
     * @param int    $data['fromType']      来源类型：1 购买合同版本 2 购买服务 3 赠送服务
     * @param int    $data['paySource']     付款来源：1 在线付款 2 线下付款 3 免费赠送
     * @param int    $data['prId']          ecm_pay_record表主键（待定）
     * @param int    $data['payType']       支付类型：1 储蓄卡 2 信用卡 3 支付宝余额 4 微信 5 银联 6 微信扫一扫 7 现金
     * @param int    $data['salespersonId'] 销售员工ID
     * @param int    $data['expireTime']    服务到期时间
     * @param string $data['remark']        备注
     * @param UidDTO $user                  登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\BuyException
     *
     * @return bool 新增结果
     *
     * @requestExample({"data":{"userId":1,"storeId":"\u5b9e\u4f53\u8ba4\u8bc1","slId":0,"name":1,"number":7,"money":1,"discount":1,"timeLimit":1,"model":"service_entity","usedNumber":0,"fromType":1,"paySource":7,"prId":1,"payType":1,"salespersonId":1,"expireTime":7,"remark":"备注"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-23
     */
    public function addBuyAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('service/buy', __FUNCTION__, false, $data, $user);
    }

    /**
     * 获取服务购买记录列表.
     *
     * @param int $storeId     购买的店铺ID
     * @param int $userId      购买的用户ID
     * @param int $currentPage 当前页
     * @param int $limit       每页页数
     *
     * @throws \Eelly\SDK\Service\Exception\BuyException
     *
     * @return array
     *
     * @requestExample({"storeId":1,"userId":1,"limit":10,"currentPage":1})
     * @returnExample({"items":[{"sbId":"1","userId":"1","storeId":"1","slId":"1","name":"dasdas","number":"1","money":1,"discount":5,"timeLimit":"2","model":"1","usedNumber":"0","fromType":"1","paySource":"0","prId":"0","payType":"0","salespersonId":"0","expireTime":"1511417414","remark":"","createdTime":"1506139016"}],"page":{"totalPages":1,"totalItems":1,"limit":10}})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-23
     */
    public function listBuyPage(int $storeId = null, int $userId = null, int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('service/buy', __FUNCTION__, true, $storeId, $userId, $currentPage, $limit);
    }

    /**
     * 获取服务购买记录列表.
     *
     * @param int $storeId     购买的店铺ID
     * @param int $userId      购买的用户ID
     * @param int $currentPage 当前页
     * @param int $limit       每页页数
     *
     * @throws \Eelly\SDK\Service\Exception\BuyException
     *
     * @return array
     *
     * @requestExample({"storeId":1,"userId":1,"limit":10,"currentPage":1})
     * @returnExample({"items":[{"sbId":"1","userId":"1","storeId":"1","slId":"1","name":"dasdas","number":"1","money":1,"discount":5,"timeLimit":"2","model":"1","usedNumber":"0","fromType":"1","paySource":"0","prId":"0","payType":"0","salespersonId":"0","expireTime":"1511417414","remark":"","createdTime":"1506139016"}],"page":{"totalPages":1,"totalItems":1,"limit":10}})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-23
     */
    public function listBuyPageAsync(int $storeId = null, int $userId = null, int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('service/buy', __FUNCTION__, false, $storeId, $userId, $currentPage, $limit);
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