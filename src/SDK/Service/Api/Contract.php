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
use Eelly\SDK\Service\DTO\ContractDTO;
use Eelly\SDK\Service\Service\ContractInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Contract implements ContractInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getContract(int $scId, UidDTO $user = null): ContractDTO
    {
        return EellyClient::request('service/Contract', 'getContract', $scId, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addContract(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Contract', 'addContract', $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateContract(int $scId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Contract', 'updateContract', $scId, $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listContractPage(array $condition = [], int $currentPage = 1, int $limit = 10, UidDTO $user = null): array
    {
        return EellyClient::request('service/Contract', 'listContractPage', $condition, $currentPage, $limit);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function changeContractStatus(int $scId, int $status, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Contract', 'checkContract', $scId, $status, $user);
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
