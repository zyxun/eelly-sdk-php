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

return [
    'eelly' => [
        'options' => [
            'clientId'                => 'myawesomeapp',
            'clientSecret'            => 'abc123',
            'redirectUri'             => '',
            'urlAuthorize'            => 'https://api.eelly.dev/oauth/resourceServer/verify',
            'urlAccessToken'          => 'https://api.eelly.dev/oauth/authorizationServer/accessToken',
            'urlResourceOwnerDetails' => 'https://api.eelly.dev',
        ],
        // 各模块请求地址
        'providerUri' => [
            'logger'  => 'https://api.eelly.dev',
            'example' => 'https://api.eelly.dev',
            'oauth'   => 'https://api.eelly.dev',
            'user'    => 'https://api.eelly.dev',
        ],
    ],
];
