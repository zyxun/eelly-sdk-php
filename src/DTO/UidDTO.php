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
     * @return int
     */
    public function getUid(): int
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     *
     * @return UidDTO
     */
    public function setUid(int $uid): self
    {
        $this->uid = $uid;

        return $this;
    }
}
