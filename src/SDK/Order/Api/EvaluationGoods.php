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
use Eelly\SDK\Order\Service\EvaluationGoodsInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class EvaluationGoods implements EvaluationGoodsInterface
{

    /**
     * 统计订单商品评价分.
     *
     * @param int $storeId  店铺id
     *
     * @return array
     * @requestExample({"storeId":1})
     * @returnExample({"zg":3,"ml":3,"bx":3.3,"com":3.1})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月29日
     * @validation(
     *     @digit(0,{message:"非法的店铺id类型"})
     * )
     */
    public function countGoodsEvaluation(int $storeId): array
    {
        return EellyClient::request('order/evaluationGoods', __FUNCTION__, true, $storeId);
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