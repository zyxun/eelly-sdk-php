<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Contact\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\Contact\DTO\ContactDTO;


/**
 * 联系人.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 * @since 2017年09月29日
 */
interface ContactInterface
{

    /**
     * 获取联系人页--统计数.
     *
     * @param UidDTO|null $user 登录用户
     * @throws \Eelly\SDK\Contact\Exception\ContactException
     * @return array
     * @requestExample(false)
     * @returnExample({"contactCount": 2,"fansCount": 1,"tagCount": 0,"neverTalkCount": 0,"regionCount": 0,"levelCount": 0})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月29日
     */
    public function getContactCount(UidDTO $user = null): array;

    /**
     * 统计关注的人数(含有Key值返回).
     *
     * @param int $startTime 关注开始时间
     * @param int $endTime 关注结束时间
     * @param UidDTO|null $user  登录id
     * @return array
     * @requestExample({"startTime":1506755328,'endTime':1506755528})
     * @returnExample({"contactCount": 2})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月30日
     */
    public function getConcernCount(int $startTime = 0, int $endTime = 0, UidDTO $user = null):array;

    /**
     * 获取联系人列表.
     *
     * @param int         $day  最后聊天天数
     * @param UidDTO|null $user 用户登录信息
     *
     * @throws \Eelly\SDK\Contact\Exception\ContactException
     *
     * @return array
     * @requestExample({"day":0})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月10日
     */
    public function getContactsList(int $day = 0, UidDTO $user = null): array;

    /**
     * 获取粉丝列表.
     *
     * @param int $lastTime 最后新增粉丝的时间： 0.全部  >0.新增
     * @param int $page     分页页数
     * @param UidDTO|null $user 用户登录信息
     *
     * @throws \Eelly\SDK\Contact\Exception\ContactException
     *
     * @return array
     *
     * @author 李伟权<liweiquan@eelly.net>
     *
     * @since  2016年09月10日
     */
    public function getFansList($lastTime = 0, $page = 1, UidDTO $user = null):array;

    /**
     * 根据手机列表获取在衣联注册且未关注的用户.
     *
     * @param array  $mobileList 手机联系人列表
     * @param UidDTO $user       用户登录信息
     *
     * @throws \Eelly\SDK\Contact\Exception\ContactException
     *
     * @return array
     * @requestExample({'mobileList':{'phone_mob':1}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月10日
     */
    public function newFriendMobileList(array $mobileList, UidDTO $user): array;
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function getContact(int $contactId): ContactDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function addContact(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function updateContact(int $contactId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function deleteContact(int $contactId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function listContactPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}