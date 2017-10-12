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

use Eelly\SDK\Contact\DTO\RelationDTO;


/**
 * 联系人关系.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 * @since 2017年10月12日
 */
interface RelationInterface
{

    /**
     * 获取资料设置信息.
     *
     * @param array $contactIds 客户主键id
     *
     * @return array
     * @requestExample({'contactIds':{1,2,3}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月10日
     *  @Validation(
     *   @OperatorValidator(0,{message : "客户主键id",operator:["gt",0]})
     *  )
     */
    public function getRelationSetting(array $contactIds): array;
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function getRelation(int $relationId): RelationDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function addRelation(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function updateRelation(int $relationId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function deleteRelation(int $relationId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function listRelationPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}