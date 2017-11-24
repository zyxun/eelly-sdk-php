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

namespace Eelly\SDK\Moments\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Moments\Service\MomentsDynamicListInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class DynamicList implements MomentsDynamicListInterface
{
    /**
     * 添加一条朋友圈动态记录.
     *
     * @param array  $data                  动态数据
     * @param string $data["clientId"]      客户端id
     * @param string $data["clientType"]    客户端类型
     * @param string $data["longitude"]     经度
     * @param string $data["latitude"]      纬度
     * @param string $data["gbCode"]        区域编码
     * @param int    $data["userId"]        用户id
     * @param int    $data["storeId"]       店铺id
     * @param string $data["content"]       内容
     * @param array  $data["itemIds"]       可见用户id集合
     * @param array  $data["mediaList"]     媒体信息数据
     * @param int    $data["privacyStatus"] 隐私状态(1.公开;2.隐私；3.部分可见)
     * @param int    $data["status"]        状态：1.正常，2.删除
     * @param int    $data["createdTime"]   创建时间
     * @param UidDTO $user                  用户登录信息
     *
     * @throws MomentsException
     *
     * @return bool
     *
     * @requestExample({"data":{"clientId":"","clientType":"","longitude":"","latitude":"","gbCode":"","userId":148086,"storeId":148086,"content":"nice to meet you~ ","itemIds":[148086,1762612],"mediaList":[{"type_id":1,"url_cover":"G02\/M00\/00\/02\/ooYBAFePKG-IW-3iAACTDa6WkiAAAABHAO8wHQAAJMl443.png"},{"type_id":2,"url":"G01\/M00\/00\/05\/oYYBAFePKHCIPX1IAAUli3GLvRQAAACAQP6efQABSWj479.mp4","url_cover":"G02\/M00\/00\/02\/ooYBAFePKG-IW-3iAACTDa6WkiAAAABHAO8wHQAAJMl443.png"}],"privacyStatus":1,"status":1,"createdTime":1507802318}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-10-18
     */
    public function addDynamic(array $data = [], UidDTO $user = null): bool
    {
        return EellyClient::request('moments/dynamicList', __FUNCTION__, true, $data, $user);
    }

    /**
     * 添加一条朋友圈动态记录.
     *
     * @param array  $data                  动态数据
     * @param string $data["clientId"]      客户端id
     * @param string $data["clientType"]    客户端类型
     * @param string $data["longitude"]     经度
     * @param string $data["latitude"]      纬度
     * @param string $data["gbCode"]        区域编码
     * @param int    $data["userId"]        用户id
     * @param int    $data["storeId"]       店铺id
     * @param string $data["content"]       内容
     * @param array  $data["itemIds"]       可见用户id集合
     * @param array  $data["mediaList"]     媒体信息数据
     * @param int    $data["privacyStatus"] 隐私状态(1.公开;2.隐私；3.部分可见)
     * @param int    $data["status"]        状态：1.正常，2.删除
     * @param int    $data["createdTime"]   创建时间
     * @param UidDTO $user                  用户登录信息
     *
     * @throws MomentsException
     *
     * @return bool
     *
     * @requestExample({"data":{"clientId":"","clientType":"","longitude":"","latitude":"","gbCode":"","userId":148086,"storeId":148086,"content":"nice to meet you~ ","itemIds":[148086,1762612],"mediaList":[{"type_id":1,"url_cover":"G02\/M00\/00\/02\/ooYBAFePKG-IW-3iAACTDa6WkiAAAABHAO8wHQAAJMl443.png"},{"type_id":2,"url":"G01\/M00\/00\/05\/oYYBAFePKHCIPX1IAAUli3GLvRQAAACAQP6efQABSWj479.mp4","url_cover":"G02\/M00\/00\/02\/ooYBAFePKG-IW-3iAACTDa6WkiAAAABHAO8wHQAAJMl443.png"}],"privacyStatus":1,"status":1,"createdTime":1507802318}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-10-18
     */
    public function addDynamicAsync(array $data = [], UidDTO $user = null)
    {
        return EellyClient::request('moments/dynamicList', __FUNCTION__, false, $data, $user);
    }

    /**
     * 更新朋友圈动态的权限.
     *
     * @param string $mdlId                  朋友圈动态主键id
     * @param array  $data                   权限数据
     * @param int    $data['privacy_status'] 隐私状态(1.公开;2.隐私；3.部分可见)
     * @param UidDTO $user                   用户登录信息
     *
     * @requestExample({"mdlId":"59e06e04b7dd8400514e38a2", "data":{"privacyStatus":2}})
     * @returnExample(true)
     *
     * @throws MomentsException
     *
     * @return bool
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-10-19
     */
    public function updateDynamic(string $mdlId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('moments/dynamicList', __FUNCTION__, true, $mdlId, $data, $user);
    }

    /**
     * 更新朋友圈动态的权限.
     *
     * @param string $mdlId                  朋友圈动态主键id
     * @param array  $data                   权限数据
     * @param int    $data['privacy_status'] 隐私状态(1.公开;2.隐私；3.部分可见)
     * @param UidDTO $user                   用户登录信息
     *
     * @requestExample({"mdlId":"59e06e04b7dd8400514e38a2", "data":{"privacyStatus":2}})
     * @returnExample(true)
     *
     * @throws MomentsException
     *
     * @return bool
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-10-19
     */
    public function updateDynamicAsync(string $mdlId, array $data, UidDTO $user = null)
    {
        return EellyClient::request('moments/dynamicList', __FUNCTION__, false, $mdlId, $data, $user);
    }

    /**
     * 删除朋友圈动态
     *
     * @param string $mdlId 朋友圈动态主键id
     * @param UidDTO $user  用户登录信息
     *
     * @requestExample({"mdlId":"59e06e04b7dd8400514e38a2"})
     * @returnExample(true)
     *
     * @throws MomentsException
     *
     * @return bool
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-10-19
     */
    public function deleteDynamic(string $mdlId, UidDTO $user = null): bool
    {
        return EellyClient::request('moments/dynamicList', __FUNCTION__, true, $mdlId, $user);
    }

    /**
     * 删除朋友圈动态
     *
     * @param string $mdlId 朋友圈动态主键id
     * @param UidDTO $user  用户登录信息
     *
     * @requestExample({"mdlId":"59e06e04b7dd8400514e38a2"})
     * @returnExample(true)
     *
     * @throws MomentsException
     *
     * @return bool
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-10-19
     */
    public function deleteDynamicAsync(string $mdlId, UidDTO $user = null)
    {
        return EellyClient::request('moments/dynamicList', __FUNCTION__, false, $mdlId, $user);
    }

    /**
     * 删除朋友圈动态
     *
     * @param string $mdlId 朋友圈动态主键id
     *
     * @requestExample({"mdlId":"59e06e04b7dd8400514e38a2"})
     * @returnExample(true)
     *
     * @throws MomentsException
     *
     * @return bool
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-10-19
     */
    public function listDynamicPage(string $mdlId): bool
    {
        return EellyClient::request('moments/dynamicList', __FUNCTION__, true, $mdlId);
    }

    /**
     * 删除朋友圈动态
     *
     * @param string $mdlId 朋友圈动态主键id
     *
     * @requestExample({"mdlId":"59e06e04b7dd8400514e38a2"})
     * @returnExample(true)
     *
     * @throws MomentsException
     *
     * @return bool
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-10-19
     */
    public function listDynamicPageAsync(string $mdlId)
    {
        return EellyClient::request('moments/dynamicList', __FUNCTION__, false, $mdlId);
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