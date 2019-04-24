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

namespace Eelly\SDK\Order\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Order\Service\EvaluationGoodsCommentInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class EvaluationGoodsComment
{
    /**
     * 获取店铺的商品评价内容.
     *
     * @param int   $storeId              店铺id
     * @param array $condition            额外条件
     * @param int   $condition["page"]    当前页数
     * @param int   $condition["addTime"] 评论添加时间
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------------------|-------|--------------
     * items                |array  |
     * items["comment"]     |string |   评论内容
     * items["createdTime"] |string |   评论时间
     * items["isAnonymous"] |string |   是否匿名
     * items["isDefault"]   |string |   是否默认
     * items["goodsId"]     |string |   商品id
     * items["buyerName"]   |string |   买家名称
     * items["buyerId"]     |string |   买家id
     * items["goodsImage"]  |string |   商品默认图
     * items["price"]       |string |   商品价格
     * page                 |array  |
     * page["totalPages"]   |int    |   总页数
     * page["totalItems"]   |int    |   总数据量
     * page["limit"]        |int    |   每页数量
     *
     * @return array
     * @requestExample({"storeId":1,"condition":{"page":1,"addTime":1511841630}})
     * @returnExample({"items":[{"comment":"不好用","createdTime":"1511946394","isAnonymous":"1","isDefault":"1","goodsId":"2","buyerName":"匿名处理","buyerId":"2","goodsImage":"G01\/M00\/01\/14\/oYYBAFndBNaIZ-lsAAAVS2gig-4AABr9QIY5KkAABVj276.jpg","price":"2600"},{"comment":"商品不错！","createdTime":"1511846394","isAnonymous":"0","isDefault":"1","goodsId":"3","buyerName":"呜呜二峨山","buyerId":"2","goodsImage":"G01\/M00\/01\/14\/oYYBAFndBNaIZ-lsAAAVS2gig-4AABr9QIY5KkAABVj276.jpg","price":"2565"},{"comment":"好用哈哈哈","createdTime":"1511841630","isAnonymous":"0","isDefault":"1","goodsId":"1","buyerName":"呜呜二峨山","buyerId":"2","goodsImage":"G01\/M00\/01\/14\/oYYBAFndBNaIZ-lsAAAVS2gig-4AABr9QIY5KkAABVj276.jpg","price":"1258"}],"page":{"totalPages":1,"totalItems":3,"limit":10}})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017年11月29日
     * @validation(
     *     @digit(0,{message:"非法的店铺id类型"})
     * )
     */
    public function getStoreGoodsEvaluation(int $storeId, array $condition = []): array
    {
        return EellyClient::request('order/evaluationGoodsComment', 'getStoreGoodsEvaluation', true, $storeId, $condition);
    }

    /**
     * 获取店铺的商品评价内容.
     *
     * @param int   $storeId              店铺id
     * @param array $condition            额外条件
     * @param int   $condition["page"]    当前页数
     * @param int   $condition["addTime"] 评论添加时间
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------------------|-------|--------------
     * items                |array  |
     * items["comment"]     |string |   评论内容
     * items["createdTime"] |string |   评论时间
     * items["isAnonymous"] |string |   是否匿名
     * items["isDefault"]   |string |   是否默认
     * items["goodsId"]     |string |   商品id
     * items["buyerName"]   |string |   买家名称
     * items["buyerId"]     |string |   买家id
     * items["goodsImage"]  |string |   商品默认图
     * items["price"]       |string |   商品价格
     * page                 |array  |
     * page["totalPages"]   |int    |   总页数
     * page["totalItems"]   |int    |   总数据量
     * page["limit"]        |int    |   每页数量
     *
     * @return array
     * @requestExample({"storeId":1,"condition":{"page":1,"addTime":1511841630}})
     * @returnExample({"items":[{"comment":"不好用","createdTime":"1511946394","isAnonymous":"1","isDefault":"1","goodsId":"2","buyerName":"匿名处理","buyerId":"2","goodsImage":"G01\/M00\/01\/14\/oYYBAFndBNaIZ-lsAAAVS2gig-4AABr9QIY5KkAABVj276.jpg","price":"2600"},{"comment":"商品不错！","createdTime":"1511846394","isAnonymous":"0","isDefault":"1","goodsId":"3","buyerName":"呜呜二峨山","buyerId":"2","goodsImage":"G01\/M00\/01\/14\/oYYBAFndBNaIZ-lsAAAVS2gig-4AABr9QIY5KkAABVj276.jpg","price":"2565"},{"comment":"好用哈哈哈","createdTime":"1511841630","isAnonymous":"0","isDefault":"1","goodsId":"1","buyerName":"呜呜二峨山","buyerId":"2","goodsImage":"G01\/M00\/01\/14\/oYYBAFndBNaIZ-lsAAAVS2gig-4AABr9QIY5KkAABVj276.jpg","price":"1258"}],"page":{"totalPages":1,"totalItems":3,"limit":10}})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     *
     * @since  2017年11月29日
     * @validation(
     *     @digit(0,{message:"非法的店铺id类型"})
     * )
     */
    public function getStoreGoodsEvaluationAsync(int $storeId, array $condition = [])
    {
        return EellyClient::request('order/evaluationGoodsComment', 'getStoreGoodsEvaluation', false, $storeId, $condition);
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
