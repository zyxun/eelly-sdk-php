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
interface AppealInterface
{
    /**
     * 店铺申诉
     * 店铺对投诉举报进行申诉.
     *
     * @param int    $complainId 投诉举报id
     * @param string $content    申诉内容
     * @param string $evidence   申诉证据
     * @param UidDTO $user       登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 申诉提交结果
     * @requestExample({"complainId":1, "content":"申诉内容", "evidence":"申诉证据"})
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-17
     */
    public function addStoreAppeal(int $complainId, string $content, string $evidence, UidDTO $user = null): bool;

    /**
     * 撤销店铺申诉
     * 卖家撤销店铺的投诉举报申诉.
     *
     * @param int    $storeId  店铺id
     * @param int    $appealId 申诉id
     * @param UidDTO $user     登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 撤销的结果
     * @requestExample({"appealId":1})
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-17
     */
    public function deleteStoreAppeal(int $storeId, int $appealId, UidDTO $user = null): bool;

    /**
     * 获取店铺的申诉信息
     * 分页获取店铺的投诉举报申诉信息列表.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------------------|-------|--------------
     * items                   |array  |申诉信息
     * items[appealId]         |int    |申诉id
     * items[dimension]        |int    |投诉举报的维度：1 店铺 2 交易 3 商品
     * items[complainContent]  |string |投诉举报内容
     * items[complainEvidence] |string |投诉举报证据
     * items[appealContent]    |string |申诉内容
     * items[appealEvidence]   |string |申诉证据
     * items[status]           |int    |申诉状态：0 待处理 1 申诉撤销 2 申诉成功 3 申诉失败
     * items[createdTime]      |string |申诉时间
     * currentPage             |int    |当前页数
     * totalPage               |int    |总页数
     * totalItems              |int    |总数据数
     *
     * @param int $storeId   店铺id
     * @param int $dimension 投诉举报维度1店铺2交易3商品
     * @param int $status    申诉状态 -1全部0待申诉1申请申诉2申诉成功3申诉失败
     * @param int $page      页数
     * @param int $limit     每页数据返回的数量
     * @param UidDTO $user     登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array
     * @requestExample({"storeId":123,"dimension":1,"status":-1,"page":1,"limit":10})
     * @returnExample({
     * "items":[{
     *      "appealId":1,
     *      "dimension":1,
     *      "complainContent":"投诉举报内容",
     *      "complainEvidence":"投诉举报证据",
     *      "appealContent":"申诉内容",
     *      "appealEvidence":"申诉证据",
     *      "status":1,
     *      "createdTime":"2017-01-01 12:12:12"
     *      }],
     * "currentPage":1,
     * "totalPage":2,
     * "totalItems":2
     * })
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017-08-16
     */
    public function listStoreAppealPage(int $storeId, int $dimension, int $status = -1, int $page = 1, int $limit = 10, UidDTO $user = null): array;
}
