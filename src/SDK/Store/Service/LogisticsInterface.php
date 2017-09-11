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

namespace Eelly\SDK\Store\Service;

use Eelly\DTO\UidDTO;

/**
 * 店铺物流模板.
 *
 * @author wangjiang<wangjiang@eelly.net>
 */
interface LogisticsInterface
{
    /**
     * 新增物流模板
     * 新增店铺的物流模板
     *
     * @param array $templateData 模板数据
     * @param int $templateData["storeId"] 店铺id
     * @param string $templateData["templateName"] 模板名称
     * @param int $templateData["sort"] 排序
     * @param int $templateData["isDefault"] 是否为默认模板 1是 0否
     * @param \Eelly\DTO\UidDTO $user 登录用户信息
     * @return bool 新增结果
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({
     *     "templateData":{
     *         "storeId":1,
     *         "templateName":"模块名称",
     *         "sort":1,
     *         "isDefault":1
     *     }
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月9日
     */
    public function addLogisticsTemplate(array $templateData, UidDTO $user = null):bool;

    /**
     * 修改物流模板
     * 修改店铺的物流模板信息
     *
     * @param int $templateId 模板id
     * @param string $updateField 修改的字段 templateName/模板名称 sort/模板排序 isDefault/是否为默认模板 1是0否
     * @param string $updateValue 修改的值
     * @param UidDTO $user 登录用户信息
     * @return bool 修改结果
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({
     *     "templateId":1,
     *     "updateField":"templateName",
     *     "updateValue":"新的模板名称"
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月9日
     */
    public function updateLogisticsTemplate(int $templateId, string $updateField, string $updateValue, UidDTO $user = null): bool;

    /**
     * 删除物流模板
     * 删除店铺的物流模板及模板相关信息
     *
     * @param int $templateId 模板id
     * @param UidDTO $user 登录用户信息
     * @return bool 删除结果
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @requestExample({
     *     "templateId":1
     * })
     * @returnExample(true)
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月9日
     */
    public function deleteLogisticsTemplate(int $templateId, UidDTO $user = null): bool;

    /**
     * 获取物流模板
     * 获取店铺的物流模板
     *
     * @param int $storeId 店铺id
     * @param int $page 页数
     * @param int $limit 每页数据返回的数量
     * @throws \Eelly\SDK\Store\Exception\StoreException
     * @return array
     * @requestExample({
     *     "storeId":1,
     *     "page":1,
     *     "limit":10
     * })
     * @returnExample([
     *     {
     *         "templateId":1,
     *         "templateName":"模板名称",
     *         "sort":1,
     *         "isDefault":1,
     *         "createdTime":"1970-01-01 01:01:01"
     *     }
     * ])
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2017年9月9日
     */
    public function getLogisticsTemplate(int $storeId): array;
}
