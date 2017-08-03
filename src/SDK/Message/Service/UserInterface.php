<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Message\Service;
use Eelly\DTO\UserDTO;


/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface UserInterface
{
    /**
     * 添加用户消息.
     *
     * @param int $messageId 消息ID
     * @param int $receiverId 接收者ID
     * @return int
     * @requestExample([1,2])
     * @returnExample(1)
     * @throws \Eelly\SDK\
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-1
     */
    public function addMessageUser(int $messageId,int $receiverId):int;


    /**
     * 更新用户消息状态.
     *
     * @param int $muId 消息读取ID
     * @param int $isRead 是否已读：0 否 1 是
     * @return bool
     * @requestExample([1,1])
     * @returnExample(true)
     * @throws \Eelly\SDK\
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-1
     */
    public function updateMessageUserStatus(int $muId,int $isRead,UserDTO $user):bool ;

    /**
     * 分页获取用户消息.
     *
     * @param UserDTO|null $user 所有用户对象,当该参数不为空，返回该用户消息，参数为空，返回所有用户消息
     * @param int $limit 每页条数
     * @param int $currentPage 当前页
     * @return array
     * @requestExample([1,10,1])
     * @returnExample()
     * @throws \Eelly\SDK\
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-1
     */
    public function listMessageUserPage(UserDTO $user=null,int $limit=10,int $currentPage=1):array ;

    /**
     * 获取用户消息.
     *
     * @param int $muId 用户消息id
     * @return mixed
     * @requestExample(1)
     * @returnExample()
     * @throws \Eelly\SDK\
     * @author liangxinyi<liangxinyi@eelly.net>
     * @since 2017-8-2
     */
    public function getMessageUser(int $muId);



}