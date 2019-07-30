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
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class TutorRel
{
    public function getTutorRelInternal(int $userId)
    {
        return EellyClient::request('user/tutorRel', __FUNCTION__, true, $userId);
    }
}