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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\ActivityResultInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ActivityResult
{
    /**
     * {@inheritdoc}
     */
    public function updateActivityResult(int $laId): array
    {
        return EellyClient::request('live/activityResult', __FUNCTION__, true, $laId);
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
