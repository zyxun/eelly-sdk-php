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

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\DTO\ImageDTO;
use Eelly\SDK\System\Service\ImageInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Image implements ImageInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getImage(int $saiId): ImageDTO
    {
        return EellyClient::request('system/image', 'getImage', $saiId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addImage(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/image', 'addImage', $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateImage(int $saiId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/image', 'updateImage', $saiId, $data, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteImage(int $saiId = null, int $articleId = null, UidDTO $user = null): bool
    {
        return EellyClient::request('system/image', 'deleteImage', $saiId, $articleId, $user);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listImage(int $saiId = null, int $articleId = null): array
    {
        return EellyClient::request('system/image', 'listImage', $saiId, $articleId);
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
