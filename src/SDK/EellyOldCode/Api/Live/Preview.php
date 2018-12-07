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

namespace Eelly\SDK\EellyOldCode\Api\Live;

use Eelly\SDK\EellyClient;

/**
 * Class Preview.
 *
 * @author zhangyangxun
 */
class Preview
{
    /**
     * 弹窗信息.
     *
     * @param int $storeId 店铺ID
     * @param int $userId  用户ID
     *
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     */
    public function popWapInfo(int $storeId, int $userId = 0): array
    {
        return EellyClient::request('eellyOldCode/Live/Preview', __FUNCTION__, true, $storeId, $userId);
    }
}
