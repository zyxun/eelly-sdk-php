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

namespace Eelly\SDK\EellyOldCode\Api\Evaluation;

use Eelly\SDK\EellyClient;

/**
 * Class Evaluation.
 *
 * modules/Evaluation/Service/EvaluationService.php
 */
class Evaluation
{
    /**
     * @param int $storeId
     *
     * @throws \ErrorException
     */
    public function storesEvaluation(int $storeId): void
    {
        return EellyClient::request('eellyOldCode/evaluation/evaluation', __FUNCTION__, true, $storeId);
    }
}
