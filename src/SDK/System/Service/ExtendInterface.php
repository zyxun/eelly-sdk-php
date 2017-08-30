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

use Eelly\DTO\ExtendDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ExtendInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getExtend(int $ExtendId): ExtendDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addExtend(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateExtend(int $ExtendId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteExtend(int $ExtendId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listExtendPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}