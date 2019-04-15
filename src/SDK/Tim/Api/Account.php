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

namespace Eelly\SDK\Tim\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Tim\Service\AccountInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Account implements AccountInterface
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
    public function accountImport(array $data): bool
    {
        return EellyClient::request('tim/account', 'accountImport', true, $data);
    }

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
    public function accountImportAsync(array $data)
    {
        return EellyClient::request('tim/account', 'accountImport', false, $data);
    }

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
    public function multiAccountImport(array $data): bool
    {
        return EellyClient::request('tim/account', 'multiAccountImport', true, $data);
    }

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
    public function multiAccountImportAsync(array $data)
    {
        return EellyClient::request('tim/account', 'multiAccountImport', false, $data);
    }

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
    public function kick(string $identifier): bool
    {
        return EellyClient::request('tim/account', 'kick', true, $identifier);
    }

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
    public function kickAsync(string $identifier)
    {
        return EellyClient::request('tim/account', 'kick', false, $identifier);
    }

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
    public function queryState(array $data): array
    {
        return EellyClient::request('tim/account', 'queryState', true, $data);
    }

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
    public function queryStateAsync(array $data)
    {
        return EellyClient::request('tim/account', 'queryState', false, $data);
    }

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
    public function portraitGet(array $accounts, array $tagList = []): array
    {
        return EellyClient::request('tim/account', 'portraitGet', true, $accounts, $tagList);
    }

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
    public function portraitGetAsync(array $accounts, array $tagList = [])
    {
        return EellyClient::request('tim/account', 'portraitGet', false, $accounts, $tagList);
    }

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
    public function portraitSet(string $identifier, array $profileItem): bool
    {
        return EellyClient::request('tim/account', 'portraitSet', true, $identifier, $profileItem);
    }

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
    public function portraitSetAsync(string $identifier, array $profileItem)
    {
        return EellyClient::request('tim/account', 'portraitSet', false, $identifier, $profileItem);
    }

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
    public function getAccount(int $userId, int $type, array $extend = []): array
    {
        return EellyClient::request('tim/account', 'getAccount', true, $userId, $type, $extend);
    }

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
    public function getAccountAsync(int $userId, int $type, array $extend = [])
    {
        return EellyClient::request('tim/account', 'getAccount', false, $userId, $type, $extend);
    }

    /**
     * 设置全局禁言
     *
     * @internal
     *
     * @param int   $userId
     * @param int   $type       1 店 2 厂
     * @param array $extend
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-04-11
     */
    public function setNoSpeaking(int $userId, int $type, array $extend = []): bool
    {
        return EellyClient::request('tim/account', 'setNoSpeaking', true, $userId, $type, $extend);
    }

    /**
     * 设置全局禁言
     *
     * @internal
     *
     * @param int   $userId
     * @param int   $type       1 店 2 厂
     * @param array $extend
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-04-11
     */
    public function setNoSpeakingAsync(int $userId, int $type, array $extend = [])
    {
        return EellyClient::request('tim/account', 'setNoSpeaking', false, $userId, $type, $extend);
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