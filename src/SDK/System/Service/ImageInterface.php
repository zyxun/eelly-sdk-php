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

namespace Eelly\SDK\System\Service;

use Eelly\DTO\ImageDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ImageInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getImage(int $ImageId): ImageDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addImage(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateImage(int $ImageId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteImage(int $ImageId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listImagePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
