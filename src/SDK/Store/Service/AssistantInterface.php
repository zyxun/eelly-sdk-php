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

namespace Eelly\SDK\Store\Service;

use Eelly\SDK\Store\DTO\AssistantDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
interface AssistantInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getAssistant(int $assistantId): AssistantDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addAssistant(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateAssistant(int $assistantId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteAssistant(int $assistantId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listAssistantPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}