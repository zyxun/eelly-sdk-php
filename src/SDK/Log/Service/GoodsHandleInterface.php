<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Log\Service;

use Eelly\SDK\Log\DTO\GoodsHandleDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface GoodsHandleInterface
{

    /**
     * 获取一条商品操作日志.
     *
     * @param int $goodsHandleId 商品操作日志ID
     *
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     *
     * @return GoodsHandleDTO
     * @requestExample({goodsHandleId:1})
     * @returnExample({"lghId":1,"type":"1", "goodsId":"1","name":"商品名称","adminId":"1","remark":{'handle_page':'index.html',"createdTime":"2017-09-02 17:45:21"}})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月04日
     */
     public function getGoodsHandle(int $goodsHandleId): GoodsHandleDTO ;

    /**
     * 商品操作日志.
     *
     * @param array $data 日志数据
     * @param int $data ['type'] 商品操作类型
     * @param int $data ['goodsId'] 商品ID
     * @param string $data ['name'] 商品名
     * @param int $data ['adminId'] 管理员ID
     * @param string $data ['adminName'] 管理员名
     * @param string $data ['remark']  备注 json 格式保存为了以后查询方便
     *
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     * @return bool true|false
     * @requestExample({"type":{"type":"1", "goodsId":"商品ID不能为空","adminId":"1","remark":{'handle_page':'index.html'} }})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年08月26日
     */
    public function addGoodsHandle(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function updateGoodsHandle(int $GoodsHandleId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function deleteGoodsHandle(int $GoodsHandleId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function listGoodsHandlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}