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

use Eelly\DTO\ValueDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ValueInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getValue(int $ValueId): ValueDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addValue(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateValue(int $ValueId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteValue(int $ValueId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listValuePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}

