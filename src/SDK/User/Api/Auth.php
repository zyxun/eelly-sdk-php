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
use Eelly\SDK\User\Service\AuthInterface;
use Eelly\DTO\AuthDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Auth implements AuthInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAuth(int $AuthId): AuthDTO
    {
        return EellyClient::request('user/auth', 'getAuth', $AuthId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAuth(array $data): bool
    {
        return EellyClient::request('user/auth', 'addAuth', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAuth(int $AuthId,array $data): bool
    {
        return EellyClient::request('user/auth', 'updateAuth', $AuthId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAuth(int $AuthId): bool
    {
        return EellyClient::request('user/auth', 'deleteAuth', $AuthId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAuthPage(array $condition = [],int $limit = 10,int $currentPage = 1): array
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