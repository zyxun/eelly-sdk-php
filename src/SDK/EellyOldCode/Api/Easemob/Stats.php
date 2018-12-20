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

namespace Eelly\SDK\EellyOldCode\Api\Easemob;

use Eelly\SDK\EellyClient;

/**
 * Class Stats.
 *
 * modules/Easemob/Service/StatsService.php
 *
 * @author hehui<runphp@dingtalk.com>
 */
class Stats
{
    /**
     * 获取用于统计的会话信息.
     *
     *
     * @param string $id   session id
     * @param array  $data 会话信息
     *
     * @author hehui<hehui@eelly.net>
     *
     * @since  2016年11月17日
     */
    public function session(string $id = null, array $data = [])
    {
        return EellyClient::request('eellyOldCode/easemob/stats', __FUNCTION__, true, $id, $data);
    }
}
