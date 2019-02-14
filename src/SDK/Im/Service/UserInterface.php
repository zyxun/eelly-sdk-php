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

namespace Eelly\SDK\Im\Service;

/**
 * IM用户逻辑接口层
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface UserInterface
{
    /**
     * 设置黑名单/静音
     *
     * @param int $uid
     * @param int $targetUid
     * @param int $type             1-店，2-厂
     * @param int $relationType     1-黑名单，2-静音
     * @param int $value
     * @return bool
     *
     * @internal
     */
    public function setSpecialRelation(int $uid, int $targetUid, int $type, int $relationType, int $value): bool;

}