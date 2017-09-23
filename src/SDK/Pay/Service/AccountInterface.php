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

use Eelly\DTO\UidDTO;
use Eelly\SDK\Pay\DTO\AccountDTO;

/**
 * 用户账号.
 * 
 * @author 肖俊明<xiaojunming@eelly.net>
 * @since 2017年09月15日
 */
interface AccountInterface
{
    /**
     * 获取一条价格记录.
     *
     * @param int $userId 账户ID，自增主键
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     * @return AccountDTO
     * @requestExample({'userId':1})
     * @returnExample({"paId": 1, "userId": 1, "storeId": 2, "money": "2", "commissionRatio": 3,"status":1,"alipayAccount":'',"wechatPurseOpenId":'' ,"createdTime": "2017-09-04 16:07:05"})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月15日
     * @Validation(
     *      @OperatorValidator(0,{message : "账户ID",operator:["gt",0]})
     * )
     */
    public function getAccount(int $userId): AccountDTO;

    /**
     * 添加会员资金账户.
     *
     * @param array $data  会员资金账户数据
     * @param int $data['userId']  用户ID
     * @param int $data['storeId']  店铺I
     * @param int $data['money']  账户金额
     * @param float $data['commissionRatio']  提现手续费率
     * @param int $data['status']  状态：0 正常 1 风险监控 2 冻结提现 4 冻结支付
     * @param string $data['alipayAccount']  支付宝账号
     * @param string $data['wechatPurseOpenId']  微信钱包绑定的微信账户open_id
     * @param string $data['passwordKey']  密码钥匙
     * @param string $data['passwordPay']  支付密码
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     * @return bool
     * @requestExample({'data':{"userId": 1, "storeId": 2, "money": "2", "commissionRatio": 3,"status":1,"alipayAccount":'',"wechatPurseOpenId":''}})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月21日
     */
    public function addAccount(array $data): bool;

    /**
     * 更新自己的会员资金账户信息.
     *
     * @param int $paId 账户ID
     * @param array $data 需要更新的账号信息
     * @param int $data['money']  账户金额
     * @param float $data['commissionRatio']  提现手续费率
     * @param int $data['status']  状态：0 正常 1 风险监控 2 冻结提现 4 冻结支付
     * @param string $data['alipayAccount']  支付宝账号
     * @param string $data['wechatPurseOpenId']  微信钱包绑定的微信账户open_id
     * @param string $data['passwordKey']  密码钥匙
     * @param string $data['passwordPay']  支付密码
     * @param UidDTO|null $user 登录的用户信息
     * @throws \Eelly\SDK\Pay\Exception\AccountException
     * @return bool
     * @requestExample({'paId':1,'data':{"userId": 1, "storeId": 2, "money": "2", "commissionRatio": 3,"status":1,"alipayAccount":'',"wechatPurseOpenId":''}})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年09月21日
     */
    public function updateSelfAccount(int $paId, array $data, UidDTO $user = null): bool;

    /*
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    //public function listAccountPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;
}
