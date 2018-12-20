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

namespace Eelly\SDK\Im\Api;

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Im\Service\AccountsInterface;

class Accounts implements AccountsInterface
{
    /**
     *{@inheritdoc}
     */
    public function getOne(int $uid, int $type, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('im/accounts', __FUNCTION__, true, $uid, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function getOneNoLogin(int $uid, int $type): array
    {
        return EellyClient::request('im/accounts', __FUNCTION__, true, $uid, $type);
    }


    /**
     * {@inheritdoc}
     */
    public function getList(array $users, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('im/accounts', __FUNCTION__, true, $users);
    }

    /**
     * {@inheritdoc}
     */
    public function getListNoLogin(array $users): array
    {
        return EellyClient::request('im/accounts', __FUNCTION__, true, $users);
    }

}
