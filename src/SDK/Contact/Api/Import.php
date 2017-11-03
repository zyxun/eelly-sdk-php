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

namespace Eelly\SDK\Contact\Api;

use Eelly\DTO\ImportDTO;
use Eelly\SDK\Contact\Service\ImportInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Import implements ImportInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getImport(int $importId): ImportDTO
    {
        return EellyClient::request('contact/import', 'getImport', $importId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addImport(array $data): bool
    {
        return EellyClient::request('contact/import', 'addImport', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateImport(int $importId, array $data): bool
    {
        return EellyClient::request('contact/import', 'updateImport', $importId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteImport(int $importId): bool
    {
        return EellyClient::request('contact/import', 'deleteImport', $importId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listImportPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('contact/import', 'listImportPage', $condition, $currentPage, $limit);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}
