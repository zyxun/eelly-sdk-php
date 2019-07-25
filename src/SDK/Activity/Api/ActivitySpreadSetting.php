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

namespace Eelly\SDK\Activity\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Activity\Service\ActivitySpreadSettingInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ActivitySpreadSetting implements ActivitySpreadSettingInterface
{
    
    public function getList(): array
    {
        return EellyClient::request('activity/activitySpreadSetting', 'getList', true);
    }

    
    public function getListAsync()
    {
        return EellyClient::request('activity/activitySpreadSetting', 'getList', false);
    }

    
    public function saveBatch(array $data): bool
    {
        return EellyClient::request('activity/activitySpreadSetting', 'saveBatch', true, $data);
    }

    
    public function saveBatchAsync(array $data)
    {
        return EellyClient::request('activity/activitySpreadSetting', 'saveBatch', false, $data);
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