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

namespace Eelly\SDK\Oauth\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Oauth\Service\ResourceServerInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class ResourceServer implements ResourceServerInterface
{

    
    public function verify(): void
    {
        return EellyClient::request('oauth/resourceserver', 'verify');
    }


}