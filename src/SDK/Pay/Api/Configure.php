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
class Configure
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
     * 根据渠道类型返回对应类型的所有信息
     * 
     * @param int $pcoId 收款帐户配置ID，自增主键
     * @param array $updateData 需要更新的数据
     * 
     * @author wechan
     * @since 2019年03月22日
     */
    public function updateConfigureData(int $pcoId, array $updateData): bool
    {
        return EellyClient::request('pay/configure', 'updateConfigureData', true, $pcoId, $updateData);
    }

    /**
     * 根据渠道类型返回对应类型的所有信息
     * 
     * @param int $pcoId 收款帐户配置ID，自增主键
     * @param array $updateData 需要更新的数据
     * 
     * @author wechan
     * @since 2019年03月22日
     */
    public function updateConfigureDataAsync(int $pcoId, array $updateData)
    {
        return EellyClient::request('pay/configure', 'updateConfigureData', false, $pcoId, $updateData);
    }

    /**
     * 根据渠道类型和收款类型 返回收款账号AppId
     * 
     * @param int $channelType 渠道类型：1 支付宝 2 微信 3 银联
     * @param int $chargeType 收款类型：1 货款 2 增值服务
     * 
     * @author wechan
     * @since 2019年03月23日
     */
    public function getOneConfigureByType(int $channelType, int $chargeType): string
    {
        return EellyClient::request('pay/configure', 'getOneConfigureByType', true, $channelType, $chargeType);
    }

    /**
     * 根据渠道类型和收款类型 返回收款账号AppId
     * 
     * @param int $channelType 渠道类型：1 支付宝 2 微信 3 银联
     * @param int $chargeType 收款类型：1 货款 2 增值服务
     * 
     * @author wechan
     * @since 2019年03月23日
     */
    public function getOneConfigureByTypeAsync(int $channelType, int $chargeType)
    {
        return EellyClient::request('pay/configure', 'getOneConfigureByType', false, $channelType, $chargeType);
    }

    /**
     * 获取支付配置列表
     * 
     * @author wechan
     * @since 2019年03月26日
     */
    public function getConfigureList(): array
    {
        return EellyClient::request('pay/configure', 'getConfigureList', true);
    }

    /**
     * 获取支付配置列表
     * 
     * @author wechan
     * @since 2019年03月26日
     */
    public function getConfigureListAsync()
    {
        return EellyClient::request('pay/configure', 'getConfigureList', false);
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