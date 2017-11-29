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
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class EvaluationGoodsComment implements EvaluationGoodsCommentInterface
{
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

    /**
     * 获取店铺的商品评价内容.
     *
     * @param int $storeId                  店铺id
     * @param array $condition              额外条件
     * @param int $condition["page"]        当前页数
     * @param int $condition["addTime"]     评论添加时间
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
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月29日
     */
    public function getStoreGoodsEvaluation(int $storeId, array $condition = []): array
    {
        return EellyClient::request('order/evaluationGoodsComment', __FUNCTION__, true, $storeId, $condition);
    }

}