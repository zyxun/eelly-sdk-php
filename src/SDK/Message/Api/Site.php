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

namespace Eelly\SDK\Message\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Message\Service\SiteInterface;
use Eelly\DTO\UidDTO;
use Eelly\SDK\Message\DTO\SiteDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Site
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
    public function addMessageSite(int $messageId, int $receiverId, string $content): int
    {
        return EellyClient::request('message/site', __FUNCTION__, true, $messageId, $receiverId, $content);
    }

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
    public function addMessageSiteAsync(int $messageId, int $receiverId, string $content)
    {
        return EellyClient::request('message/site', __FUNCTION__, false, $messageId, $receiverId, $content);
    }

    /**
     * 更新站内信成已读.
     *
     * @param int    $msiId 消息读取ID
     * @param UidDTO $user  用户对象
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
    public function updateMessageSiteRead(int $msiId, UidDTO $user): bool
    {
        return EellyClient::request('message/site', __FUNCTION__, true, $msiId, $user);
    }

    /**
     * 更新站内信成已读.
     *
     * @param int    $msiId 消息读取ID
     * @param UidDTO $user  用户对象
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
    public function updateMessageSiteReadAsync(int $msiId, UidDTO $user)
    {
        return EellyClient::request('message/site', __FUNCTION__, false, $msiId, $user);
    }

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
    public function updateMessageSiteReadBatch(array $msiIds, UidDTO $user): bool
    {
        return EellyClient::request('message/site', __FUNCTION__, true, $msiIds, $user);
    }

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
    public function updateMessageSiteReadBatchAsync(array $msiIds, UidDTO $user)
    {
        return EellyClient::request('message/site', __FUNCTION__, false, $msiIds, $user);
    }

    /**
     * 分页获取用户消息.
     *
     * @param UidDTO $user        用户对象
     * @param int    $limit       每页条数
     * @param int    $currentPage 当前页
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
    public function listMessageSitePage(int $currentPage, int $limit, UidDTO $user): array
    {
        return EellyClient::request('message/site', __FUNCTION__, true, $currentPage, $limit, $user);
    }

    /**
     * 分页获取用户消息.
     *
     * @param UidDTO $user        用户对象
     * @param int    $limit       每页条数
     * @param int    $currentPage 当前页
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
    public function listMessageSitePageAsync(int $currentPage, int $limit, UidDTO $user)
    {
        return EellyClient::request('message/site', __FUNCTION__, false, $currentPage, $limit, $user);
    }

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
    public function getMessageSite(int $msiId): SiteDTO
    {
        return EellyClient::request('message/site', __FUNCTION__, true, $msiId);
    }

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
    public function getMessageSiteAsync(int $msiId)
    {
        return EellyClient::request('message/site', __FUNCTION__, false, $msiId);
    }

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
    public function deleteMessageSite(int $msiId, UidDTO $user): bool
    {
        return EellyClient::request('message/site', __FUNCTION__, true, $msiId, $user);
    }

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
    public function deleteMessageSiteAsync(int $msiId, UidDTO $user)
    {
        return EellyClient::request('message/site', __FUNCTION__, false, $msiId, $user);
    }

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
    public function deleteMessageSiteBatch(array $msiIds, UidDTO $user): bool
    {
        return EellyClient::request('message/site', __FUNCTION__, true, $msiIds, $user);
    }

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
    public function deleteMessageSiteBatchAsync(array $msiIds, UidDTO $user)
    {
        return EellyClient::request('message/site', __FUNCTION__, false, $msiIds, $user);
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