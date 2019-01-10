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

namespace Eelly\SDK\Live\Service;

/**
 * 直播标签管理
 */
interface LabelManageInterface
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
    public function getLabel(int $labelId): array;

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
    public function getLabelList(array $condition = []): array;

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
    public function addLabel(array $data): bool;

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
    public function updateLabel(int $labelId, array $data): bool;

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
    public function deleteLabel(int $labelId): bool;
}