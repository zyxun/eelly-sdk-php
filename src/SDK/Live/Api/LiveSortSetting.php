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
     * 获取直播积分配置
     * @internal
     *
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-04-22
     */
    public function getSortSetting(): array
    {
        return EellyClient::request('live/liveSortSetting', 'getSortSetting', true);
    }

    /**
     * 获取直播积分配置
     * @internal
     *
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-04-22
     */
    public function getSortSettingAsync()
    {
        return EellyClient::request('live/liveSortSetting', 'getSortSetting', false);
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