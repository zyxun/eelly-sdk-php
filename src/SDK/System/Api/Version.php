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

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\VersionInterface;
use Eelly\SDK\System\DTO\VersionDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Version implements VersionInterface
{
    /**
     * 获取单个APP版本信息.
     *
     * @param int $versionId 版本id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return VersionDTO
     * @requestExample({"versionId":1})
     * @returnExample({"versionId": 1,"appName": "IOS","downUrl": "http://www.eelly.com","version": "1","verName": "admin","isForced": 1,"remark":"","createdTime":1517300313})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since   2018.01.30
     */
    public function getVersion(int $versionId): VersionDTO
    {
        return EellyClient::request('system/version', 'getVersion', true, $versionId);
    }

    /**
     * 获取单个APP版本信息.
     *
     * @param int $versionId 版本id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return VersionDTO
     * @requestExample({"versionId":1})
     * @returnExample({"versionId": 1,"appName": "IOS","downUrl": "http://www.eelly.com","version": "1","verName": "admin","isForced": 1,"remark":"","createdTime":1517300313})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since   2018.01.30
     */
    public function getVersionAsync(int $versionId)
    {
        return EellyClient::request('system/version', 'getVersion', false, $versionId);
    }

    /**
     * 添加一条版本信息.
     *
     * @param array  $data                版本信息内容
     * @param string $data['appName']     应用名称
     * @param string $data['downUrl']     下载地址
     * @param string $data['version']     版本号
     * @param string $data['versionName'] 版本名称
     * @param int    $data['isForced']    是否强制更新：0 否 1 是
     * @param string $data['remark']      备注
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"data":{"appName": "IOS","downUrl": "http://www.eelly.com","version": "1","verName": "admin","isForced": 1,"remark":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since   2018.01.30
     */
    public function addVersion(array $data): bool
    {
        return EellyClient::request('system/version', 'addVersion', true, $data);
    }

    /**
     * 添加一条版本信息.
     *
     * @param array  $data                版本信息内容
     * @param string $data['appName']     应用名称
     * @param string $data['downUrl']     下载地址
     * @param string $data['version']     版本号
     * @param string $data['versionName'] 版本名称
     * @param int    $data['isForced']    是否强制更新：0 否 1 是
     * @param string $data['remark']      备注
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"data":{"appName": "IOS","downUrl": "http://www.eelly.com","version": "1","verName": "admin","isForced": 1,"remark":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since   2018.01.30
     */
    public function addVersionAsync(array $data)
    {
        return EellyClient::request('system/version', 'addVersion', false, $data);
    }

    /**
     * 修改版本信息.
     *
     * @param int    $versionId        版本id
     * @param array  $data             版本信息内容
     * @param string $data["appName"]  应用名称
     * @param string $data["downUrl"]  下载地址
     * @param string $data["version"]  版本号
     * @param string $data["verName"]  版本名称
     * @param int    $data["isForced"] 是否强制更新：0 否 1 是
     * @param string $data["remark"]   备注
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"versionId":1,"data":{"appName": "IOS","downUrl": "http://www.eelly.com","version": "1","verName": "admin","isForced": 1,"remark":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since   2018.01.30
     */
    public function updateVersion(int $versionId, array $data): bool
    {
        return EellyClient::request('system/version', 'updateVersion', true, $versionId, $data);
    }

    /**
     * 修改版本信息.
     *
     * @param int    $versionId        版本id
     * @param array  $data             版本信息内容
     * @param string $data["appName"]  应用名称
     * @param string $data["downUrl"]  下载地址
     * @param string $data["version"]  版本号
     * @param string $data["verName"]  版本名称
     * @param int    $data["isForced"] 是否强制更新：0 否 1 是
     * @param string $data["remark"]   备注
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"versionId":1,"data":{"appName": "IOS","downUrl": "http://www.eelly.com","version": "1","verName": "admin","isForced": 1,"remark":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since   2018.01.30
     */
    public function updateVersionAsync(int $versionId, array $data)
    {
        return EellyClient::request('system/version', 'updateVersion', false, $versionId, $data);
    }

    /**
     * 分页获取版本信息.
     *
     * @param array  $condition             版本信息条件
     * @param string $condition['isForced'] 是否强制更新：0 否 1 是
     * @param int    $limit                 分页条数
     * @param int    $currentPage           页码
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     * @requestExample({"condition": [{"isForced": 1}],"limit": "10","currentPage": "1"})
     * @returnExample({"items": [{"versionId": 1,"appName": "IOS","downUrl": "http://www.eelly.com","version": "1","verName": "admin","isForced": 1,"remark":"","createdTime":1517300313}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since   2018.01.30
     */
    public function listVersionPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/version', 'listVersionPage', true, $condition, $currentPage, $limit);
    }

    /**
     * 分页获取版本信息.
     *
     * @param array  $condition             版本信息条件
     * @param string $condition['isForced'] 是否强制更新：0 否 1 是
     * @param int    $limit                 分页条数
     * @param int    $currentPage           页码
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     * @requestExample({"condition": [{"isForced": 1}],"limit": "10","currentPage": "1"})
     * @returnExample({"items": [{"versionId": 1,"appName": "IOS","downUrl": "http://www.eelly.com","version": "1","verName": "admin","isForced": 1,"remark":"","createdTime":1517300313}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since   2018.01.30
     */
    public function listVersionPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('system/version', 'listVersionPage', false, $condition, $currentPage, $limit);
    }

    /**
     * 新版app版本更新接口
     * 
     * @param int $appType 版本类型：1 andriod买家 2 andriod卖家 3 iOS买家 4 iOS卖家
     * 
     * ### 请求参数
     * 字段名 | 类型 |描述
     * ---|---|---
     * appType | string | 版本类型：1 andriod买家 2 andriod卖家 3 iOS买家 4 iOS卖家
     * 
     * ### 返回结果
     * 字段名 | 类型 |描述
     * ---|---|---
     * modules | array | 强制更新的模块
     * versionName | string | 最新的版本名称
     * version | string | 最新的版本号
     * isModulesForced | int | 模块是否强制更新
     * isAllForced | int | 是否强制更新
     * remark | string | 备注
     * downUrl | string | 下载地址
     * title | string | app标题
     * 
     * @requestExample({"appType": 1})
     * @returnExample({"modules":["store","pay"],"isModulesForced":0,"isAllForced":0,"remark":"xxxxxxxxx","downUrl":"www.eelly.com","version":"2.4.0","versionName":"\u7248\u672c\u540d\u79f0","title":"xxx"})
     * 
     * @author wechan
     * @since 2019年03月06日
     */
    public function getAppVersion(string $appType): array
    {
        return EellyClient::request('system/version', 'getAppVersion', true, $appType);
    }

    /**
     * 新版app版本更新接口
     * 
     * @param int $appType 版本类型：1 andriod买家 2 andriod卖家 3 iOS买家 4 iOS卖家
     * 
     * ### 请求参数
     * 字段名 | 类型 |描述
     * ---|---|---
     * appType | string | 版本类型：1 andriod买家 2 andriod卖家 3 iOS买家 4 iOS卖家
     * 
     * ### 返回结果
     * 字段名 | 类型 |描述
     * ---|---|---
     * modules | array | 强制更新的模块
     * versionName | string | 最新的版本名称
     * version | string | 最新的版本号
     * isModulesForced | int | 模块是否强制更新
     * isAllForced | int | 是否强制更新
     * remark | string | 备注
     * downUrl | string | 下载地址
     * title | string | app标题
     * 
     * @requestExample({"appType": 1})
     * @returnExample({"modules":["store","pay"],"isModulesForced":0,"isAllForced":0,"remark":"xxxxxxxxx","downUrl":"www.eelly.com","version":"2.4.0","versionName":"\u7248\u672c\u540d\u79f0","title":"xxx"})
     * 
     * @author wechan
     * @since 2019年03月06日
     */
    public function getAppVersionAsync(string $appType)
    {
        return EellyClient::request('system/version', 'getAppVersion', false, $appType);
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