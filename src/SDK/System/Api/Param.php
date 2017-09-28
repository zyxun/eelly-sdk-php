<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\ParamInterface;
use Eelly\SDK\System\DTO\ParamDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Param implements ParamInterface
{

    /**
     * 根据传过来的主键id，返回对应的参数信息.
     *
     * @param int $paramId 参数主键id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     * @requestExample({"paramId":1})
     * @returnExample({"paramId":1,"code":"test", "paramName":"测试编码","paramDesc":"这个编码是测试数据","status":1,"createdTime":1503560249})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-25
     */
    public function getParamByParamId(int $paramId): ParamDTO
    {
        return EellyClient::request('system/param', 'getParamByParamId', $paramId);
    }

    /**
     * 根据传过来的字典编码，返回对应的参数信息.
     *
     * @param string $code  参数编码
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array
     * @requestExample({"code":"test"})
     * @returnExample({"paramId":1,"code":"test", "paramName":"测试编码","paramDesc":"这个编码是测试数据","status":1,"createdTime":1503560249})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-25
     */
    public function getParamByCode(string $code): ParamDTO
    {
        return EellyClient::request('system/param', 'getParamByCode', $code);
    }

    /**
     * 新增系统字典参数名记录.
     *
     * @param array  $data                字典参数数据
     * @param string $data['code']        参数编码
     * @param string $data['paramName']   参数名称
     * @param string $data['paramDesc']   参数描述
     * @param int    $data['status']      参数状态：(0 无效 1 有效)
     * @param int    $data['createdTime'] 创建时间
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"data":{"code":"test", "paramName":"测试编码","paramDesc":"这个编码是测试数据","status":1,"createdTime":1503560249}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-25
     */
    public function addParam(array $data): bool
    {
        return EellyClient::request('system/param', 'addParam', $data);
    }

    /**
     * 更新系统字典参数名记录.
     *
     * @param int    $paramId           字典参数主键id
     * @param array  $data              字典参数数据
     * @param string $data['code']      参数编码
     * @param string $data['paramName'] 参数名称
     * @param string $data['paramDesc'] 参数描述
     * @param int    $data['status']    参数状态：(0 无效 1 有效)
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"paramId":10,"data":{"code":"test", "paramName":"测试编码","paramDesc":"这个编码是测试数据","status":1}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-25
     */
    public function updateParam(int $paramId, array $data): bool
    {
        return EellyClient::request('system/param', 'updateParam', $paramId, $data);
    }

    /**
     * 分页获取参数值列表.
     *
     * @param array $condition   查询条件
     * @param int   $currentPage 页码
     * @param int   $limit       分页条数
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * -----------------------|-------|--------------
     * items                  |array  |
     * items["paramId"]       |int    | 参数编码主键id
     * items["code"]          |string | 参数编码
     * items["paramName"]     |string | 参数名称
     * items["paramDesc"]     |string | 参数描述
     * items["status"]        |int    | 参数状态：(0 无效 1 有效)
     * items["createdTime"]   |int    | 创建时间
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
     * @requestExample(["condition": [],"currentPage": "1","limit": "20"])
     * @returnExample(["items": [{"paramId":1, "code":"test", "paramName":"测试编码", "paramDesc":"这个编码是测试数据", "status":1, "createdTime":1503560249}],
     *     "page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-25
     */
    public function listParamPage(array $condition = [], int $currentPage = 1, int $limit = 20): array
    {
        return EellyClient::request('system/param', 'listParamPage', $condition, $currentPage, $limit);
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