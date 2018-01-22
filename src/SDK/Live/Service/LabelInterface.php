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

namespace Eelly\SDK\Live\Service;

use \SDK\Live\DTO\LabelDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
interface LabelInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getLabel(int $labelId): LabelDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addLabel(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateLabel(int $labelId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteLabel(int $labelId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listLabelPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}