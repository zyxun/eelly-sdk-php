<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\SubjectTypeInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class SubjectType implements SubjectTypeInterface
{

    /**
     * 获取一条科目类型信息
     * 
     * @return array
     * 
     * @param string $subjectCode 科目代码
     * 
     * @requestExample({"subjectCode":"110"})
     * @returnExample({"subjectCode":"110","subjectName":"3232","createdTime":"1508466305","updateTime":"2017-10-20 10:25:19"})
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月11日
     * 
     */
    public function getOneSubjectType(string $subjectCode): array
    {
        return EellyClient::request('pay/subjecttype', 'getOneSubjectType',true, $subjectCode);
    }

    /**
     * 添加科目类型
     * 
     * @return bool
     * 
     * @param array $data 请求参数
     * @param string $data["subjectCode"] 科目代码
     * @param int $data["subjectName"] 科目名称
     * 
     * @requestExample({"data":{"subjectCode":"120","subjectName":"hahahah"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月11日
     */
    public function addSubjectType(array $data): bool
    {
        return EellyClient::request('pay/subjecttype', 'addSubjectType',true, $data);
    }

    /**
     * 更新科目类型
     * 
     * @return bool
     * 
     * @param string $subjectCode 科目代码
     * @param array $data 请求参数
     * @param string $data['subjectName'] 科目名称
     * 
     * @requestExample({"subjectCode":"120","data":{"subjectName":"hahahah"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月11日
     */
    public function updateSubjectType(string $subjectCode, array $data): bool
    {
        return EellyClient::request('pay/subjecttype', 'updateSubjectType', true, $subjectCode, $data);
    }

    /**
     * 删除一条科目明细记录
     * 
     * @return bool
     * 
     * @param string $subjectCode 科目代码
     * 
     * @requestExample({"subjectCode":"120"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月11日
     * 
     */
    public function deleteSubjectType(string $subjectCode): bool
    {
        return EellyClient::request('pay/subjecttype', 'deleteSubjectType',true, $subjectCode);
    }

    /**
     * 获取所有的科目类型
     * 
     * @return array
     * 
     * @param $data array 请求的参数
     * @param int $data['currentPage'] 当前页面
     * @param int $data['limit'] 每页数量
     * 
     * @requestExample({"data":{"currentPage":"1","limit":"100"}})
     * @returnExample([{"subjectCode":"110","subjectName":"库存现金","createdTime":"1508466305"}])
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月11日
     */
    public function getSubjectTypeList(array $data): array
    {
        return EellyClient::request('pay/subjecttype', 'getSubjectTypeList',true, $data);
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