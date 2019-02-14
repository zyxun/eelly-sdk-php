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

use Eelly\SDK\EellyClient;
use Eelly\SDK\Im\Service\UserInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class User implements UserInterface
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
    public function setSpecialRelation(int $fromUid, int $fromType, int $targetUid, int $targetType, int $relationType, int $value): bool
    {
        return EellyClient::request('im/user', 'setSpecialRelation', true, $fromUid, $fromType, $targetUid, $targetType, $relationType, $value);
    }

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
    public function setSpecialRelationAsync(int $fromUid, int $fromType, int $targetUid, int $targetType, int $relationType, int $value)
    {
        return EellyClient::request('im/user', 'setSpecialRelation', false, $fromUid, $fromType, $targetUid, $targetType, $relationType, $value);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}