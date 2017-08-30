<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\GbInterface;
use Eelly\DTO\GbDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Gb implements GbInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGb(int $GbId): GbDTO
    {
        return EellyClient::request('system/gb', 'getGb', $GbId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGb(array $data): bool
    {
        return EellyClient::request('system/gb', 'addGb', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGb(int $GbId, array $data): bool
    {
        return EellyClient::request('system/gb', 'updateGb', $GbId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGb(int $GbId): bool
    {
        return EellyClient::request('system/gb', 'deleteGb', $GbId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGbPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/gb', 'listGbPage', $condition, $limit, $currentPage);
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