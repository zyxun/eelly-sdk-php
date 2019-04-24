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
use Eelly\SDK\System\Service\RegionInterface;
use Eelly\SDK\SYSTEM\DTO\RegionDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Region
{
    /**
     * 根据传过来的主键id，返回对应的网格化区域信息.
     *
     * @param int $gbCode 区域国标编码
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return RegionDTO
     * @requestExample({"gbCode":1})
     * @returnExample({"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,"regionCode":""})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function getRegion(int $gbCode): RegionDTO
    {
        return EellyClient::request('system/region', 'getRegion', true, $gbCode);
    }

    /**
     * 根据传过来的主键id，返回对应的网格化区域信息.
     *
     * @param int $gbCode 区域国标编码
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return RegionDTO
     * @requestExample({"gbCode":1})
     * @returnExample({"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,"regionCode":""})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function getRegionAsync(int $gbCode)
    {
        return EellyClient::request('system/region', 'getRegion', false, $gbCode);
    }

    /**
     * 新增网格化区域信息记录.
     *
     * @param array  $data               网格化区域信息数据
     * @param int    $data['gbCode']     区域国标编码
     * @param string $data['areaName']   区域名称
     * @param string $data['shortName']  区域简称
     * @param int    $data['parentCode'] 上级编码
     * @param string $data['telCode']    电话区号
     * @param int    $data['zipCode']    邮政编码
     * @param int    $data['regionCode'] 区域所属片区
     * @param UidDTO $user               登录用户信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,"regionCode":""})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function addRegion(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/region', 'addRegion', true, $data, $user);
    }

    /**
     * 新增网格化区域信息记录.
     *
     * @param array  $data               网格化区域信息数据
     * @param int    $data['gbCode']     区域国标编码
     * @param string $data['areaName']   区域名称
     * @param string $data['shortName']  区域简称
     * @param int    $data['parentCode'] 上级编码
     * @param string $data['telCode']    电话区号
     * @param int    $data['zipCode']    邮政编码
     * @param int    $data['regionCode'] 区域所属片区
     * @param UidDTO $user               登录用户信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,"regionCode":""})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function addRegionAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('system/region', 'addRegion', false, $data, $user);
    }

    /**
     * 更新网格化区域信息记录.
     *
     * @param int    $gbCode             区域国标编码
     * @param array  $data               网格化区域信息数据
     * @param string $data['areaName']   区域名称
     * @param string $data['shortName']  区域简称
     * @param int    $data['parentCode'] 上级编码
     * @param string $data['telCode']    电话区号
     * @param int    $data['zipCode']    邮政编码
     * @param int    $data['regionCode'] 区域所属片区
     * @param UidDTO $user               登录用户信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"gbCode":110000,"data":{"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,"regionCode":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function updateRegion(int $gbCode, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/region', 'updateRegion', true, $gbCode, $data, $user);
    }

    /**
     * 更新网格化区域信息记录.
     *
     * @param int    $gbCode             区域国标编码
     * @param array  $data               网格化区域信息数据
     * @param string $data['areaName']   区域名称
     * @param string $data['shortName']  区域简称
     * @param int    $data['parentCode'] 上级编码
     * @param string $data['telCode']    电话区号
     * @param int    $data['zipCode']    邮政编码
     * @param int    $data['regionCode'] 区域所属片区
     * @param UidDTO $user               登录用户信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"gbCode":110000,"data":{"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,"regionCode":""}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function updateRegionAsync(int $gbCode, array $data, UidDTO $user = null)
    {
        return EellyClient::request('system/region', 'updateRegion', false, $gbCode, $data, $user);
    }

    /**
     * 分页获取网格化区域信息列表.
     *
     * @param array $condition               查询条件
     * @param int   $condition['parentCode'] 上级编码
     * @param int   $condition['telCode']    电话区号
     * @param int   $condition['zipCode']    邮政编码
     * @param int   $currentPage             页码
     * @param int   $limit                   分页条数
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -----------------------|-------|--------------
     * items                  |array  |
     * items["gbCode"]        |int    | 区域国标编码
     * items["areaName"]      |string | 区域名称
     * items["shortName"]     |string | 区域简称
     * items["parentCode"]    |string | 上级编码
     * items["telCode"]       |int    | 电话区号
     * items["zipCode"]       |int    | 邮政编码
     * items["regionCode"]    |string | 区域所属片区
     * page                   |array  |
     * page[first]            |int    | 第一页
     * page[before]           |int    | 上一页
     * page[current]          |int    | 当前页
     * page[last]             |int    | 最后一页
     * page[next]             |int    | 下一页
     * page[total_pages]      |int    | 总页数
     * page[total_items]      |int    | 总数
     * page[limit]            |int    | 每页显示的数量
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     * @requestExample(["condition": [{"parentCode": 1,"telCode":"00852","zipCode":100000}],"currentPage": "1","limit": "20"])
     * @returnExample(["items": [{"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,
     *     "regionCode":""}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function listRegionPage(array $condition = [], int $currentPage = 1, int $limit = 20): array
    {
        return EellyClient::request('system/region', 'listRegionPage', true, $condition, $currentPage, $limit);
    }

    /**
     * 分页获取网格化区域信息列表.
     *
     * @param array $condition               查询条件
     * @param int   $condition['parentCode'] 上级编码
     * @param int   $condition['telCode']    电话区号
     * @param int   $condition['zipCode']    邮政编码
     * @param int   $currentPage             页码
     * @param int   $limit                   分页条数
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -----------------------|-------|--------------
     * items                  |array  |
     * items["gbCode"]        |int    | 区域国标编码
     * items["areaName"]      |string | 区域名称
     * items["shortName"]     |string | 区域简称
     * items["parentCode"]    |string | 上级编码
     * items["telCode"]       |int    | 电话区号
     * items["zipCode"]       |int    | 邮政编码
     * items["regionCode"]    |string | 区域所属片区
     * page                   |array  |
     * page[first]            |int    | 第一页
     * page[before]           |int    | 上一页
     * page[current]          |int    | 当前页
     * page[last]             |int    | 最后一页
     * page[next]             |int    | 下一页
     * page[total_pages]      |int    | 总页数
     * page[total_items]      |int    | 总数
     * page[limit]            |int    | 每页显示的数量
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     * @requestExample(["condition": [{"parentCode": 1,"telCode":"00852","zipCode":100000}],"currentPage": "1","limit": "20"])
     * @returnExample(["items": [{"gbCode":110000,"areaName":"北京", "shortName":"北京","parentCode":"上级编码","telCode":00852,"zipCode":100000,
     *     "regionCode":""}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-26
     */
    public function listRegionPageAsync(array $condition = [], int $currentPage = 1, int $limit = 20)
    {
        return EellyClient::request('system/region', 'listRegionPage', false, $condition, $currentPage, $limit);
    }

    /**
     * 根据传过来的gbCode，返回对应的地址信息.
     *
     * @param int $gbCode 区域国标编码
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     * @requestExample({"gbCode":1})
     * @returnExample({"gbCode":"4401","areaName":"广东省 广州市","shortName":"广东 广州"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2017-10-31
     */
    public function getUserAddressByGbCode(int $gbCode): array
    {
        return EellyClient::request('system/region', 'getUserAddressByGbCode', true, $gbCode);
    }

    /**
     * 根据传过来的gbCode，返回对应的地址信息.
     *
     * @param int $gbCode 区域国标编码
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     * @requestExample({"gbCode":1})
     * @returnExample({"gbCode":"4401","areaName":"广东省 广州市","shortName":"广东 广州"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2017-10-31
     */
    public function getUserAddressByGbCodeAsync(int $gbCode)
    {
        return EellyClient::request('system/region', 'getUserAddressByGbCode', false, $gbCode);
    }

    /**
     * 根据上级编码，返回对应的下级数据 (不传值，默认返回省份的列表数据).
     *
     * @param int $parentCode 上级编码
     *
     * @return array
     * @requestExample({"parentCode":1})
     * @returnExample([{"gbCode":"1","areaName":"\u4e2d\u56fd","shortName":"\u4e2d\u56fd","parentCode":"0"},{"gbCode":"2","areaName":"\u6d77\u5916","shortName":"\u6d77\u5916","parentCode":"0"}])
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-12-09
     */
    public function getRegionListByParentCode(int $parentCode = 1): array
    {
        return EellyClient::request('system/region', 'getRegionListByParentCode', true, $parentCode);
    }

    /**
     * 根据上级编码，返回对应的下级数据 (不传值，默认返回省份的列表数据).
     *
     * @param int $parentCode 上级编码
     *
     * @return array
     * @requestExample({"parentCode":1})
     * @returnExample([{"gbCode":"1","areaName":"\u4e2d\u56fd","shortName":"\u4e2d\u56fd","parentCode":"0"},{"gbCode":"2","areaName":"\u6d77\u5916","shortName":"\u6d77\u5916","parentCode":"0"}])
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since 2017-12-09
     */
    public function getRegionListByParentCodeAsync(int $parentCode = 1)
    {
        return EellyClient::request('system/region', 'getRegionListByParentCode', false, $parentCode);
    }

    /**
     * 获取省市区三级数据
     *
     * @returnExample([{"regionName":"\u5317\u4eac\u5e02","zipCode":"0","gbCode":"11"},{"regionName":"\u5929\u6d25\u5e02","zipCode":"0","gbCode":"12"},{"regionName":"\u6cb3\u5317\u7701","zipCode":"0","gbCode":"13"},{"regionName":"\u5c71\u897f\u7701","zipCode":"0","gbCode":"14"},{"regionName":"\u5185\u8499\u53e4\u81ea\u6cbb\u533a","zipCode":"0","gbCode":"15"},{"regionName":"\u8fbd\u5b81\u7701","zipCode":"0","gbCode":"21"},{"regionName":"\u5409\u6797\u7701","zipCode":"0","gbCode":"22"},{"regionName":"\u9ed1\u9f99\u6c5f\u7701","zipCode":"0","gbCode":"23"},{"regionName":"\u4e0a\u6d77\u5e02","zipCode":"0","gbCode":"31"},{"regionName":"\u6c5f\u82cf\u7701","zipCode":"0","gbCode":"32"},{"regionName":"\u6d59\u6c5f\u7701","zipCode":"0","gbCode":"33"},{"regionName":"\u5b89\u5fbd\u7701","zipCode":"0","gbCode":"34"},{"regionName":"\u798f\u5efa\u7701","zipCode":"0","gbCode":"35"},{"regionName":"\u6c5f\u897f\u7701","zipCode":"0","gbCode":"36"},{"regionName":"\u5c71\u4e1c\u7701","zipCode":"0","gbCode":"37"},{"regionName":"\u6cb3\u5357\u7701","zipCode":"0","gbCode":"41"},{"regionName":"\u6e56\u5317\u7701","zipCode":"0","gbCode":"42"},{"regionName":"\u6e56\u5357\u7701","zipCode":"0","gbCode":"43"},{"regionName":"\u5e7f\u4e1c\u7701","zipCode":"0","gbCode":"44"},{"regionName":"\u5e7f\u897f\u58ee\u65cf\u81ea\u6cbb\u533a","zipCode":"0","gbCode":"45"},{"regionName":"\u6d77\u5357\u7701","zipCode":"0","gbCode":"46"},{"regionName":"\u91cd\u5e86\u5e02","zipCode":"0","gbCode":"50"},{"regionName":"\u56db\u5ddd\u7701","zipCode":"0","gbCode":"51"},{"regionName":"\u8d35\u5dde\u7701","zipCode":"0","gbCode":"52"},{"regionName":"\u4e91\u5357\u7701","zipCode":"0","gbCode":"53"},{"regionName":"\u897f\u85cf\u81ea\u6cbb\u533a","zipCode":"0","gbCode":"54"},{"regionName":"\u9655\u897f\u7701","zipCode":"0","gbCode":"61"},{"regionName":"\u7518\u8083\u7701","zipCode":"0","gbCode":"62"},{"regionName":"\u9752\u6d77\u7701","zipCode":"0","gbCode":"63"},{"regionName":"\u5b81\u590f\u56de\u65cf\u81ea\u6cbb\u533a","zipCode":"0","gbCode":"64"},{"regionName":"\u65b0\u7586\u7ef4\u543e\u5c14\u81ea\u6cbb\u533a","zipCode":"0","gbCode":"65"},{"regionName":"\u53f0\u6e7e\u7701","zipCode":"0","gbCode":"71"},{"regionName":"\u9999\u6e2f\u7279\u522b\u884c\u653f\u533a","zipCode":"999077","gbCode":"81"},{"regionName":"\u6fb3\u95e8\u7279\u522b\u884c\u653f\u533a","zipCode":"999078","gbCode":"82"}])
     * 
     * @author wechan
     * @since  2018年10月09日
     */
    public function getRegionSelectList(): array
    {
        return EellyClient::request('system/region', 'getRegionSelectList', true);
    }

    /**
     * 获取省市区三级数据
     *
     * @returnExample([{"regionName":"\u5317\u4eac\u5e02","zipCode":"0","gbCode":"11"},{"regionName":"\u5929\u6d25\u5e02","zipCode":"0","gbCode":"12"},{"regionName":"\u6cb3\u5317\u7701","zipCode":"0","gbCode":"13"},{"regionName":"\u5c71\u897f\u7701","zipCode":"0","gbCode":"14"},{"regionName":"\u5185\u8499\u53e4\u81ea\u6cbb\u533a","zipCode":"0","gbCode":"15"},{"regionName":"\u8fbd\u5b81\u7701","zipCode":"0","gbCode":"21"},{"regionName":"\u5409\u6797\u7701","zipCode":"0","gbCode":"22"},{"regionName":"\u9ed1\u9f99\u6c5f\u7701","zipCode":"0","gbCode":"23"},{"regionName":"\u4e0a\u6d77\u5e02","zipCode":"0","gbCode":"31"},{"regionName":"\u6c5f\u82cf\u7701","zipCode":"0","gbCode":"32"},{"regionName":"\u6d59\u6c5f\u7701","zipCode":"0","gbCode":"33"},{"regionName":"\u5b89\u5fbd\u7701","zipCode":"0","gbCode":"34"},{"regionName":"\u798f\u5efa\u7701","zipCode":"0","gbCode":"35"},{"regionName":"\u6c5f\u897f\u7701","zipCode":"0","gbCode":"36"},{"regionName":"\u5c71\u4e1c\u7701","zipCode":"0","gbCode":"37"},{"regionName":"\u6cb3\u5357\u7701","zipCode":"0","gbCode":"41"},{"regionName":"\u6e56\u5317\u7701","zipCode":"0","gbCode":"42"},{"regionName":"\u6e56\u5357\u7701","zipCode":"0","gbCode":"43"},{"regionName":"\u5e7f\u4e1c\u7701","zipCode":"0","gbCode":"44"},{"regionName":"\u5e7f\u897f\u58ee\u65cf\u81ea\u6cbb\u533a","zipCode":"0","gbCode":"45"},{"regionName":"\u6d77\u5357\u7701","zipCode":"0","gbCode":"46"},{"regionName":"\u91cd\u5e86\u5e02","zipCode":"0","gbCode":"50"},{"regionName":"\u56db\u5ddd\u7701","zipCode":"0","gbCode":"51"},{"regionName":"\u8d35\u5dde\u7701","zipCode":"0","gbCode":"52"},{"regionName":"\u4e91\u5357\u7701","zipCode":"0","gbCode":"53"},{"regionName":"\u897f\u85cf\u81ea\u6cbb\u533a","zipCode":"0","gbCode":"54"},{"regionName":"\u9655\u897f\u7701","zipCode":"0","gbCode":"61"},{"regionName":"\u7518\u8083\u7701","zipCode":"0","gbCode":"62"},{"regionName":"\u9752\u6d77\u7701","zipCode":"0","gbCode":"63"},{"regionName":"\u5b81\u590f\u56de\u65cf\u81ea\u6cbb\u533a","zipCode":"0","gbCode":"64"},{"regionName":"\u65b0\u7586\u7ef4\u543e\u5c14\u81ea\u6cbb\u533a","zipCode":"0","gbCode":"65"},{"regionName":"\u53f0\u6e7e\u7701","zipCode":"0","gbCode":"71"},{"regionName":"\u9999\u6e2f\u7279\u522b\u884c\u653f\u533a","zipCode":"999077","gbCode":"81"},{"regionName":"\u6fb3\u95e8\u7279\u522b\u884c\u653f\u533a","zipCode":"999078","gbCode":"82"}])
     * 
     * @author wechan
     * @since  2018年10月09日
     */
    public function getRegionSelectListAsync()
    {
        return EellyClient::request('system/region', 'getRegionSelectList', false);
    }

    /**
     * 根据parentID获得下属地区
     *
     * 
     * @returnExample()
     * 
     * @author wechan
     * @since  2018年10月09日
     */
    public function getRegionByParentId(int $regionId): array
    {
        return EellyClient::request('system/region', 'getRegionByParentId', true, $regionId);
    }

    /**
     * 根据parentID获得下属地区
     *
     * 
     * @returnExample()
     * 
     * @author wechan
     * @since  2018年10月09日
     */
    public function getRegionByParentIdAsync(int $regionId)
    {
        return EellyClient::request('system/region', 'getRegionByParentId', false, $regionId);
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