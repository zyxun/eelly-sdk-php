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

namespace Eelly\SDK\Activity\Service;

/**
 * 验证接口逻辑.
 *
 * @author wechan<liweiquan@eelly.net>
 */
interface ActivityValidationInterface
{
    /**
     * 校验是否卖家.
     *
     * @param int $userId 买家id
     *
     * @throws \Eelly\SDK\Activity\Exception\ActivityException
     *
     * @return bool
     * @requestExample({"userId": 1})
     * @returnExample({"result":true})
     *
     * @author wechan<liweiquan@eelly.net>
     *
     * @since 2017年9月2日
     */
    public function checkIsSeller(int $userId): bool;
}
