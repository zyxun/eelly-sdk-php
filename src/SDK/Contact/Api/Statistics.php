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

namespace Eelly\SDK\Contact\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Contact\Service\StatisticsInterface;
use Eelly\SDK\Contact\DTO\StatisticsDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Statistics implements StatisticsInterface
{
    /**
     * 获取联系人交易数.
     *
     * @param int $contactId 联系人表的ID
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return StatisticsDTO
     * @requestExample({'contactId':1})
     * @returnExample({'contactId':1,'type':1,'money':10,'quantity':1,'times':1,'lastPayTime':1508307884,'lastUpdateTime':1508307884,'createdTime':'2017-10-09 12:00:00'})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月18日
     * @Validation(
     * @OperatorValidator(0,{message : "联系人表的ID，自增主键",operator:["gt",0]})
     * )
     */
    public function getStatistics(int $contactId): StatisticsDTO
    {
        return EellyClient::request('contact/statistics', __FUNCTION__, true, $contactId);
    }

    /**
     * 获取联系人交易数.
     *
     * @param int $contactId 联系人表的ID
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return StatisticsDTO
     * @requestExample({'contactId':1})
     * @returnExample({'contactId':1,'type':1,'money':10,'quantity':1,'times':1,'lastPayTime':1508307884,'lastUpdateTime':1508307884,'createdTime':'2017-10-09 12:00:00'})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月18日
     * @Validation(
     * @OperatorValidator(0,{message : "联系人表的ID，自增主键",operator:["gt",0]})
     * )
     */
    public function getStatisticsAsync(int $contactId)
    {
        return EellyClient::request('contact/statistics', __FUNCTION__, false, $contactId);
    }

    /**
     * 添加联系人交易数据.
     *
     * @param array $data              联系人交易数据
     * @param int   $data['contactId'] 联系人交易数据
     * @param int   $data['type']      联系人交易数据
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return bool
     * @requestExample({'data':{'contactId':1,'type':1}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月18日
     */
    public function addStatistics(array $data): bool
    {
        return EellyClient::request('contact/statistics', __FUNCTION__, true, $data);
    }

    /**
     * 添加联系人交易数据.
     *
     * @param array $data              联系人交易数据
     * @param int   $data['contactId'] 联系人交易数据
     * @param int   $data['type']      联系人交易数据
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return bool
     * @requestExample({'data':{'contactId':1,'type':1}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月18日
     */
    public function addStatisticsAsync(array $data)
    {
        return EellyClient::request('contact/statistics', __FUNCTION__, false, $data);
    }

    /**
     * 更新联系人交易数据.
     *
     * @param int   $contactId           联系人表的ID
     * @param array $data                联系人交易数据
     * @param int   $data['money']       交易金额，单位为分
     * @param int   $data['quantity']    交易件数
     * @param int   $data['times']       交易次数
     * @param int   $data['lastPayTime'] 最近一次交易时间
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return bool
     * @requestExample({'contactId':1,'money':100,'quantity':10,'times':20,'lastPayTime':1508307884})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月18日
     */
    public function updateStatistics(int $contactId, array $data): bool
    {
        return EellyClient::request('contact/statistics', __FUNCTION__, true, $contactId, $data);
    }

    /**
     * 更新联系人交易数据.
     *
     * @param int   $contactId           联系人表的ID
     * @param array $data                联系人交易数据
     * @param int   $data['money']       交易金额，单位为分
     * @param int   $data['quantity']    交易件数
     * @param int   $data['times']       交易次数
     * @param int   $data['lastPayTime'] 最近一次交易时间
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return bool
     * @requestExample({'contactId':1,'money':100,'quantity':10,'times':20,'lastPayTime':1508307884})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月18日
     */
    public function updateStatisticsAsync(int $contactId, array $data)
    {
        return EellyClient::request('contact/statistics', __FUNCTION__, false, $contactId, $data);
    }

    /**
     * 分页获取操作信息.
     *
     * @param array $condition              被绑定的数组
     * @param int   $condition['contactId'] 联系人表的ID
     * @param int   $condition['type']      统计类型
     * @param int   $currentPage            页数
     * @param int   $limit                  每页条数
     *
     * @return array
     * @requestExample({'condition':{'contactId':1,'type':1},'currentPage':1,'limit':10})
     * @returnExample({'contactId':1,'money':100,'quantity':10,'times':20,'lastPayTime':1508307884,'createdTime':'2017-10-09 12:00:00'})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月27日
     */
    public function listStatisticsPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('contact/statistics', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     * 分页获取操作信息.
     *
     * @param array $condition              被绑定的数组
     * @param int   $condition['contactId'] 联系人表的ID
     * @param int   $condition['type']      统计类型
     * @param int   $currentPage            页数
     * @param int   $limit                  每页条数
     *
     * @return array
     * @requestExample({'condition':{'contactId':1,'type':1},'currentPage':1,'limit':10})
     * @returnExample({'contactId':1,'money':100,'quantity':10,'times':20,'lastPayTime':1508307884,'createdTime':'2017-10-09 12:00:00'})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月27日
     */
    public function listStatisticsPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('contact/statistics', __FUNCTION__, false, $condition, $currentPage, $limit);
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