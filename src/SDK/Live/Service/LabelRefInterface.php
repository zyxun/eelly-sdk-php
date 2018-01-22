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

use \SDK\Live\DTO\LabelRefDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
interface LabelRefInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getLabelRef(int $labelRefId): LabelRefDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addLabelRef(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateLabelRef(int $labelRefId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteLabelRef(int $labelRefId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listLabelRefPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}