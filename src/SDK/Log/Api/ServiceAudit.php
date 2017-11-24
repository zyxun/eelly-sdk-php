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

namespace Eelly\SDK\Log\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Log\Service\ServiceAuditInterface;
use Eelly\SDK\Log\DTO\ServiceAuditDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class ServiceAudit implements ServiceAuditInterface
{
    /**
     * 获取一条服务审核日志.
     *
     * @param int $lsaId 服务审核ID，自增主键
     *
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     *
     * @return ServiceAuditDTO
     * @requestExample({"lsaId":1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月14日
     * @Validation(
     *   @OperatorValidator(0,{message : "服务审核ID，自增主键",operator:["gt",0]})
     *  )
     */
    public function getServiceAudit(int $ServiceAuditId): ServiceAuditDTO
    {
        return EellyClient::request('log/serviceAudit', __FUNCTION__, true, $ServiceAuditId);
    }

    /**
     * 获取一条服务审核日志.
     *
     * @param int $lsaId 服务审核ID，自增主键
     *
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     *
     * @return ServiceAuditDTO
     * @requestExample({"lsaId":1})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月14日
     * @Validation(
     *   @OperatorValidator(0,{message : "服务审核ID，自增主键",operator:["gt",0]})
     *  )
     */
    public function getServiceAuditAsync(int $ServiceAuditId)
    {
        return EellyClient::request('log/serviceAudit', __FUNCTION__, false, $ServiceAuditId);
    }

    /**
     * 添加一条服务审核日志.
     *
     * @param array $data
     *
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     *
     * @return bool
     * @requestExample({'data':{'service_id':1}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月14日
     */
    public function addServiceAudit(array $data): bool
    {
        return EellyClient::request('log/serviceAudit', __FUNCTION__, true, $data);
    }

    /**
     * 添加一条服务审核日志.
     *
     * @param array $data
     *
     * @throws \Eelly\SDK\Log\Exception\GoodsHandleException
     *
     * @return bool
     * @requestExample({'data':{'service_id':1}})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年09月14日
     */
    public function addServiceAuditAsync(array $data)
    {
        return EellyClient::request('log/serviceAudit', __FUNCTION__, false, $data);
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