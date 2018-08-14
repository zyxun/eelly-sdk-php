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

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\DTO\DistrictDTO;
use Eelly\SDK\System\Service\DistrictInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class District implements DistrictInterface
{
    /**
     * 根据传过来的商圈id，返回对应的信息.
     *
     * @param int $districtId 商圈id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return DistrictDTO
     * @requestExample({"districtId":1})
     * @returnExample({"districtId":1,"gbCode":440103, "districtName":"十三行商圈","logo":"G03/M00/00/36/p4YBAFjHhZGIXnxpAAH182nOB-kAABddwBaXXQAAfYL542.jpg",
     *     "remark":"潮流时尚","adminId":155231,"adminName":"test","sort":10,"createdTime":1489631647})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function getDistrict(int $districtId): DistrictDTO
    {
        return EellyClient::request('system/district', __FUNCTION__, true, $districtId);
    }

    /**
     * 根据传过来的商圈id，返回对应的信息.
     *
     * @param int $districtId 商圈id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return DistrictDTO
     * @requestExample({"districtId":1})
     * @returnExample({"districtId":1,"gbCode":440103, "districtName":"十三行商圈","logo":"G03/M00/00/36/p4YBAFjHhZGIXnxpAAH182nOB-kAABddwBaXXQAAfYL542.jpg",
     *     "remark":"潮流时尚","adminId":155231,"adminName":"test","sort":10,"createdTime":1489631647})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function getDistrictAsync(int $districtId)
    {
        return EellyClient::request('system/district', __FUNCTION__, false, $districtId);
    }

    /**
     * 添加一条商圈记录.
     *
     * @param array  $data
     * @param int    $data["gbCode"]       区域id
     * @param string $data["districtName"] 商圈名称
     * @param string $data["logo"]         商圈logo
     * @param string $data["remark"]       商圈描述
     * @param int    $data["adminId"]      管理员ID
     * @param string $data["adminName"]    管理员名称
     * @param int    $data["sort"]         显示排序
     * @param int    $data["createdTime"]  创建时间
     * @param UidDTO $user                 用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"data":{"gbCode":440103, "districtName":"十三行商圈","logo":"G03/M00/00/36/p4YBAFjHhZGIXnxpAAH182nOB-kAABddwBaXXQAAfYL542.jpg",
     *     "remark":"潮流时尚","adminId":155231,"adminName":"test","sort":10,"createdTime":1489631647}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function addDistrict(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/district', __FUNCTION__, true, $data, $user);
    }

    /**
     * 添加一条商圈记录.
     *
     * @param array  $data
     * @param int    $data["gbCode"]       区域id
     * @param string $data["districtName"] 商圈名称
     * @param string $data["logo"]         商圈logo
     * @param string $data["remark"]       商圈描述
     * @param int    $data["adminId"]      管理员ID
     * @param string $data["adminName"]    管理员名称
     * @param int    $data["sort"]         显示排序
     * @param int    $data["createdTime"]  创建时间
     * @param UidDTO $user                 用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"data":{"gbCode":440103, "districtName":"十三行商圈","logo":"G03/M00/00/36/p4YBAFjHhZGIXnxpAAH182nOB-kAABddwBaXXQAAfYL542.jpg",
     *     "remark":"潮流时尚","adminId":155231,"adminName":"test","sort":10,"createdTime":1489631647}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function addDistrictAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('system/district', __FUNCTION__, false, $data, $user);
    }

    /**
     * 更新商圈信息.
     *
     * @param int    $districtId           商圈id
     * @param array  $data                 要更新的数据
     * @param int    $data["gbCode"]       区域id
     * @param string $data["districtName"] 商圈名称
     * @param string $data["logo"]         商圈logo
     * @param string $data["remark"]       商圈描述
     * @param int    $data["adminId"]      管理员ID
     * @param string $data["adminName"]    管理员名称
     * @param int    $data["sort"]         显示排序
     * @param UidDTO $user                 用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"districtId":1,"data":{"gbCode":440103, "districtName":"十三行商圈",
     *     "logo":"G03/M00/00/36/p4YBAFjHhZGIXnxpAAH182nOB-kAABddwBaXXQAAfYL542.jpg","remark":"潮流时尚","adminId":155231,"adminName":"test","sort":10}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function updateDistrict(int $districtId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/district', __FUNCTION__, true, $districtId, $data, $user);
    }

    /**
     * 更新商圈信息.
     *
     * @param int    $districtId           商圈id
     * @param array  $data                 要更新的数据
     * @param int    $data["gbCode"]       区域id
     * @param string $data["districtName"] 商圈名称
     * @param string $data["logo"]         商圈logo
     * @param string $data["remark"]       商圈描述
     * @param int    $data["adminId"]      管理员ID
     * @param string $data["adminName"]    管理员名称
     * @param int    $data["sort"]         显示排序
     * @param UidDTO $user                 用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"districtId":1,"data":{"gbCode":440103, "districtName":"十三行商圈",
     *     "logo":"G03/M00/00/36/p4YBAFjHhZGIXnxpAAH182nOB-kAABddwBaXXQAAfYL542.jpg","remark":"潮流时尚","adminId":155231,"adminName":"test","sort":10}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function updateDistrictAsync(int $districtId, array $data, UidDTO $user = null)
    {
        return EellyClient::request('system/district', __FUNCTION__, false, $districtId, $data, $user);
    }

    /**
     * 分页获取商圈数据列表.
     *
     * @param array $condition           查询条件
     * @param int   $condition['gbCode'] 区域编码
     * @param int   $currentPage         页码
     * @param int   $limit               分页条数
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --------------------|-------|--------------
     * items               |array  |
     * items[districtId]   |int    | 商圈id
     * items[gbCode]       |int    | 区域编码
     * items[districtName] |string | 商圈名称
     * items[logo]         |string | 商圈logo
     * items[remark]       |string | 商圈描述
     * items[adminId]      |int    | 管理员ID
     * items[adminName]    |string | 管理员名称
     * items[sort]         |int    | 显示排序
     * items[createdTime]  |int    | 创建时间
     * page                |array  |
     * page[first]         |int    | 第一页
     * page[before]        |int    | 上一页
     * page[current]       |int    | 当前页
     * page[last]          |int    | 最后一页
     * page[next]          |int    | 下一页
     * page[total_pages]   |int    | 总页数
     * page[total_items]   |int    | 总数
     * page[limit]         |int    | 每页显示的数量
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     * @requestExample({"condition":{"gbCode":440103},"currentPage":1,"limit":10})
     * @returnExample(["items": [{"districtId":1,"gbCode":440103, "districtName":"十三行商圈",
     *     "logo":"G03/M00/00/36/p4YBAFjHhZGIXnxpAAH182nOB-kAABddwBaXXQAAfYL542.jpg","remark":"潮流时尚",
     *     "adminId":155231,"adminName":"test","sort":10,"createdTime":1489631647}],
     *     "page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function listDistrictPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/district', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     * 分页获取商圈数据列表.
     *
     * @param array $condition           查询条件
     * @param int   $condition['gbCode'] 区域编码
     * @param int   $currentPage         页码
     * @param int   $limit               分页条数
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --------------------|-------|--------------
     * items               |array  |
     * items[districtId]   |int    | 商圈id
     * items[gbCode]       |int    | 区域编码
     * items[districtName] |string | 商圈名称
     * items[logo]         |string | 商圈logo
     * items[remark]       |string | 商圈描述
     * items[adminId]      |int    | 管理员ID
     * items[adminName]    |string | 管理员名称
     * items[sort]         |int    | 显示排序
     * items[createdTime]  |int    | 创建时间
     * page                |array  |
     * page[first]         |int    | 第一页
     * page[before]        |int    | 上一页
     * page[current]       |int    | 当前页
     * page[last]          |int    | 最后一页
     * page[next]          |int    | 下一页
     * page[total_pages]   |int    | 总页数
     * page[total_items]   |int    | 总数
     * page[limit]         |int    | 每页显示的数量
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     * @requestExample({"condition":{"gbCode":440103},"currentPage":1,"limit":10})
     * @returnExample(["items": [{"districtId":1,"gbCode":440103, "districtName":"十三行商圈",
     *     "logo":"G03/M00/00/36/p4YBAFjHhZGIXnxpAAH182nOB-kAABddwBaXXQAAfYL542.jpg","remark":"潮流时尚",
     *     "adminId":155231,"adminName":"test","sort":10,"createdTime":1489631647}],
     *     "page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since 2017-09-26
     */
    public function listDistrictPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('system/district', __FUNCTION__, false, $condition, $currentPage, $limit);
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
