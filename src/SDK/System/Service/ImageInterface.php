<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Service;

use Eelly\DTO\ImageDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ImageInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getImage(int $ImageId): ImageDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addImage(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateImage(int $ImageId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteImage(int $ImageId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listImagePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}