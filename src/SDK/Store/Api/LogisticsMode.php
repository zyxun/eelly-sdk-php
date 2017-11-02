<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Store\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Store\Service\LogisticsModeInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class LogisticsMode implements LogisticsModeInterface
{

    /**
     * 新增物流配送方式
     * 新增店铺的物流配送方式.
     *
     * @param array             $modeData               配送方式数据
     * @param int               $modeData["templateId"] 物流模板id
     * @param int               $modeData["mode"]       配送方式 1 货运 2 快递 3 EMS
     * @param int               $modeData["baseweight"] 默认首重
     * @param int               $modeData["overweight"] 默认续重
     * @param int               $modeData["isCod"]      支持到付 1支持 0不支持
     * @param \Eelly\DTO\UidDTO $user                   登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 新增结果
     * @requestExample({
     *     "modeData":{
     *         "templateId":1,
     *         "mode":1,
     *         "baseweight":1,
     *         "overweight":2,
     *         "isCod":1
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月11日
     */
    public function addLogisticsMode(array $modeData, UidDTO $user = null): bool
    {
        return EellyClient::request('store/logisticsmode', 'addLogisticsMode', $modeData, $user);
    }

    /**
     * 修改物流配送方式
     * 修改店铺的物流配送方式.
     *
     * @param array             $modeData               配送方式数据
     * @param int               $modeData["modeId"]     配送方式id
     * @param int               $modeData["mode"]       配送方式 1 货运 2 快递 3 EMS
     * @param int               $modeData["baseweight"] 默认首重
     * @param int               $modeData["overweight"] 默认续重
     * @param int               $modeData["isCod"]      支持到付 1支持 0不支持
     * @param \Eelly\DTO\UidDTO $user                   登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 修改结果
     * @requestExample({
     *     "modeData":{
     *         "modeId":1,
     *         "mode":2,
     *         "baseweight":3,
     *         "overweight":4,
     *         "isCod":0
     *     }
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月11日
     */
    public function updateLogisticsMode(array $modeData, UidDTO $user = null): bool
    {
        return EellyClient::request('store/logisticsmode', 'updateLogisticsMode', $modeData, $user);
    }

    /**
     * 删除配送方式
     * 删除店铺的配送方式.
     *
     * @param int    $modeId 配送方式id
     * @param UidDTO $user   登录用户信息
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return bool 删除结果
     * @requestExample({
     *     "modeId":1
     * })
     * @returnExample(true)
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月11日
     */
    public function deleteLogisticsMode(int $modeId, UidDTO $user = null): bool
    {
        return EellyClient::request('store/logisticsmode', 'deleteLogisticsMode', $modeId, $user);
    }

    /**
     * 获取配送方式
     * 获取店铺的物流配送方式.
     *
     * @param int $storeId 店铺id
     *
     * @throws \Eelly\SDK\Store\Exception\StoreException
     *
     * @return array
     * @requestExample({
     *     "storeId":1
     * })
     * @returnExample([
     *     {
     *         "modeId":1,
     *         "templateName":"模板名称",
     *         "mode":1,
     *         "baseweight":3,
     *         "overweight":4,
     *         "isCod":0,
     *         "createdTime":"1970-01-01 01:01:01"
     *     }
     * ])
     *
     * @author wangjiang<wangjiang@eelly.net>
     *
     * @since 2017年9月11日
     */
    public function getLogisticsMode(int $storeId): array
    {
        return EellyClient::request('store/logisticsmode', 'getLogisticsMode', $storeId);
    }

    /**
     * 获取物流配送信息
     * 获取物流配送信息
     *
     * @param array $styleIds 配送方式id
     * @return array 物流配送信息
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({
     *     "styleIds":[1,2,3]
     * })
     * @returnExample({
     *     "1":{
     *         "baseweight":1,
     *         "overweight":2,
     *         "isCod":0,
     *         "regionInfo":[
     *             {
     *                 "baseweight":1,
     *                 "overweight":2,
     *                 "gbCodes":["110011","110012"]
     *             }
     *         ]
     *     }
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年10月31日
     */
    public function getLogisticsInfoByStyle(array $styleIds): array
    {
        return EellyClient::request('store/logisticsmode', 'getLogisticsInfoByStyle', $styleIds);
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