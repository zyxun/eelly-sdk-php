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

namespace Eelly\SDK\System\Api;

use Eelly\DTO\ValueDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\ValueInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Value implements ValueInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getValue(int $ValueId): ValueDTO
    {
        return EellyClient::request('system/value', 'getValue', $ValueId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addValue(array $data): bool
    {
        return EellyClient::request('system/value', 'addValue', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateValue(int $ValueId, array $data): bool
    {
        return EellyClient::request('system/value', 'updateValue', $ValueId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteValue(int $ValueId): bool
    {
        return EellyClient::request('system/value', 'deleteValue', $ValueId);
    }

    /**
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
