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
use Eelly\SDK\Live\Service\LiveTopSettingInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class LiveTopSetting
{
    /**
     * 获取当前配置生效的数据
     *
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.26
     */
    public function getOne(): array
    {
        return EellyClient::request('live/liveTopSetting', 'getOne', true);
    }

    /**
     * 获取当前配置生效的数据
     *
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.26
     */
    public function getOneAsync()
    {
        return EellyClient::request('live/liveTopSetting', 'getOne', false);
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