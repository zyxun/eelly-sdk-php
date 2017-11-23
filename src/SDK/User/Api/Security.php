<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\User\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\SecurityInterface;


/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Security implements SecurityInterface
{

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getSecurity(int $SecurityId): SecurityDTO
    {
        return EellyClient::request('user/security', 'getSecurity', true, $SecurityId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addSecurity(array $data): bool
    {
        return EellyClient::request('user/security', 'addSecurity', true, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateSecurity(int $SecurityId, array $data): bool
    {
        return EellyClient::request('user/security', 'updateSecurity', true, $SecurityId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteSecurity(int $SecurityId): bool
    {
        return EellyClient::request('user/security', 'deleteSecurity', true, $SecurityId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listSecurityPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('user/security', 'listSecurityPage', true, $condition, $currentPage, $limit);
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