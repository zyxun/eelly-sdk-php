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

namespace Eelly\SDK\EellyOldCode\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\EellyOldCode\Service\StoreInterface;

class Store implements StoreInterface
{
    /**
     * {@inheritdoc}
     */
    public function getOne(int $storeId): array
    {
        return EellyClient::request('eellyOldCode/Store', __FUNCTION__, true, $storeId);
    }
}
