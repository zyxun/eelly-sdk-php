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
use Eelly\SDK\Contact\Service\GradeChangeInterface;
use Eelly\SDK\Contact\DTO\GradeChangeDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class GradeChange implements GradeChangeInterface
{
    /**
     * 获取联系人等级.
     *
     * @param int $cgcId 联系人等级变更ID，自增主键
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return GradeChangeDTO
     * @requestExample({'cgcId':1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月17日
     * @Validation(
     * @OperatorValidator(0,{message : "联系人等级变更ID，自增主键",operator:["gt",0]})
     * )
     */
    public function getGradeChange(int $cgcId): GradeChangeDTO
    {
        return EellyClient::request('contact/gradeChange', __FUNCTION__, true, $cgcId);
    }

    /**
     * 获取联系人等级.
     *
     * @param int $cgcId 联系人等级变更ID，自增主键
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return GradeChangeDTO
     * @requestExample({'cgcId':1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月17日
     * @Validation(
     * @OperatorValidator(0,{message : "联系人等级变更ID，自增主键",operator:["gt",0]})
     * )
     */
    public function getGradeChangeAsync(int $cgcId)
    {
        return EellyClient::request('contact/gradeChange', __FUNCTION__, false, $cgcId);
    }

    /**
     * 新增联系人等级变更.
     *
     * @param array       $data              修改信息
     * @param int         $data['contactId'] 修改信息
     * @param int         $data['fromCgId']  修改信息
     * @param int         $data['toCgId']    修改信息
     * @param string      $data['remark']    备注信息
     * @param UidDTO|null $user              登录用户信息
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return bool
     * @requestExample({'contactId':1,'fromCgId':1,'toCgId':1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月17日
     */
    public function addGradeChange(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('contact/gradeChange', __FUNCTION__, true, $data, $user);
    }

    /**
     * 新增联系人等级变更.
     *
     * @param array       $data              修改信息
     * @param int         $data['contactId'] 修改信息
     * @param int         $data['fromCgId']  修改信息
     * @param int         $data['toCgId']    修改信息
     * @param string      $data['remark']    备注信息
     * @param UidDTO|null $user              登录用户信息
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return bool
     * @requestExample({'contactId':1,'fromCgId':1,'toCgId':1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月17日
     */
    public function addGradeChangeAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('contact/gradeChange', __FUNCTION__, false, $data, $user);
    }

    /**
     * 分页获取操作信息.
     *
     * @param array       $condition   被绑定的sql
     * @param int         $currentPage 页数
     * @param int         $limit       每页条数
     * @param UidDTO|null $user        登录用户信息
     *
     * @return array
     * @requestExample({'condition':{'startTime':1460507623,'endTime':1460507623}})
     * @returnExample({'contactId':1,'fromCgId':1,'toCgId':1})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月17日
     */
    public function listGradeChangePage(array $condition = [], int $currentPage = 1, int $limit = 10, UidDTO $user = null): array
    {
        return EellyClient::request('contact/gradeChange', __FUNCTION__, true, $condition, $currentPage, $limit, $user);
    }

    /**
     * 分页获取操作信息.
     *
     * @param array       $condition   被绑定的sql
     * @param int         $currentPage 页数
     * @param int         $limit       每页条数
     * @param UidDTO|null $user        登录用户信息
     *
     * @return array
     * @requestExample({'condition':{'startTime':1460507623,'endTime':1460507623}})
     * @returnExample({'contactId':1,'fromCgId':1,'toCgId':1})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月17日
     */
    public function listGradeChangePageAsync(array $condition = [], int $currentPage = 1, int $limit = 10, UidDTO $user = null)
    {
        return EellyClient::request('contact/gradeChange', __FUNCTION__, false, $condition, $currentPage, $limit, $user);
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