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

namespace Eelly\SDK\Pay\Service;

use Eelly\DTO\CallbackAdjustDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CallbackAdjustInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCallbackAdjust(int $callbackAdjustId): CallbackAdjustDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCallbackAdjust(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCallbackAdjust(int $callbackAdjustId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCallbackAdjust(int $callbackAdjustId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCallbackAdjustPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
