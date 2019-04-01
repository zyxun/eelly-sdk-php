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

namespace Eelly\SDK\EellyOldCode\Api\Store\ServiceTools;

/**
 * Class ServiceTools.
 *
 * modules/Store/Service/ServiceTools
 *
 * @author sunanzhi <sunanzhi@hotmail.com>
 */
class StUserTools
{
    /**
     * 插入增值服务用户与工具关系
     *
     * @param int $userId 用户id
     * @param int $tId 工具类型
     * @param int $aId 工具价格类型
     * @param int $expireTime 到期时间
     * @param string $desc 描述
     * @param array $extends 拓展使用
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.6
     */
    public function addStUserToolsV2($userId, $tId, $aId, $expireTime, $desc = '', $extends = [])
    {
        return \Eelly\SDK\EellyClient::request('eellyOldCode/store/ServiceTools/StUserTools', __FUNCTION__, true, $userId, $tId, $aId, $expireTime, $desc, $extends);
    }
    
    /**
     * 赠送工具，只会赠送数量
     *
     * @param $userId
     * @param $adminName
     * @param $tId
     * @param int $aId 工具子表id
     * @param $des
     * @param $gsId
     * @param $timeNumber 时间单位
     * @param array $extensions 其他信息
     * @return array
     */
    public function giveUserSetupSave($userId, $adminName, $tId, $aId, $des, $gsId = 0, $timeNumber = 0, array $extensions = [])
    {
        return \Eelly\SDK\EellyClient::request('eellyOldCode/store/ServiceTools/StUserTools', __FUNCTION__, true, $userId, $adminName, $tId, $aId, $des, $gsId, $timeNumber, $extensions);
    }
}
