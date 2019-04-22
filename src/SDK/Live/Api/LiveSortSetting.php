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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\LiveSortSettingInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class LiveSortSetting implements LiveSortSettingInterface
{
    /**
     * 获取所有积分规则
     * @internal
     *
     * @param array    $condition
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-03-27
     */
    public function getSettings(array $condition = []): array
    {
        return EellyClient::request('live/liveSortSetting', 'getSettings', true, $condition);
    }

    /**
     * 获取所有积分规则
     * @internal
     *
     * @param array    $condition
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-03-27
     */
    public function getSettingsAsync(array $condition = [])
    {
        return EellyClient::request('live/liveSortSetting', 'getSettings', false, $condition);
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