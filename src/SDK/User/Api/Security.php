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

namespace Eelly\SDK\User\Api;

use Eelly\DTO\SecurityDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\SecurityInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Security implements SecurityInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSecurity(int $SecurityId): SecurityDTO
    {
        return EellyClient::request('user/security', 'getSecurity', $SecurityId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSecurity(array $data): bool
    {
        return EellyClient::request('user/security', 'addSecurity', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSecurity(int $SecurityId, array $data): bool
    {
        return EellyClient::request('user/security', 'updateSecurity', $SecurityId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSecurity(int $SecurityId): bool
    {
        return EellyClient::request('user/security', 'deleteSecurity', $SecurityId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSecurityPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('user/security', 'listSecurityPage', $condition, $limit, $currentPage);
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
