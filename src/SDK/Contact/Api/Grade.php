<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Contact\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Contact\Service\GradeInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
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
        return EellyClient::request('contact/grade', 'getGradeNameByIds', true, $cgIds);
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
        return EellyClient::request('contact/grade', 'getGrade',true, $storeId);
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