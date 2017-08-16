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

use Eelly\DTO\ExtendDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\ExtendInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Extend implements ExtendInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getExtend(int $ExtendId): ExtendDTO
    {
        return EellyClient::request('user/extend', 'getExtend', $ExtendId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addExtend(array $data): bool
    {
        return EellyClient::request('user/extend', 'addExtend', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateExtend(int $ExtendId, array $data): bool
    {
        return EellyClient::request('user/extend', 'updateExtend', $ExtendId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteExtend(int $ExtendId): bool
    {
        return EellyClient::request('user/extend', 'deleteExtend', $ExtendId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listExtendPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('user/extend', 'listExtendPage', $condition, $limit, $currentPage);
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
