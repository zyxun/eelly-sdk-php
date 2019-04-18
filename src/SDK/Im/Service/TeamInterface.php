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

namespace Eelly\SDK\Im\Service;

/**
 * IM群主接口层
 *
 */
interface TeamInterface
{
    /**
     * 获取主播粉丝群列表信息
     * 
     * @param int $stroeId 店铺id
     * @param int $page 分页
     * @param int $limit 每页显示数量, 默认20
     * 
     * @returnExample({"groupMemberCount":0,"fansGroupList":[{"groupTitle":"bobo1972-官方直播①群","joinGroupCondition":"潜规则","isFull":0}]})
     * 
     * @author wechan
     * @since 2019年04月18日
     */
    public function getFansGroup(int $stroeId, int $page = 1, int $limit = 20): array;
}