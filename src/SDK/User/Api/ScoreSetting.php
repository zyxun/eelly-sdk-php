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

use Eelly\SDK\EellyClient;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ScoreSetting
{
    public function getScoreSetting(): array
    {
        return EellyClient::request('user/scoreSetting', __FUNCTION__, true);
    }

    public function saveScoreSetting(array $data): bool
    {
        return EellyClient::request('user/scoreSetting', __FUNCTION__, true, $data);
    }

    public function getOneByCode(string $code): array
    {
        return EellyClient::request('user/scoreSetting', __FUNCTION__, true, $code);
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
