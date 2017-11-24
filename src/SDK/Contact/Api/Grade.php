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
use Eelly\SDK\Contact\Service\GradeInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Grade implements GradeInterface
{
    /**
     * 获取等级名称.
     *
     * @param array $cgIds 联系人等级ID，自增主键
     *
     * @return array
     * @requestExample({"cgIds":{1,2,3}})
     * @returnExample({"cgId": 1,"name": "eelly"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function getGradeNameByIds(array $cgIds): array
    {
        return EellyClient::request('contact/grade', __FUNCTION__, true, $cgIds);
    }

    /**
     * 获取等级名称.
     *
     * @param array $cgIds 联系人等级ID，自增主键
     *
     * @return array
     * @requestExample({"cgIds":{1,2,3}})
     * @returnExample({"cgId": 1,"name": "eelly"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function getGradeNameByIdsAsync(array $cgIds)
    {
        return EellyClient::request('contact/grade', __FUNCTION__, false, $cgIds);
    }

    /**
     * 获取等级信息.
     *
     * @param int $storeId 店铺ID
     *
     * @return array
     * @requestExample({'storeId':1})
     * @returnExample({"cgId": 1,"name": "eelly","storeId": 1,"tradeMoney": 0,"isDefault": 1,"discount": 0.2,"degree": 2,"isView": 1,"isViewNew": 1})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function getGrade(int $storeId): array
    {
        return EellyClient::request('contact/grade', __FUNCTION__, true, $storeId);
    }

    /**
     * 获取等级信息.
     *
     * @param int $storeId 店铺ID
     *
     * @return array
     * @requestExample({'storeId':1})
     * @returnExample({"cgId": 1,"name": "eelly","storeId": 1,"tradeMoney": 0,"isDefault": 1,"discount": 0.2,"degree": 2,"isView": 1,"isViewNew": 1})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function getGradeAsync(int $storeId)
    {
        return EellyClient::request('contact/grade', __FUNCTION__, false, $storeId);
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