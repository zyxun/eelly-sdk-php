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

namespace Eelly\SDK\Message\Service;

use Eelly\DTO\UserDTO;
use Eelly\SDK\Message\Service\DTO\SiteDTO;

/**
 * 站内信消息.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SiteInterface
{
    /**
     * 添加站内信消息.
     *
     * @param int $messageId  消息ID
     * @param int $receiverId 接收者ID
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return int
     * @requestExample({"message":1,"receiverId":2,"content":"测试消息"})
     * @returnExample(1)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function addMessageSite(int $messageId, int $receiverId, string $content): int;

    /**
     * 更新站内信成已读.
     *
     * @param int     $msiId 消息读取ID
     * @param UserDTO $user  用户对象
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return bool
     * @requestExample({"msiId":1,"user":{"user_id":1,"username":"lxy"})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function updateMessageSiteRead(int $msiId, UserDTO $user): bool;

    /**
     * 批量更新站内信成已读状态.
     *
     * @param int     $msiIds 消息读取ID数组
     * @param UserDTO $user   用户对象
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return bool
     * @requestExample({"msiIds":[1,2,3],"user":{"user_id":1,"username":"lxy"})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function updateMessageSiteReadBatch(int $msiIds, UserDTO $user): bool;

    /**
     * 分页获取用户消息.
     *
     * @param UserDTO $user        用户对象
     * @param int     $limit       每页条数
     * @param int     $currentPage 当前页
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return array
     * @requestExample({"user":{"user_id":1,"username":"lxy"},"limit":10,"currentPage":1})
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function listMessageSitePage(UserDTO $user, int $currentPage = 1, int $limit = 10): array;

    /**
     * 获取用户消息.
     *
     * @param int $msiId 站内信id
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return SiteDTO
     * @requestExample(1)
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-2
     */
    public function getMessageSite(int $msiId): SiteDTO;

    /**
     * 删除用户消息.
     *
     * @param int $msiId 用户消息id
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return mixed
     * @requestExample({"msiId":1,"user":{"user_id":1,"username":"liangxinyi"}})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-2
     */
    public function deleteMessageSite(int $msiId, UserDTO $user): bool;

    /**
     * 批量删除用户消息.
     *
     * @param int $msiIds 用户消息id数组
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return bool
     * @requestExample({"msiIds":[1,2,3,4],"user":{"user_id":1,"username":"liangxinyi"}})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-2
     */
    public function deleteMessageSiteBatch(array $msiIds, UserDTO $user): bool;
}
