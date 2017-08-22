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

namespace Eelly\SDK\User\Service;

use Eelly\DTO\BindDTO;

/**
 *  用户第三方绑定.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface BindInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getBind(int $BindId): BindDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addBind(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateBind(int $BindId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteBind(int $BindId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listBindPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
