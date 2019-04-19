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

namespace Eelly\SDK\Contact\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Contact\Service\ContactInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Contact
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
        return EellyClient::request('contact/contact', __FUNCTION__, true, $user);
    }

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
    public function getContactCountAsync(UidDTO $user = null)
    {
        return EellyClient::request('contact/contact', __FUNCTION__, false, $user);
    }

    /**
     * 统计关注的人数(含有Key值返回).
     *
     * @param array       $data
     * @param int         $data["startTime"] 关注开始时间
     * @param int         $data["endTime"]   关注结束时间
     * @param int         $data["ownerId"]   联系人所有者用户ID
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
    public function getConcernCount(array $data = [], UidDTO $user = null): array
    {
        return EellyClient::request('contact/contact', __FUNCTION__, true, $data, $user);
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
    public function getConcernCountAsync(int $startTime = 0, int $endTime = 0, UidDTO $user = null)
    {
        return EellyClient::request('contact/contact', __FUNCTION__, false, $startTime, $endTime, $user);
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
        return EellyClient::request('contact/contact', __FUNCTION__, true, $day, $user);
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
    public function getContactsListAsync(int $day = 0, UidDTO $user = null)
    {
        return EellyClient::request('contact/contact', __FUNCTION__, false, $day, $user);
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
        return EellyClient::request('contact/contact', __FUNCTION__, true, $lastTime, $page, $user);
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
    public function getFansListAsync($lastTime = 0, $page = 1, UidDTO $user = null)
    {
        return EellyClient::request('contact/contact', __FUNCTION__, false, $lastTime, $page, $user);
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
        return EellyClient::request('contact/contact', __FUNCTION__, true, $mobileList, $user);
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
    public function newFriendMobileListAsync(array $mobileList, UidDTO $user)
    {
        return EellyClient::request('contact/contact', __FUNCTION__, false, $mobileList, $user);
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
        return EellyClient::request('contact/contact', __FUNCTION__, true, $userId, $ownerIds);
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
    public function getDiscountAsync(int $userId, array $ownerIds)
    {
        return EellyClient::request('contact/contact', __FUNCTION__, false, $userId, $ownerIds);
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
        return EellyClient::request('contact/contact', __FUNCTION__, true, $data, $user);
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
    public function addContactAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('contact/contact', __FUNCTION__, false, $data, $user);
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
        return EellyClient::request('contact/contact', __FUNCTION__, true, $data, $user);
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
    public function addMobileContactAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('contact/contact', __FUNCTION__, false, $data, $user);
    }

    /**
     * 获取联系人主表信息.
     *
     * @param array $condition
     * @param int $condition["ownerId"]     联系人所有者id(可不传)
     * @param string $condition["fields"]   获取的字段空间(可不传)
     * @param int $condition["fromType"]    来源类型：1 厂+ 2 店+ 3 CRM 4 云店卖家 5 云店买家(可不传)
     * @param int $condition["userType"]    用户类型：1 厂+ 2 店+ 3 云店卖家 4 云店买家(可不传)
     * @param string $condition["keyBy"]    指定返回数据的下标(可不传)
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --------------------|-------|--------------
     * 2                   |array  |  contactId值
     * 2["contactId"]      |string |  contactId值
     * 2["ownerId"]        |string |  联系人所有者id
     * 2["userId"]         |string |  联系人id
     *
     * @throws ContactException
     *
     * @return array
     * @requestExample({"condition":{"ownerId":1,"fields":"userId","fromType":2,"userType":1,"keyBy":"user_id"}})
     * @returnExample({
     *     "2":{
     *          "contactId":"1",
     *          "ownerId":"1",
     *          "userId":"2"
     *      },
     *     "148086":{
     *          "contactId":"2",
     *          "ownerId":"1",
     *          "userId":"148086"
     *      }
     * })
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年12月1日
     */
    public function getContactInfo(array $condition): array
    {
        return EellyClient::request('contact/contact', __FUNCTION__, true, $condition);
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