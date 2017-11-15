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

use Eelly\DTO\ContactDTO;
use Eelly\SDK\Contact\Service\ContactInterface;
use Eelly\SDK\EellyClient;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Contact implements ContactInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getContact(int $contactId): ContactDTO
    {
        return EellyClient::request('contact/contact', 'getContact', $contactId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addContact(array $data): bool
    {
        return EellyClient::request('contact/contact', 'addContact', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateContact(int $contactId, array $data): bool
    {
        return EellyClient::request('contact/contact', 'updateContact', $contactId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteContact(int $contactId): bool
    {
        return EellyClient::request('contact/contact', 'deleteContact', $contactId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listContactPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('contact/contact', 'listContactPage', $condition, $currentPage, $limit);
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
