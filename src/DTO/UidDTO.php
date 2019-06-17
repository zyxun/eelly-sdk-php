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
     * 原来的用户id.
     *
     * 当uid被覆盖后, origUid就会大于0
     *
     * @var int
     */
    public $origUid = 0;

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
    public function setUid(int $uid): self
    {
        $this->uid = $uid;
        
        return $this;
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
    public function setStores(array $stores): self
    {
        $this->stores = $stores;
        
        return $this;
    }

    /**
     * @return int
     */
    public function getOrigUid(): int
    {
        return $this->origUid;
    }

    /**
     * @param int $origUid
     */
    public function setOrigUid(int $origUid): self
    {
        $this->origUid = $origUid;
        
        return $this;
    }    
}
