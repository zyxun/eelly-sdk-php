<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\WordInterface;
use Eelly\DTO\WordDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Word implements WordInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getWord(int $WordId): WordDTO
    {
        return EellyClient::request('system/word', 'getWord', $WordId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addWord(array $data): bool
    {
        return EellyClient::request('system/word', 'addWord', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateWord(int $WordId, array $data): bool
    {
        return EellyClient::request('system/word', 'updateWord', $WordId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteWord(int $WordId): bool
    {
        return EellyClient::request('system/word', 'deleteWord', $WordId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listWordPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
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