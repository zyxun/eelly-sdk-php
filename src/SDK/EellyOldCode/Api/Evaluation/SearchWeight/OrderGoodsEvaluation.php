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

namespace Eelly\SDK\EellyOldCode\Api\Evaluation\SearchWeight;

use Eelly\SDK\EellyClient;

/**
 * Class OrderGoodsEvaluation.
 *
 * var/eelly-old-code/modules/Evaluation/Service/SearchWeight/OrderGoodsEvaluationService.php
 *
 * @author hehui<hehui@eelly.net>
 */
class OrderGoodsEvaluation
{
    /**
     * @param $goodsId
     * @param $page
     * @param $pageSize
     *
     * @throws \ErrorException
     *
     * @return mixed
     */
    public function getApiGoodsEvaluation($goodsId, $page, $pageSize)
    {
        return EellyClient::request('eellyOldCode/evaluation/searchWeight/orderGoodsEvaluation', __FUNCTION__, true, $goodsId, $page, $pageSize);
    }
}
