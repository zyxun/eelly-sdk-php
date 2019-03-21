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

namespace Eelly\SDK\Tim\Service;

/**
 * 腾讯云账号
 *
 * @author sunanzhi <sunanzhi@hotmail.com>
 */
interface AccountInterface
{
    /**
     * 单个账号接入云信
     *
     * > data 请求数据说明
     * 
     * key | type | value
     * --- | ---- | -----
     * identifier | string | 云信账号
     * nick | string | 云信昵称（选填）
     * faceUrl | string | 云信头像 (选填)
     * type | int | 帐号类型，开发者默认无需填写，值 0 表示普通帐号，1 表示机器人帐号
     * 
     * @param array $data 接入的请求数据
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.25
     * 
     * @see https://cloud.tencent.com/document/product/269/1608
     */
    public function accountImport(array $data):bool;

    /**
     * 批量账号接入
     * 
     * > data 请求事例 ['account1', 'account2', 'account3'], account*是云信账号的 identifier
     * 
     * @param array $data 接入请求的数据 一维数组
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.25
     * 
     * @see https://cloud.tencent.com/document/product/269/4919
     */
    public function multiAccountImport(array $data):bool;

    /**
     * 踢出账号 账号登陆失效
     *
     * @param string $identifier 腾讯云账号
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.25
     * 
     * @see https://cloud.tencent.com/document/product/269/3853
     */
    public function kick(string $identifier):bool;

    /**
     * 获取用户登陆状态
     *
     * > data 请求事例 ['account1', 'account2', 'account3'], account*是云信账号的 identifier
     * 
     * @param array $data 接入请求的数据 一维数组
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.25
     * 
     * @see https://cloud.tencent.com/document/product/269/2566
     */
    public function queryState(array $data):array;

    /**
     * 获取用户资料 支持批量
     *
     * > accounts 请求事例 ['account1', 'account2', 'account3'], account*是云信账号的 identifier
     * 
     * > tagList 请求事例
     * 
     * key | value | desc
     * --- | ----- | ----
     * Tag_Profile_IM_Nick | string | 云信昵称
     * Tag_Profile_IM_AllowType | string | ...
     * ... | ... | ...
     * 
     * @param array $accounts 批量用户identifier
     * @param array $tagList 获取用户资料字段
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.25
     * 
     * @see https://cloud.tencent.com/document/product/269/1639
     */
    public function portraitGet(array $accounts, array $tagList = []):array;

    /**
     * 更新用户资料
     *
     * @param string $identifier 账号
     * @param array $profileItem 更新字段数据
     * @return boolean 
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.25
     * 
     * @see https://cloud.tencent.com/document/product/269/1640
     */
    public function portraitSet(string $identifier, array $profileItem):bool;

    /**
     * 通过用户id获取用户云信账号
     *
     * @param integer $userId 用户id
     * @param integer $type 1: 店 2: 厂
     * @param array $extend 拓展 
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.15
     */
    public function getAccount(int $userId, int $type, array $extend = []):array;
}