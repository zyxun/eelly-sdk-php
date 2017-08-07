<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\User\Service;

use Eelly\DTO\BindDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface BindInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getBind(int $BindId): BindDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addBind(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateBind(int $BindId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteBind(int $BindId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listBindPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}