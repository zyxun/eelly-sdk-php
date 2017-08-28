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

namespace Eelly\SDK\System\Api;

use Eelly\DTO\WordDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\WordInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Word implements WordInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getWord(int $WordId): WordDTO
    {
        return EellyClient::request('system/word', 'getWord', $WordId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addWord(array $data): bool
    {
        return EellyClient::request('system/word', 'addWord', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateWord(int $WordId, array $data): bool
    {
        return EellyClient::request('system/word', 'updateWord', $WordId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteWord(int $WordId): bool
    {
        return EellyClient::request('system/word', 'deleteWord', $WordId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listWordPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('system/word', 'listWordPage', $condition, $limit, $currentPage);
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
