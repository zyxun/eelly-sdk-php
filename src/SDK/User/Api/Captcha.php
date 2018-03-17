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

namespace Eelly\SDK\User\Api;

use Eelly\SDK\User\Service\CaptchaInterface;

class Captcha implements CaptchaInterface
{
    public function build(string $cacheKey = null, string $phrase = null, int $lifetime = 3600, int $length = 5, string $charset = 'abcdefghijklmnpqrstuvwxyz123456789'): array
    {
        return EellyClient::request('user/captcha', __FUNCTION__, true, $cacheKey, $phrase, $lifetime, $length, $charset);
    }

    public function check(string $cacheKey, string $value): bool
    {
        return EellyClient::request('user/captcha', __FUNCTION__, true, $cacheKey, $value);
    }
}
