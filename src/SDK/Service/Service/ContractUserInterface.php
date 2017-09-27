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

namespace Eelly\SDK\Service\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\Service\DTO\ContractUserDTO;

/**
 * 用户合同签订记录.
 * 
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ContractUserInterface
{
    /**
     * 获取指定ID的用户合同签订记录.
     *
     * @param int    $scuId 用户合同签订记录ID
     * @param UidDTO $user  登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ContractUserException
     *
     * @return ContractUserDTO
     * @requestExample({"scuId":1})
     * @returnExample({"scuId":1,"storeId":1,"partyBName":"乙方名称","partyBAddress":"乙方地址","partyBPhone":"乙方联系电话",
     *     "name":"合同版本名称","timeLimit":"合同期限","money":10,"discount":0.5,"serviceIds":"服务集合","versionNo":"合同编号前缀",
     *     "number":"合同编号","startTime":1504935775,"endTime":1504935775,"payTime":1504935775,"status":1,"payType":1,"payStyle":1,
     *     "createdTime":1504935775})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-09
     */
    public function getContractUser(int $scuId, UidDTO $user = null): ContractUserDTO;

    /**
     * 新增用户合同签订记录.
     *
     * @param array  $data                  新增数据
     * @param int    $data['storeId']       店铺ID，开店时补回ID
     * @param string $data['partyBName']    乙方名称，默认取用户姓名、帐号
     * @param string $data['partyBAddress'] 乙方地址，默认取user_extend表用户地址
     * @param string $data['partyBPhone']   乙方联系电话，默认取用户绑定手机号
     * @param int    $data['scnId']         合同编号ID
     * @param int    $data['startTime']     合同开始时间
     * @param int    $data['endTime']       合同结束时间
     * @param UidDTO $user                  登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ContractUserException
     *
     * @return bool 新增结果
     * @requestExample({"data":{"partyBName":"乙方名称","partyBAddress":"乙方地址","partyBPhone":"乙方联系电话","scnId":1,"startTime":1504935775,"endTime":1504935775}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-09
     */
    public function addContractUser(array $data, UidDTO $user = null): bool;

    /**
     * 修改用户合同签订记录.
     *
     * @param int    $scuId                 用户合同签订记录ID
     * @param array  $data                  修改数据
     * @param int    $data['storeId']       店铺ID，开店时补回ID
     * @param string $data['partyBName']    乙方名称，默认取用户姓名、帐号
     * @param string $data['partyBAddress'] 乙方地址，默认取user_extend表用户地址
     * @param string $data['partyBPhone']   乙方联系电话，默认取用户绑定手机号
     * @param int    $data['scnId']         合同编号ID
     * @param int    $data['startTime']     合同开始时间
     * @param int    $data['endTime']       合同结束时间
     * @param UidDTO $user                  登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ContractUserException
     *
     * @return bool 修改结果
     * @requestExample({"scuId":1,"data":{"partyBName":"乙方名称","partyBAddress":"乙方地址","partyBPhone":"乙方联系电话","scnId":1,"startTime":1504935775,"endTime":1504935775}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-09
     */
    public function updateContractUser(int $scuId, array $data, UidDTO $user = null): bool;

    /**
     * 分页获取用户合同签订记录列表
     *
     * @param array  $condition                  查询条件
     * @param int    $condition['userId']        用户ID
     * @param int    $condition['storeId']       店铺ID，开店时补回ID
     * @param string $condition['partyBName']    乙方名称
     * @param string $condition['partyBAddress'] 乙方地址
     * @param string $condition['partyBPhone']   乙方联系电话
     * @param int    $condition['scnId']         合同编号ID
     * @param string $condition['name']          合同版本名称
     * @param int    $condition['timeLimit']     合同期限：表示N个月，大于0
     * @param string $condition['number']        合同编号
     * @param int    $condition['startTime']     合同开始时间
     * @param int    $condition['endTime']       合同结束时间
     * @param int    $condition['payTime']       合同付款时间
     * @param int    $condition['status']        合同状态：1 正常 2 暂停（合同时间继续） 4 终止（合同失效）
     * @param int    $condition['payType']       支付类型：1 储蓄卡 2 信用卡 3支付宝余额 4 微信 5 银联 6 微信扫一扫 7 现金
     * @param int    $condition['payStyle']      支付方式：0 银行汇款 1 支付宝 2 财付通 3 网银 4 联付宝 5 手机支付 6 快捷支付 7 衣联通充值 8 流量宝充值 9 广告系统充值 10 银联 11 支付宝扫一扫 12 信誉卡支付 13 线下支付
     * @param int    $currentPage                当前页码
     * @param int    $limit                      每页条数
     * @param UidDTO $user                       登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\ContractUserException
     *
     * @return array
     * @requestExample({"condition":{"userId":1,"storeId":1,"partyBName":"乙方名称","partyBAddress":"乙方地址","partyBPhone":"乙方联系电话","scnId":1,"name":"合同版本名称","timeLimit":1,"number":"合同编号","startTime":1505112994,"endTime":1505112994,"payTime":1505112994,"status":1,"payType":1,"payStyle":1}})
     * @returnExample({"items":[{"scuId":"8","userId":"148086","storeId":"0","partyBName":"1111","partyBAddress":"2222","partyBPhone":"3333","scnId":"2","name":"\u516c\u53f8\u540d123","timeLimit":"1","money":"100","discount":"0.00","serviceIds":"1,2,3","versionNo":"1312dsfsf","number":"201709091342344","startTime":"1505109975","endTime":"1505109976","payTime":"0","status":"1","prId":"0","payType":"0","payStyle":"0","salespersonId":"0","createdTime":"1505209773"}],"page":{"totalPages":1,"totalItems":1,"limit":10}})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-09
     * @Validation(
     *   @OperatorValidator(1,{message:"非法的页码",operator:["gt",0]}),
     *   @OperatorValidator(2,{message:"非法的条数",operator:["gt",0]})
     * )
     */
    public function listContractUserPage(array $condition = [], int $currentPage = 1, int $limit = 10, UidDTO $user = null): array;
}
