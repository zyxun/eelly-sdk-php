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
 * Class UidDTO.
 */
class UidDTO extends AbstractDTO
{
    /**
     * 用户id.
     *
     * @var int
     */
    public $uid;

    /**
     * 店铺id列表.
     *
     * @var array
     */
    public $stores = [];

    /**
     * UidDTO constructor.
     *
     * @param int   $uid
     * @param array $stores
     */
    public function __construct(int $uid, array $stores)
    {
        $this->uid = $uid;
        $this->stores = $stores;
    }

    /**
     * @return int
     */
    public function getUid(): int
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     */
    public function setUid(int $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * @return array
     */
    public function getStores(): array
    {
        return $this->stores;
    }

    /**
     * @param array $stores
     */
    public function setStores(array $stores): void
    {
        $this->stores = $stores;
    }
}
