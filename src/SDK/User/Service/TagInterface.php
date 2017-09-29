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

namespace Eelly\SDK\User\Service;

use Eelly\SDK\User\DTO\TagDTO;
use Eelly\SDK\User\Exception\TagException;

/**
 * 用户标签信息.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface TagInterface
{

    /**
     * 获取用户标签.
     *
     * @param int $utId 用户标签ID
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * utId        |int    |
     * userId      |int    |
     * type        |int    |
     * itemId      |int    |
     * createdTime |int    |
     * updateTime  |string |
     *
     * @return TagDTO
     * @requestExample({"utId":1})
     * @returnExample({"utId":1,"userId":148086,"type":1,"itemId":1,"createdTime":1506584839,"updateTime":"2017-09-29 10:04:33"})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/29
     */
    public function getTag(int $utId): TagDTO;

    /**
     * 添加用户标识.
     *
     * @param array $data
     * @param int $data["userId"]       用户ID
     * @param int $data["type"]         标签类型
     * @param int $data["itemId"]       关联ID
     *
     * @return bool
     * @requestExample({"data":{"userId":148086,"type":1,"itemId":1}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/29
     */
    public function addTag(array $data): bool;

    /**
     * 更新用户标识.
     *
     * @param int   $utId               用户标签ID
     * @param array $data
     * @param int $data["userId"]       用户ID
     * @param int $data["type"]         标签类型
     * @param int $data["itemId"]       关联ID
     *

     * @throws TagException
     *
     * @return bool
     * @requestExample({"utId":1,"data":{"userId":148086,"type":1,"itemId":1}})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/29
     */
    public function updateTag(int $utId, array $data): bool;

    /**
     * 删除用户标签.
     *
     * @param int $utId     用户标签ID
     *
     * @throws TagException
     *
     * @return bool
     * @requestExample({"utId":1})
     * @returnExample(true)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/29
     */
    public function deleteTag(int $utId): bool;

    /**
     * 用户标签列表.
     *
     * @param array $condition
     * @param int $condition["type"]        标签类型
     * @param int $condition["itemId"]      关联ID
     * @param int $currentPage
     * @param int $limit
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * utId        |int    |
     * userId      |int    |
     * type        |int    |
     * itemId      |int    |
     * createdTime |int    |
     * updateTime  |string |
     *
     * @throws TagException
     *
     * @return array
     * @requestExample({"condition":{"type":1, "itemId":1},"currentPage":1,"limit":10})
     * @returnExample([{"utId":1,"userId":148086,"type":1,"itemId":1,"createdTime":1506584839,"updateTime":"2017-09-29 10:04:33"}])
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017/9/29
     */
    public function listTagPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
