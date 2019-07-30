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

namespace Eelly\SDK\EellyOldCode\Api\BusinessCircle;

use Eelly\SDK\EellyClient;

/**
 * Class BusinessCircle.
 *
 *  modules/BusinessCircle/Service/BusinessCircleService.php
 *
 * @author hehui<hehui@eelly.net>
 */
class BusinessCircle
{
    /**
     * @param array $param
     *
     * @return mixed
     */
    public function factoryBusinessCircle2(array $param)
    {
        return EellyClient::request('eellyOldCode/businessCircle/businessCircle', __FUNCTION__, true, $param);
    }

    /**
     * 获取动态信息
     *
     * @param array $fmIds 动态id
     *
     * @return array
     *
     */
    public function getDynamicByFmIds(array $fmIds)
    {
        return EellyClient::request('eellyOldCode/businessCircle/businessCircle', __FUNCTION__, true, $fmIds);
    }
}
