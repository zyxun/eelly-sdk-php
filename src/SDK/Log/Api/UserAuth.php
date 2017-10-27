<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Eelly\SDK\Log\Api;


use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\UserAuthInterface;

class UserAuth implements UserAuthInterface
{

    /**
     * {@inheritdoc}
     */
    public function getUserAuthCount(int $userId, int $startTime, int $endTime = 0): int
    {
        return EellyClient::request('log/userAuth', 'getUserAuthCount', $userId, $startTime, $endTime);
    }

    /**
     * {@inheritdoc}
     */
    public function addUserAuth(array $data,  int $userId): bool
    {
        return EellyClient::request('log/userAuth', 'addUserAuth', $data, $userId);
    }
}