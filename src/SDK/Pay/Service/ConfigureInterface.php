<?php
declare(strict_types=1);

/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Pay\Service;


/**
 * 收款帐户配置.
 *
 */
interface ConfigureInterface
{
    /**
     * 根据渠道类型返回对应类型的所有信息
     * 
     * @param int $channelType 渠道类型
     * 
     * @author wechan
     * @since 2019年03月22日
     */
    public function getConfigureByChannelType(int $channelType): array;
    
    /**
     * 根据渠道类型返回对应类型的所有信息
     * 
     * @param int $pcoId 收款帐户配置ID，自增主键
     * @param array $updateData 需要更新的数据
     * 
     * @author wechan
     * @since 2019年03月22日
     */
    public function updateConfigureData(int $pcoId, array $updateData): bool;
    
    /**
     * 根据渠道类型和收款类型 返回收款账号AppId
     * 
     * @param int $channelType 渠道类型：1 支付宝 2 微信 3 银联
     * @param int $chargeType 收款类型：1 货款 2 增值服务
     * 
     * @author wechan
     * @since 2019年03月23日
     */
    public function getOneConfigureByType(int $channelType, int $chargeType): string;
    
    /**
     * 获取支付配置列表
     * 
     * @author wechan
     * @since 2019年03月26日
     */
    public function getConfigureList():array;
}