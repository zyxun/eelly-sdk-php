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

use Eelly\SDK\EellyClient;
use Eelly\SDK\Service\Service\CompanyInterface;
use Eelly\DTO\UidDTO;
use Eelly\SDK\Service\DTO\CompanyDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Company implements CompanyInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getCompany(int $storeId): CompanyDTO
    {
        return EellyClient::request('service/Company', 'getCompany', $storeId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addCompany(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Company', 'addCompany', $data, $user);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateCompany(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Company', 'updateCompany', $data, $user);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function checkCompany(int $storeId, UidDTO $user = null): bool
    {
        return EellyClient::request('service/Company', 'checkCompany', $storeId);
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
