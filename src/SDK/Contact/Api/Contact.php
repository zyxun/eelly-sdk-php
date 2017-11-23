<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Contact\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Contact\Service\ContactInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Contact implements ContactInterface
{

    /**
     * 获取联系人页--统计数.
     *
     * @param UidDTO|null $user 登录用户
     *
     * @throws \Eelly\SDK\Contact\Exception\ContactException
     *
     * @return array
     * @requestExample(false)
     * @returnExample({"contactCount": 2,"fansCount": 1,"tagCount": 0,"neverTalkCount": 0,"regionCount": 0,"levelCount": 0})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月29日
     */
    public function getContactCount(UidDTO $user = null): array
    {
        return EellyClient::request('contact/contact', 'getContactCount', true, $user);
    }

    /**
     * 统计关注的人数(含有Key值返回).
     *
     * @param int         $startTime 关注开始时间
     * @param int         $endTime   关注结束时间
     * @param UidDTO|null $user      登录id
     *
     * @return array
     * @requestExample({"startTime":1506755328,'endTime':1506755528})
     * @returnExample({"contactCount": 2})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月30日
     */
    public function getConcernCount(int $startTime = 0, int $endTime = 0, UidDTO $user = null): array
    {
        return EellyClient::request('contact/contact', 'getConcernCount',true, $startTime, $endTime, $user);
    }

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
     * @returnExample({"specialConcernList": {"userId": "eelly_service_001","contactId": 0,"userName": "衣联网客服","portraitUrl": "","tagName": "官方","creditIcon": "","userType": 3,"isSpecialConcern": 1,"message": "您的专属客服，工作时间9点-18点（周一至周五）","addressName": "","isConcern": 1,"role": 5,"concernTime": 1,"source": 0},"concernList": {"userId": "148086","contactId": "3","userName": "","portraitUrl": "","creditIcon": "","addressName": "","concernTime": "0","source": "1","nickName": "","phoneMob": "","realName": "","tagName": "同行","userType": 2,"storeAge": "","theNewCount": 0,"role": 2}})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月10日
     */
    public function getContactsList(int $day = 0, UidDTO $user = null): array
    {
        return EellyClient::request('contact/contact', 'getContactsList', true, $day, $user);
    }

    /**
     * 获取粉丝列表.
     *
     * @param int         $lastTime 最后新增粉丝的时间： 0.全部  >0.新增
     * @param int         $page     分页页数
     * @param UidDTO|null $user     用户登录信息
     *
     * @throws \Eelly\SDK\Contact\Exception\ContactException
     *
     * @return array
     *
     * @author 李伟权<liweiquan@eelly.net>
     *
     * @since  2016年09月10日
     */
    public function getFansList($lastTime = 0, $page = 1, UidDTO $user = null): array
    {
        return EellyClient::request('contact/contact', 'getFansList',true, $lastTime, $page, $user);
    }

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
     * @returnExample({"joinList": {{"contactName": "xxxxxxxx","mobile": "13611111111","message": "发消息"}},"unJoinList": {{"contactName": "xxxxxxxx","mobile": "13611111111","message": "发消息"}},"unconcernCount": 0})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月10日
     */
    public function newFriendMobileList(array $mobileList, UidDTO $user): array
    {
        return EellyClient::request('contact/contact', 'newFriendMobileList', true, $mobileList, $user);
    }

    /**
     * 获取折扣.
     *
     * @param int   $userId   联系人用户ID
     * @param array $ownerIds 系人所有者用户ID 多个所属
     *
     * @return array
     * @requestExample({"userId":148086,"ownerId":{148086,148085}})
     * @returnExample({"userId": 148086,"ownerId": 148086,"discount": 0.2,"degree": 2})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function getDiscount(int $userId, array $ownerIds): array
    {
        return EellyClient::request('contact/contact', 'getDiscount', true, $userId, $ownerIds);
    }

    /**
     * 添加新客户.
     *
     * @param array       $data
     * @param int         $userType 用户类型：1 厂+ 2 店+ 3 云店卖家 4 云店买家
     * @param int         $fromType 来源类型：1 厂+ 2 店+ 3 CRM 4 云店卖家 5 云店买家
     * @param int         $cgId     联系人等级ID
     * @param int         $source   联系人来源
     * @param UidDTO|null $user
     *
     * @throws \Eelly\SDK\Contact\Exception\ContactException
     *
     * @return bool
     * @requestExample({data:{'userType':1,'fromType':1,'cgId':1,'source':1}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月17日
     */
    public function addContact(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('contact/contact', 'addContact',true, $data, $user);
    }

    /**
     * 添加手机联系人到mongodb中.
     *
     * @param array       $data 手机联系人数据
     * @param array       $data ['mobile']  多个手机号码
     * @param string      $data ['userName'] 手机联系人数据
     * @param string      $data ['cardImg'] 手机名片
     * @param UidDTO|null $user 登陆用户信息
     *
     * @throws \Eelly\SDK\Contact\Exception\ContactException
     *
     * @return bool
     * @requestExample({'data':{'mobile':[13519787632,13519787631],'userName':'王江','cardImg':'img.eelly.com'}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月19日
     */
    public function addMobileContact(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('contact/contact', 'addMobileContact', true, $data, $user);
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