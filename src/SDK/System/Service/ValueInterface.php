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

use Eelly\DTO\ValueDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ValueInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getValue(int $ValueId): ValueDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addValue(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateValue(int $ValueId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteValue(int $ValueId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listValuePage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}