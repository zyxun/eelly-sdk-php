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

namespace Eelly\SDK\Service\Service;

use Eelly\DTO\UidDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface BuyInterface
{
    /**
     * 新增一条服务购买记录.
     *
     * @param array  $data                                                                     购买增值服务数据
     * @param int    $data['user_id']用户ID
     * @param int    $data['store_id']店铺ID
     * @param int    $data['sl_id']服务清单ID
     * @param array  $data['name']服务名称
     * @param int    $data['number']数量设置：对应计数模式的数量；0为无限制
     * @param int    $data['money']收费金额：单位为分
     * @param int    $data['discount']0<=X<=1，0和1都表示无折扣
     * @param int    $data['time_limit']服务期限：表示N个月，大于0
     * @param int    $data['model']数模式：1                                               服务期内 2 每月 4 每日，全部模式：1+2+4=7
     * @param int    $data['from_type']来源类型：1                                        购买合同版本 2 购买服务 3 赠送服务
     * @param int    $data['pay_source']付款来源：1                                       在线付款 2 线下付款 3 免费赠送
     * @param int    $data['pr_id']pay_record表主键
     * @param int    $data['salesperson_id']销售员工ID
     * @param int    $data['expire_time']服务到期时间
     * @param array  $data['remark']备注
     * @param UidDTO $user                                                                     登录用户对象
     *
     * @throws Eelly\SDK\Service\Exception\BuyException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\BuyException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\BuyException 703001 插入数据失败
     *
     * @return bool
     *
     * @requestExample({"data":{"user_id":1,"store_id":"\u5b9e\u4f53\u8ba4\u8bc1","sl_id":0,"name":1,"number":7,"money":"service_entity","discount":1,"time_limit":1,"model":"\u5b9e\u4f53\u8ba4\u8bc1","used_number":0,"from_type":1,"pay_source":7,"pr_id":"service_entity","pay_type":1,"salesperson_id":1,"expire_time":7,"remark":"service_entity"}})
     * @returnExample(true)
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function addBuy(array $data, UidDTO $user = null): bool;

    /**
     * 获取一条服务购买记录.
     *
     * @param int $sbId    购买的店铺ID
     * @param int $storeId 购买的店铺ID
     * @param int $userId  购买的用户ID
     *
     * @throws Eelly\SDK\Service\Exception\BuyException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\BuyException 702001 数据不存在
     *
     * @return array
     *
     * @requestExample({"sbId":1,"storeId":10086,"userId":1})
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function getBuy(int $sbId, int $storeId = null, int $userId = null): array;

    /**
     * 获取服务购买记录列表.
     *
     * @param int $storeId     购买的店铺ID
     * @param int $userId      购买的用户ID
     * @param int $limit       每页页数
     * @param int $currentPage 当前页
     *
     * @throws Eelly\SDK\Service\Exception\BuyException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\BuyException 702001 数据不存在
     *
     * @return array
     *
     * @requestExample({"storeId":1,"userId":1,"limit":10,"currentPage":1})
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function listBuyPage(int $storeId = null, int $userId =null,int $currentPage = 1, int $limit = 10):array;

}

