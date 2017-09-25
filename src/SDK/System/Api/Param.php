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

use Eelly\SDK\System\DTO\ParamDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\ParamInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class Param implements ParamInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getParamByParamId(int $paramId): ParamDTO
    {
        return EellyClient::request('system/param', 'getParamByParamId', $paramId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getParamByCode(string $code): ParamDTO
    {
        return EellyClient::request('system/param', 'getParamByCode', $code);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addParam(array $data): bool
    {
        return EellyClient::request('system/param', 'addParam', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateParam(int $paramId, array $data): bool
    {
        return EellyClient::request('system/param', 'updateParam', $paramId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteParam(int $paramId): bool
    {
        return EellyClient::request('system/param', 'deleteParam', $paramId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listParamPage(array $condition = [], int $currentPage = 1, int $limit = 20): array
    {
        return EellyClient::request('system/param', 'listParamPage', $condition, $currentPage, $limit);
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
