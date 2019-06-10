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

namespace Eelly\SDK\EellyOldCode\Api\Base;

use Eelly\SDK\EellyClient;

/**
 * Class RegionService.
 *
 * var/eelly-old-code/modules/Base/Service/RegionService.php
 */
class Region
{
    /**
     * 获取省市区三级数据.
     *
     * @author wechan
     *
     * @since  2018年10月09日
     */
    public function getRegionSelectList()
    {
        return EellyClient::request('eellyOldCode/Base/Region', __FUNCTION__, true);
    }

    /**
     * 根据parentID获得下属地区（wap）.
     *
     * @service
     * > 数据说明
     *   key | value
     *   --------------------|--------------------
     *   status              |    状态码:200
     *   info                |    提示信息
     *                       |    200: 成功
     *   retval              |    $retval
     *
     * @param number $pid
     *
     * @return array
     *
     * > $retval 数组说明
     *   key | value
     *   --------------------|--------------------
     *   region_name         |    string   地区名
     *   zip_code            |    string   邮编
     *   gb_code             |    string   国标码
     * @catch
     */
    public function wapGetRegion($pid = 2)
    {
        return EellyClient::request('eellyOldCode/Base/Region', __FUNCTION__, true, $pid);
    }
    
    /**
     * 根据pid获得下属地区
     *
     * @param int $pid 父地区id
     * @author wechan
     * @since  2019年06月10日
     */
    public function getRegionByPid($pid = 1, $fields = 'appField')
    {
        return EellyClient::request('eellyOldCode/Base/Region', __FUNCTION__, true, $pid, $fields);
    }
}
