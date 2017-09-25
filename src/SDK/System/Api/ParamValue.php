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

use Eelly\SDK\System\DTO\ParamValueDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\ParamValueInterface;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
class ParamValue implements ParamValueInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getParamValue(int $spvId): ParamValueDTO
    {
        return EellyClient::request('system/paramValue', 'getParamValue', $spvId);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addParamValue(array $data): bool
    {
        return EellyClient::request('system/paramValue', 'addParamValue', $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateParamValue(int $spvId, array $data): bool
    {
        return EellyClient::request('system/paramValue', 'updateParamValue', $spvId, $data);
    }

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listParamValuePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/paramValue', 'listParamValuePage', $condition, $currentPage, $limit);
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
