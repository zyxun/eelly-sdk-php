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

use Eelly\DTO\CallbackDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CallbackInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCallback(int $callbackId): CallbackDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCallback(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCallback(int $callbackId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteCallback(int $callbackId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listCallbackPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}