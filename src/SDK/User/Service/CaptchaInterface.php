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

namespace Eelly\SDK\User\Service;

/**
 * 验证码.
 *
 * @author hehui <hehui@eelly.net>
 */
interface CaptchaInterface
{
    /**
     * 创建验证码.
     *
     * @param string|null $cacheKey 验证码缓存key
     * @param string|null $phrase   验证码字符
     * @param int         $lifetime 有效期
     * @param int         $length   验证码长度
     * @param string      $charset  验证码字符集
     *
     * @return array
     */
    public function build(string $cacheKey = null, string $phrase = null, int $lifetime = 3600, int $length = 5, string $charset = 'abcdefghijklmnpqrstuvwxyz123456789'): array;

    /**
     * 检查验证码.
     *
     * @param string $cacheKey 验证码缓存key
     * @param string $value    验证码
     *
     * @return bool
     */
    public function check(string $cacheKey, string $value): bool;
}
