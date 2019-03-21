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

namespace Eelly\SDK\EellyOldCode\Api\Customer;

use Eelly\SDK\EellyClient;

/**
 * Class Contacts.
 *
 *  modules/Customer/Service/ContactsService.php
 *
 * @author zhangyangxun
 */
class Contacts
{
    /**
     * @param     $userListId
     * @param     $type
     * @param     $userType
     * @param int $dataType
     *
     * @return mixed
     */
    public function getContactsNames($userListId, $type, $userType, $dataType = 1)
    {
        return EellyClient::request('eellyOldCode/customer/contacts', __FUNCTION__, true, $userListId, $type, $userType, $dataType);
    }

    /**
     * 检查联系人数是否超过限定值
     *
     * @param int $fromUserId   用户id
     * @param int $fromUserType 用户类型: 4.店+ 3.厂+
     * @param int $needAddNum   本次需要添加的联系人人数
     * @return mixed
     *
     * @author 李伟权<liweiquan@eelly.net>
     * @since  2017年03月17日
     */
    public function checkContactsOverCount($fromUserId, $fromUserType, $needAddNum)
    {
        return EellyClient::request('eellyOldCode/customer/contacts', __FUNCTION__, true, $fromUserId, $fromUserType, $needAddNum);
    }

}
