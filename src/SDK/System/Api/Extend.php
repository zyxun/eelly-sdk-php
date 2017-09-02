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

namespace Eelly\SDK\System\Api;

use Eelly\DTO\ExtendDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\ExtendInterface;

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
        return EellyClient::request('system/extend', 'getExtend', $ExtendId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addExtend(array $data): bool
    {
        return EellyClient::request('system/extend', 'addExtend', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateExtend(int $ExtendId, array $data): bool
    {
        return EellyClient::request('system/extend', 'updateExtend', $ExtendId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteExtend(int $ExtendId): bool
    {
        return EellyClient::request('system/extend', 'deleteExtend', $ExtendId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listExtendPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/extend', 'listExtendPage', $condition, $limit, $currentPage);
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
