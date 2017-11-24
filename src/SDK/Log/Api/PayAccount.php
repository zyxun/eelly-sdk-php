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
use Eelly\SDK\Log\Service\PayAccountInterface;
use Eelly\SDK\Log\DTO\PayAccountDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class PayAccount implements PayAccountInterface
{
    /**
     * 获取一条支付帐户操作日志.
     *
     * @param int $lpaId 支付帐户操作日志ID，自增主键
     * @return PayAccountDTO
     * @requestExample({"lpaId":1})
     * @returnExample({lpaId:"1",paId:"1",fromStatus:"1",toStatus:"0",adminId:"148086",adminName:"molimoq",remark:"",createdTime:"0",updateTime:"2017-11-15 15:13:21"})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年11月15日
     * @Validation(
     * @OperatorValidator(0,{message:"操作日志ID",operator:["gt",0]})
     * )
     */
    public function getPayAccount(int $lpaId): PayAccountDTO
    {
        return EellyClient::request('log/payAccount', __FUNCTION__, true, $lpaId);
    }

    /**
     * 获取一条支付帐户操作日志.
     *
     * @param int $lpaId 支付帐户操作日志ID，自增主键
     * @return PayAccountDTO
     * @requestExample({"lpaId":1})
     * @returnExample({lpaId:"1",paId:"1",fromStatus:"1",toStatus:"0",adminId:"148086",adminName:"molimoq",remark:"",createdTime:"0",updateTime:"2017-11-15 15:13:21"})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年11月15日
     * @Validation(
     * @OperatorValidator(0,{message:"操作日志ID",operator:["gt",0]})
     * )
     */
    public function getPayAccountAsync(int $lpaId)
    {
        return EellyClient::request('log/payAccount', __FUNCTION__, false, $lpaId);
    }

    /**
     * 支付帐户操作，进行解冻或者冻结.
     *
     * @param array $data
     * @return bool
     * @requestExample({"paId":1,"toStatus":1})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年11月15日
     */
    public function addPayAccount(array $data): bool
    {
        return EellyClient::request('log/payAccount', __FUNCTION__, true, $data);
    }

    /**
     * 支付帐户操作，进行解冻或者冻结.
     *
     * @param array $data
     * @return bool
     * @requestExample({"paId":1,"toStatus":1})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年11月15日
     */
    public function addPayAccountAsync(array $data)
    {
        return EellyClient::request('log/payAccount', __FUNCTION__, false, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listPayAccountPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('log/payAccount', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listPayAccountPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('log/payAccount', __FUNCTION__, false, $condition, $currentPage, $limit);
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