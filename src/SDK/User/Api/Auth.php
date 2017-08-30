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

use Eelly\DTO\AuthDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\AuthInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Auth implements AuthInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAuth(int $AuthId): AuthDTO
    {
        return EellyClient::request('user/auth', 'getAuth', $AuthId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAuth(array $data): bool
    {
        return EellyClient::request('user/auth', 'addAuth', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAuth(int $AuthId, array $data): bool
    {
        return EellyClient::request('user/auth', 'updateAuth', $AuthId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAuth(int $AuthId): bool
    {
        return EellyClient::request('user/auth', 'deleteAuth', $AuthId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAuthPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('user/auth', 'listAuthPage', $condition, $limit, $currentPage);
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
