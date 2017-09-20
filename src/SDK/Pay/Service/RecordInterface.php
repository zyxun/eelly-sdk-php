<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Service;

use Eelly\SDK\Pay\DTO\RecordDTO;


/**
 * 帐户资金变动记录逻辑类.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 * @since 2017年09月20日
 */
interface RecordInterface
{

    /**
     * 获取一条资金变动日志数据.
     *
     * @param int $prId 资金变动日志ID
     * @throws \Eelly\SDK\Pay\Exception\RecordException
     * @return RecordDTO
     * @requestExample({"prId":1})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月20日
     * @Validation(
     * @OperatorValidator(0,{message : "资金变动日志ID",operator:["gt",0]})
     * )
     */
    public function getRecord(int $prId): RecordDTO;

    /**
     * 添加一条帐户资金变动记录.
     *
     * @param array $data 帐户资金变动记录数据
     * @param int $data ['prId'] 资金变动日志ID
     * @param int $data ['paId'] 交易申请ID
     * @param int $data ['fromUserId'] 资金来源用户ID
     * @param int $data ['fromStoreId'] 资金来源店铺ID
     * @param int $data ['toUserId'] 资金目标用户ID
     * @param int $data ['toStoreId'] 资金目标店铺ID
     * @param int $data ['type'] 操作类型：1 充值到系统 2 系统到帐户 3 帐户消费 4 消费结算 5 消费退款 6 购买服务 7 服务退款 8 提现到系统(冻结) 9 系统打款
     * @param int $data ['moneyBefore'] 变动前余额
     * @param int $data ['money'] 变动金额
     * @param int $data ['moneyAfter'] 变动后余额
     * @param string $data ['remark'] 备注：JSON格式
     * @throws \Eelly\SDK\Pay\Exception\RecordException
     * @return bool
     * @requestExample({"data":{'prId':1,'paId':1,'fromUserId':1,'toUserId':1,'toStoreId':22,'type':1,'moneyBefore':11,'remark':'内容'}})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月20日
     */
    public function addRecord(array $data): bool;



    /**
     * 分页获取操作信息.
     *
     * @param array $condition 传过来的查询数组条件
     * @param int $condition ['type'] 操作类型：1 充值到系统 2 系统到帐户 3 帐户消费 4 消费结算 5 消费退款 6 购买服务 7 服务退款 8 提现到系统(冻结) 9 系统打款
     * @param int $condition ['prId'] 资金变动日志ID
     * @param int $condition ['paId'] 交易申请ID
     * @param int $condition ['fromUserId'] 资金来源用户ID
     * @param int $condition ['startTime'] 开始时间
     * @param int $condition ['endTime'] 结束时间
     * @param int $currentPage 第几页
     * @param int $limit 每页条数
     * @throws \Eelly\SDK\Pay\Exception\RecordException
     * @return array
     * @requestExample({'condition':{'type':1,'prId':1,'paId':1,'fromUserId':11,'startTime':0,'endTime':0},'currentPage':1,'limit':1})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月20日
     */
    //public function listRecordPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}