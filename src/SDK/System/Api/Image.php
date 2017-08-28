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

use Eelly\DTO\ImageDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\ImageInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Image implements ImageInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getImage(int $ImageId): ImageDTO
    {
        return EellyClient::request('system/image', 'getImage', $ImageId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addImage(array $data): bool
    {
        return EellyClient::request('system/image', 'addImage', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateImage(int $ImageId, array $data): bool
    {
        return EellyClient::request('system/image', 'updateImage', $ImageId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteImage(int $ImageId): bool
    {
        return EellyClient::request('system/image', 'deleteImage', $ImageId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listImagePage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('system/image', 'listImagePage', $condition, $limit, $currentPage);
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
