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
 * 店铺投诉举报.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ComplainInterface
{
    /**
     * 店铺投诉举报
     * 对店铺、店铺商品、店铺订单进行投诉举报.
     *
     * @param array  $complainData              投诉举报信息
     * @param int    $complainData['storeId']   店铺id
     * @param int    $complainData['dimension'] 投诉举报的维度1店铺2交易3商品
     * @param int    $complainData['type']      投诉举报类型(对应不同维度的不同值)
     * @param int    $complainData['itemId']    投诉举报的对象id
     * @param string $complainData['username']  投诉人姓名
     * @param string $complainData['phone']     投诉人联系方式
     * @param string $complainData['qq']        投诉人QQ
     * @param string $complainData['content']   投诉举报内容
     * @param string $complainData['evidence']  投诉举报的证据
     * @param UidDTO $user                      登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 投诉举报的结果
     * @requestExample({"complainData":{"storeId":1, "dimension":1,"type":2,"itemId":22,"username":"投诉举报人","phone":"123456789","qq":"123456","content":"投诉举报内容","evidence":"投诉举报证据"}})
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-16
     */
    public function addStoreComplain(array $complainData, UidDTO $user = null): bool;

    /**
     * 撤销投诉举报
     * 撤销对店铺的投诉举报.
     *
     * @param int    $complainId 投诉举报id
     * @param UidDTO $user       登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 撤销结果
     * @requestExample({"complainId":1})
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-16
     */
    public function deleteStoreComplain(int $complainId, UidDTO $user = null): bool;

    /**
     * 获取店铺的投诉举报信息.
     *
     * 分页获取店铺的投诉举报信息列表.
     *
     * ### 返回数据说明
     *
     *  字段         |类型   |说明
     *  ------------|-------|--------------------------------------------------
     *  complainId  |int    |店铺投诉举报ID
     *  dimension   |int    |投诉举报的维度：1 店铺 2 交易 3 商品
     *  content     |string |投诉举报内容
     *  evidence    |string |投诉举报证据
     *  status      |int    |投诉举报的状态：0 待跟进1 已跟进 2 买家撤销 3 成立 4 不成立
     *  appealFlag  |int    |申诉标识：0 未申诉 1 已申诉
     *  createdTime |string |建立时间
     *
     * @param int    $storeId   店铺id
     * @param int    $dimension 投诉举报维度1店铺2交易3商品
     * @param int    $page      页数
     * @param UidDTO $user      登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array 投诉举报信息列表
     *
     * @requestExample({"storeId":123,"dimension":1,"page":1})
     *
     * @returnExample([{
     *     "complainId":1,
     *     "dimension":1,
     *     "content":"投诉举报内容",
     *     "evidence":"投诉举报证据",
     *     "status":1,
     *     "appealFlag":1,
     *     "createdTime":"2017-01-01 12:12:12"
     * }])
     *
     * @author wang jiang<wangjiang@eelly.net>
     * @author laravel jun<laraveljun@eelly.net>
     *
     * @since 2017-08-16
     */
    public function listStoreComplainPage(int $storeId, int $dimension, int $page = 1, UidDTO $user = null): array;
}
