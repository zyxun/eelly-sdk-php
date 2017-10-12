<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Contact\Service;


/**
 * 联系人等级.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 * @since 2017年10月12日
 */
interface GradeInterface
{
    /**
     * 获取等级名称.
     *
     * @param array $cgIds 联系人等级ID，自增主键
     * @return array
     * @requestExample({"cgIds":{1,2,3}})
     * @returnExample({"cgId": 1,"name": "eelly"})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年10月12日
     */
    public function getGradeNameByIds(array $cgIds):array;

    /**
     * 获取等级信息.
     *
     * @param int $storeId 店铺ID
     * @return array
     * @requestExample({'storeId':1})
     * @returnExample({"cgId": 1,"name": "eelly","storeId": 1,"tradeMoney": 0,"isDefault": 1,"discount": 0.2,"degree": 2,"isView": 1,"isViewNew": 1})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年10月12日
     */
    public function getGrade(int $storeId):array;
}