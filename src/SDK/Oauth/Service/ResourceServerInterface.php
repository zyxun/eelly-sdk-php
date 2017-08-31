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

namespace Eelly\SDK\Oauth\Service;

/**
 * 资源服务接口.
 *
 * @author hehui<hehui@eelly.net>
 */
interface ResourceServerInterface
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
    public function verify(): void;
}
