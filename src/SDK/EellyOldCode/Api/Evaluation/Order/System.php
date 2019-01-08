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

namespace Eelly\SDK\EellyOldCode\Api\Evaluation\Order;

use Eelly\SDK\EellyClient;

/**
 * Class Evaluation.
 *
 */
class System
{
    /**
     * 订单自动评价.
     * 
     * @throws \ErrorException
     */
    public function orderAutoEvaluation()
    {
        return EellyClient::request('eellyOldCode/evaluation/order/system', __FUNCTION__, true);
    }
    
    /**
     * 订单评价生效.
     * 
     * @throws \ErrorException
     */
    public function orderEvaluationEffective()
    {
        return EellyClient::request('eellyOldCode/evaluation/order/system', __FUNCTION__, true);
    }
}
