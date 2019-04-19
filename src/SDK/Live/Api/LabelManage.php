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
use Eelly\SDK\Live\Service\LabelManageInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class LabelManage
{
    /**
     * 获取一条直播标签
     *
     * @param int $labelId
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-01-10
     *
     * @internal
     */
    public function getLabel(int $labelId): array
    {
        return EellyClient::request('live/labelManage', 'getLabel', true, $labelId);
    }

    /**
     * 获取一条直播标签
     *
     * @param int $labelId
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-01-10
     *
     * @internal
     */
    public function getLabelAsync(int $labelId)
    {
        return EellyClient::request('live/labelManage', 'getLabel', false, $labelId);
    }

    /**
     * 后台直播标签列表
     *
     * @param array $condition  查询条件
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-01-09
     *
     * @internal
     */
    public function getLabelList(array $condition = []): array
    {
        return EellyClient::request('live/labelManage', 'getLabelList', true, $condition);
    }

    /**
     * 后台直播标签列表
     *
     * @param array $condition  查询条件
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-01-09
     *
     * @internal
     */
    public function getLabelListAsync(array $condition = [])
    {
        return EellyClient::request('live/labelManage', 'getLabelList', false, $condition);
    }

    /**
     * 添加直播标签
     *
     * @param array $data
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-01-09
     *
     * @internal
     */
    public function addLabel(array $data): bool
    {
        return EellyClient::request('live/labelManage', 'addLabel', true, $data);
    }

    /**
     * 添加直播标签
     *
     * @param array $data
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-01-09
     *
     * @internal
     */
    public function addLabelAsync(array $data)
    {
        return EellyClient::request('live/labelManage', 'addLabel', false, $data);
    }

    /**
     * 更新直播标签
     *
     * @param int   $labelId
     * @param array $data
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-01-09
     *
     * @internal
     */
    public function updateLabel(int $labelId, array $data): bool
    {
        return EellyClient::request('live/labelManage', 'updateLabel', true, $labelId, $data);
    }

    /**
     * 更新直播标签
     *
     * @param int   $labelId
     * @param array $data
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-01-09
     *
     * @internal
     */
    public function updateLabelAsync(int $labelId, array $data)
    {
        return EellyClient::request('live/labelManage', 'updateLabel', false, $labelId, $data);
    }

    /**
     * 批量更新直播标签
     *
     * @param array $labelIds
     * @param array $data
     * @return int  更新条数
     *
     * @author zhangyangxun
     * @since 2019-01-11
     */
    public function updateLabelBatch(array $labelIds, array $data): int
    {
        return EellyClient::request('live/labelManage', 'updateLabelBatch', true, $labelIds, $data);
    }

    /**
     * 批量更新直播标签
     *
     * @param array $labelIds
     * @param array $data
     * @return int  更新条数
     *
     * @author zhangyangxun
     * @since 2019-01-11
     */
    public function updateLabelBatchAsync(array $labelIds, array $data)
    {
        return EellyClient::request('live/labelManage', 'updateLabelBatch', false, $labelIds, $data);
    }

    /**
     * 删除直播标签
     *
     * @param int $labelId
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-01-09
     *
     * @internal
     */
    public function deleteLabel(int $labelId): bool
    {
        return EellyClient::request('live/labelManage', 'deleteLabel', true, $labelId);
    }

    /**
     * 删除直播标签
     *
     * @param int $labelId
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-01-09
     *
     * @internal
     */
    public function deleteLabelAsync(int $labelId)
    {
        return EellyClient::request('live/labelManage', 'deleteLabel', false, $labelId);
    }

    /**
     * 获取直播标签接口配置
     *
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-01-11
     *
     * @internal
     */
    public function getLabelApiConfig(): array
    {
        return EellyClient::request('live/labelManage', 'getLabelApiConfig', true);
    }

    /**
     * 获取直播标签接口配置
     *
     * @return array
     *
     * @author zhangyangxun
     * @since 2019-01-11
     *
     * @internal
     */
    public function getLabelApiConfigAsync()
    {
        return EellyClient::request('live/labelManage', 'getLabelApiConfig', false);
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