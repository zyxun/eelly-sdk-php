<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Service;

use Eelly\DTO\CallbackAdjustDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CallbackAdjustInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCallbackAdjust(int $callbackAdjustId): CallbackAdjustDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCallbackAdjust(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCallbackAdjust(int $callbackAdjustId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCallbackAdjust(int $callbackAdjustId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCallbackAdjustPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}