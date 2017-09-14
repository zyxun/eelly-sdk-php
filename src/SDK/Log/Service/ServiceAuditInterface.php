<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Log\Service;

use Eelly\SDK\Log\DTO\ServiceAuditDTO;


/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ServiceAuditInterface
{

    /**
     * 获取一条服务审核日志.
     *
     * @param int $lsaId 服务审核ID，自增主键
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     * @return ServiceAuditDTO
     * @requestExample({"lsaId":1})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月14日
     * @Validation(
     *   @OperatorValidator(0,{message : "服务审核ID，自增主键",operator:["gt",0]})
     *  )
     */
    public function getServiceAudit(int $ServiceAuditId): ServiceAuditDTO;

    /**
     * 添加一条服务审核日志.
     *
     * @param array $data
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     * @return bool
     * @requestExample({'data':{'service_id':1}})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月14日
     */
    public function addServiceAudit(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function updateServiceAudit(int $ServiceAuditId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function deleteServiceAudit(int $ServiceAuditId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function listServiceAuditPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}