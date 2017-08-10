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

use Eelly\DTO\BindDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\BindInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Bind implements BindInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getBind(int $BindId): BindDTO
    {
        return EellyClient::request('user/bind', 'getBind', $BindId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addBind(array $data): bool
    {
        return EellyClient::request('user/bind', 'addBind', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateBind(int $BindId, array $data): bool
    {
        return EellyClient::request('user/bind', 'updateBind', $BindId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteBind(int $BindId): bool
    {
        return EellyClient::request('user/bind', 'deleteBind', $BindId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listBindPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('user/bind', 'listBindPage', $condition, $limit, $currentPage);
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
