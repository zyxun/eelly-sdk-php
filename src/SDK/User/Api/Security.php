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

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\SecurityInterface;
use Eelly\DTO\SecurityDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Security implements SecurityInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSecurity(int $SecurityId): SecurityDTO
    {
        return EellyClient::request('user/security', __FUNCTION__, true, $SecurityId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSecurityAsync(int $SecurityId)
    {
        return EellyClient::request('user/security', __FUNCTION__, false, $SecurityId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSecurity(array $data): bool
    {
        return EellyClient::request('user/security', __FUNCTION__, true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSecurityAsync(array $data)
    {
        return EellyClient::request('user/security', __FUNCTION__, false, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSecurity(int $SecurityId, array $data): bool
    {
        return EellyClient::request('user/security', __FUNCTION__, true, $SecurityId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSecurityAsync(int $SecurityId, array $data)
    {
        return EellyClient::request('user/security', __FUNCTION__, false, $SecurityId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSecurity(int $SecurityId): bool
    {
        return EellyClient::request('user/security', __FUNCTION__, true, $SecurityId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSecurityAsync(int $SecurityId)
    {
        return EellyClient::request('user/security', __FUNCTION__, false, $SecurityId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSecurityPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('user/security', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSecurityPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('user/security', __FUNCTION__, false, $condition, $currentPage, $limit);
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