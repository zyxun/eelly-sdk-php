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

namespace Eelly\SDK\EellyOldCode\Api\Channel;

use Eelly\SDK\EellyClient;

/**
 * Class PageDataService.
 *
 * modules/Channel/Service/PageDataService.php
 *
 * @author zhangyangxun
 */
class PageData
{
    /**
     * 获取ecm_home_page数据.
     *
     * @param string $title
     * @param int    $typeId
     * @param bool   $isDecode
     *
     * @return mixed
     */
    public function getHomeData(string $title, int $typeId = 20, $isDecode = true)
    {
        return EellyClient::request('eellyOldCode/Channel/PageData', __FUNCTION__, true, $title, $typeId, $isDecode);
    }
}
