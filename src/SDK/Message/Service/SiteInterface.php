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
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SiteInterface
{
    /**
     * 添加用户消息.
     *
     * @param int $messageId  消息ID
     * @param int $receiverId 接收者ID
     *
     * @throws \Eelly\SDK\
     *
     * @return int
     * @requestExample([1,2])
     * @returnExample(1)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function addMessageSite(int $messageId, int $receiverId, string $content): int;

    /**
     * 更新用户消息状态.
     *
     * @param int $msiId  消息读取ID
     * @param int $isRead 是否已读：0 否 1 是
     *
     * @throws \Eelly\SDK\
     *
     * @return bool
     * @requestExample([1,1])
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function updateMessageSiteStatus(int $msiId, int $isRead, UserDTO $user): bool;

    /**
     * 批量更新用户消息状态.
     *
     * @param int $msiIds 消息读取ID数组
     * @param int $isRead 是否已读：0 否 1 是
     *
     * @throws \Eelly\SDK\
     *
     * @return bool
     * @requestExample([1,1])
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function updateMessageSiteStatusBatch(int $msiIds, int $isRead, UserDTO $user): bool;

    /**
     * 分页获取用户消息.
     *
     * @param UserDTO $user        用户对象
     * @param int     $limit       每页条数
     * @param int     $currentPage 当前页
     *
     * @throws \Eelly\SDK\
     *
     * @return array
     * @requestExample([1,10,1])
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function listMessageSitePage(UserDTO $user, int $limit = 10, int $currentPage = 1): array;

    /**
     * 获取用户消息.
     *
     * @param int $msiId 用户消息id
     *
     * @throws \Eelly\SDK\
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
     * @throws \Eelly\SDK\
     *
     * @return bool
     * @requestExample(1)
     * @returnExample()
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
     * @throws \Eelly\SDK\
     *
     * @return bool
     * @requestExample(1)
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-2
     */
    public function deleteMessageSiteBatch(array $msiIds, UserDTO $user): bool;
}
