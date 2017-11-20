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
use Eelly\SDK\Log\DTO\PayAccountDTO;


/**
 * 支付帐户操作日志.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 * @since 2017年11月15日
 */
interface PayAccountInterface
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
    public function getPayAccount(int $lpaId): PayAccountDTO;

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
    public function addPayAccount(array $data): bool;



    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listPayAccountPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}