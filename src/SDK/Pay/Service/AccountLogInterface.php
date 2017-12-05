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

namespace Eelly\SDK\Pay\Service;

use Eelly\SDK\Pay\DTO\AccountLogDTO;

/**
 * 会员账户资金变更日志.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 * @since 2017年11月14日
 */
interface AccountLogInterface
{
    /**
     * 获取一条会员账户资金变更日志.
     * 
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ------------|-------|--------------
     * palId       |int    |会员账户资金变更ID，自增主键
     * paId        |int    |会员帐户ID
     * prId        |int    |交易ID
     * billNo      |string |交易号(冗余)
     * moneyBefore |int    |变动前余额：单位为分
     * moneyChange |int    |变动金额：单位为分
     * moneyAfter  |int    |变动后余额：单位为分
     * remark      |string |备注
     * createdTime |string |添加时间
     * updateTime  |string |修改时间
     *
     * @param int $palId 会员账户资金变更ID，自增主键
     * 
     * @return AccountLogDTO
     * @requestExample({
     *     "palId":1
     * })
     * @returnExample({
     *     palId:1,
     *     paId:1,
     *     prId:1,
     *     billNo:"137328828293232343",
     *     moneyBefore:0,
     *     moneyChange:190,
     *     moneyAfter:190,
     *     remark:"",
     *     createdTime:"1510156801",
     *     updateTime:"2017-11-10 10:49:50"
     * })
     * 
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年11月14日
     * 
     * @Validation(
     *     @OperatorValidator(0,{message:"用户ID",operator:["gt",0]})
     * )
     */
    public function getAccountLog(int $palId): AccountLogDTO;

    /**
     * 添加会员账户资金变更日志.
     *
     * @param array  $data 日志数据
     * @param int    $data[paId]        会员帐户ID
     * @param int    $data[prId]        交易ID
     * @param int    $data[billNo]      交易号
     * @param int    $data[moneyBefore] 变动前余额
     * @param int    $data[moneyChange] 变动金额
     * @param int    $data[moneyAfter]  变动后余额
     * @param string $data[remark]      日志数据，非必要的
     * 
     * @return bool
     * @requestExample({
     *     "paId":1,
     *     "prId":2,
     *     "billNo":"137328828293232343",
     *     "moneyBefore":100,
     *     "moneyChange":-200,
     *     "moneyAfter":300,
     *     "remark": "加钱"
     * })
     * @returnExample(true)
     * 
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年11月14日
     * 
     * @Async
     */
    public function addAccountLog(array $data): bool;


    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function listAccountLogPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
