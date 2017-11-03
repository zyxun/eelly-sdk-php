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

namespace Eelly\SDK\Service\Api;

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Service\DTO\ContractNumberDTO;
use Eelly\SDK\Service\Service\ContractNumberInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class ContractNumber implements ContractNumberInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getContractNumber(int $scnId): ContractNumberDTO
    {
        return EellyClient::request('service/ContractNumber', 'getContractNumber', $scnId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addContractNumber(int $scId, int $number, UidDTO $user = null): bool
    {
        return EellyClient::request('service/ContractNumber', 'addContractNumber', $scId, $number, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listContractNumberPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('service/ContractNumber', 'listContractNumberPage', $condition, $currentPage, $limit);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function unbindContractNumber(int $scnId, UidDTO $user = null): bool
    {
        return EellyClient::request('service/ContractNumber', 'updateContractNumber', $scnId, $user);
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
