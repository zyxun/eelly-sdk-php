<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Contact\Service;

use Eelly\DTO\ContactDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ContactInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getContact(int $contactId): ContactDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addContact(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateContact(int $contactId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteContact(int $contactId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listContactPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}