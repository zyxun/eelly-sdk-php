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
use Eelly\SDK\System\Service\ExtendInterface;
use Eelly\DTO\ExtendDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Extend implements ExtendInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getExtend(int $ExtendId): ExtendDTO
    {
        return EellyClient::request('system/extend', 'getExtend', $ExtendId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addExtend(array $data): bool
    {
        return EellyClient::request('system/extend', 'addExtend', $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateExtend(int $ExtendId, array $data): bool
    {
        return EellyClient::request('system/extend', 'updateExtend', $ExtendId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteExtend(int $ExtendId): bool
    {
        return EellyClient::request('system/extend', 'deleteExtend', $ExtendId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listExtendPage(array $condition = [], int $limit = 10, int $currentPage = 1): array
    {
        return EellyClient::request('system/extend', 'listExtendPage', $condition, $limit, $currentPage);
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