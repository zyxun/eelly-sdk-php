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

namespace Eelly\SDK\Contact\Service;

/**
 * 联系人等级.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 *
 * @since 2017年10月12日
 */
interface GradeInterface
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
    public function getGradeNameByIds(array $cgIds):array;

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
    public function getGrade(int $storeId):array;
}
