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
use Eelly\SDK\System\Service\ValueInterface;
use Eelly\DTO\ValueDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Value implements ValueInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getValue(int $ValueId): ValueDTO
    {
        return EellyClient::request('system/value', 'getValue', $ValueId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addValue(array $data): bool
    {
        return EellyClient::request('system/value', 'addValue', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateValue(int $ValueId, array $data): bool
    {
        return EellyClient::request('system/value', 'updateValue', $ValueId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteValue(int $ValueId): bool
    {
        return EellyClient::request('system/value', 'deleteValue', $ValueId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listValuePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('system/value', 'listValuePage', $condition, $limit, $currentPage);
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