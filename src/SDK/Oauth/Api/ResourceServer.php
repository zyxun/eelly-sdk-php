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
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ResourceServer implements ResourceServerInterface
{
    /**
     * 校验认证的令牌.
     *
     * @throws \Exception
     *
     * @return array
     *
     * @requestExample()
     * @returnExample()
     *
     * @author hehui<hehui@eelly.net>
     */
    public function verify(): void
    {
        return EellyClient::request('oauth/resourceServer', __FUNCTION__, true);
    }

    /**
     * 校验认证的令牌.
     *
     * @throws \Exception
     *
     * @return array
     *
     * @requestExample()
     * @returnExample()
     *
     * @author hehui<hehui@eelly.net>
     */
    public function verifyAsync()
    {
        return EellyClient::request('oauth/resourceServer', __FUNCTION__, false);
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