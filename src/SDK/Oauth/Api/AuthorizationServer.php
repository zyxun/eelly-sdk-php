<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Oauth\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Oauth\Service\AuthorizationServerInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class AuthorizationServer implements AuthorizationServerInterface
{

    
    public function accessToken(): void
    {
        return EellyClient::request('oauth/authorizationserver', 'accessToken');
    }


}