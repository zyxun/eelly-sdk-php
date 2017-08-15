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

namespace Eelly\DTO;

/**
 * Class VisitorDTO.
 */
class VisitorDTO extends AbstractDTO
{
    /**
     * token id.
     *
     * @var string
     */
    public $tokenId;

    /**
     * client id.
     *
     * @var string
     */
    public $clientId;

    /**
     * user id.
     *
     * @var int
     */
    public $userId;

    /**
     * @return string
     */
    public function getTokenId(): string
    {
        return $this->tokenId;
    }

    /**
     * @param string $tokenId
     *
     * @return UserDTO
     */
    public function setTokenId(string $tokenId): UserDTO
    {
        $this->tokenId = $tokenId;

        return $this;
    }

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     *
     * @return UserDTO
     */
    public function setClientId(string $clientId): UserDTO
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     *
     * @return UserDTO
     */
    public function setUserId(int $userId): UserDTO
    {
        $this->userId = $userId;

        return $this;
    }
}
