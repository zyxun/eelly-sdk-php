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
 * Class Profile.
 *
 * var/eelly-old-code/modules/Customer/Service/ContactsService.php
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
     * @return mixed
     */
    public function getContactsNames($userListId, $type, $userType, $dataType = 1)
    {
        return EellyClient::request('eellyOldCode/customer/contacts', __FUNCTION__, true, $userListId, $type, $userType, $dataType);
    }
}
