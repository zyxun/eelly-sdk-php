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

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\ConfigureInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Configure implements ConfigureInterface
{
    /**
     * 根据渠道类型返回对应类型的所有信息
     * 
     * @param int $channelType 渠道类型
     * 
     * @author wechan
     * @since 2019年03月22日
     */
    public function getConfigureByChannelType(int $channelType): array
    {
        return EellyClient::request('pay/configure', 'getConfigureByChannelType', true, $channelType);
    }

    /**
     * 根据渠道类型返回对应类型的所有信息
     * 
     * @param int $channelType 渠道类型
     * 
     * @author wechan
     * @since 2019年03月22日
     */
    public function getConfigureByChannelTypeAsync(int $channelType)
    {
        return EellyClient::request('pay/configure', 'getConfigureByChannelType', false, $channelType);
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