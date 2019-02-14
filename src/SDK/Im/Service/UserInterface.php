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
     * @param int $fromUid
     * @param int $fromType         1-店，2-厂
     * @param int $targetUid
     * @param int $targetType       1-店，2-厂
     * @param int $relationType     1-黑名单，2-静音
     * @param int $value            0-取消，1-加入
     * @return bool
     *
     * @internal
     */
    public function setSpecialRelation(int $fromUid, int $fromType, int $targetUid, int $targetType, int $relationType, int $value): bool;

}