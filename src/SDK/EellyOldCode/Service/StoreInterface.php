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

namespace Eelly\SDK\EellyOldCode\Service;

interface StoreInterface
{
    /**
     * 获取店铺信息.
     *
     * @param int $storeId
     *
     * @return array
     */
    public function getOne(int $storeId): array;
}
