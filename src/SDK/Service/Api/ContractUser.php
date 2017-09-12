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
use Eelly\SDK\Service\DTO\ContractUserDTO;
use Eelly\SDK\Service\Service\ContractUserInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class ContractUser implements ContractUserInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getContractUser(int $scId, UidDTO $user = null): ContractUserDTO
    {
        return EellyClient::request('service/ContractUser', 'getContractUser', $scId, $user);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addContractUser(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/ContractUser', 'addContractUser', $data, $user);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateContractUser(int $scId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/ContractUser', 'updateContractUser', $scId, $data, $user);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listContractUserPage(array $condition = [], int $currentPage = 1, int $limit = 10, UidDTO $user = null): array
    {
        return EellyClient::request('service/ContractUser', 'listContractUserPage', $condition, $currentPage, $limit);
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
