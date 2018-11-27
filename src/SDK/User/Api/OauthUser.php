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

namespace Eelly\SDK\User\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\OauthUserInterface;
use Eelly\DTO\UserDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class OauthUser implements OauthUserInterface
{
    /**
     * 通过密码获取用户信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * uid      |int    |用户ID
     * username |string |用户名
     * mobile   |string |手机号
     *
     * 支持使用用户名加密码和用户名加手机获取
     *
     * @param string $username 用户名(支持使用用户名和手机号)
     * @param string $password 用户密码
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return UserDTO
     *
     * @requestExample({"username":"molimoq", "password":"123456"})
     *
     * @returnExample({"uid":148086,"username":"molimoq","mobile":"13800138000"})
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getUserByPassword(string $username, string $password): UserDTO
    {
        return EellyClient::request('user/oauthUser', 'getUserByPassword', true, $username, $password);
    }

    /**
     * 通过密码获取用户信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * uid      |int    |用户ID
     * username |string |用户名
     * mobile   |string |手机号
     *
     * 支持使用用户名加密码和用户名加手机获取
     *
     * @param string $username 用户名(支持使用用户名和手机号)
     * @param string $password 用户密码
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return UserDTO
     *
     * @requestExample({"username":"molimoq", "password":"123456"})
     *
     * @returnExample({"uid":148086,"username":"molimoq","mobile":"13800138000"})
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getUserByPasswordAsync(string $username, string $password)
    {
        return EellyClient::request('user/oauthUser', 'getUserByPassword', false, $username, $password);
    }

    /**
     * 通过uid获取用户信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * uid      |int    |用户ID
     * username |string |用户名
     * mobile   |string |手机号
     *
     * @param int $uid 用户id
     *
     * @return UserDTO
     * @requestExample({"uid":"148086"})
     * @returnExample({"uid":148086,"username":"molimoq","mobile":"13800138000"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @author hehui<hehui@eelly.net>
     *
     * @since 2017-11-06
     */
    public function getUserByUid(int $uid): UserDTO
    {
        return EellyClient::request('user/oauthUser', 'getUserByUid', true, $uid);
    }

    /**
     * 通过uid获取用户信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * uid      |int    |用户ID
     * username |string |用户名
     * mobile   |string |手机号
     *
     * @param int $uid 用户id
     *
     * @return UserDTO
     * @requestExample({"uid":"148086"})
     * @returnExample({"uid":148086,"username":"molimoq","mobile":"13800138000"})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @author hehui<hehui@eelly.net>
     *
     * @since 2017-11-06
     */
    public function getUserByUidAsync(int $uid)
    {
        return EellyClient::request('user/oauthUser', 'getUserByUid', false, $uid);
    }

    /**
     * 通过QQ token获取用户信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * uid      |int    |用户ID
     * username |string |用户名
     * mobile   |string |手机号
     *
     * @param string $accessToken QQ's access token
     *
     * @return UserDTO
     * @requestExample({"accessToken":"4E338C9700B3CAEE6017C15001BB7ACD"})
     * @returnExample({"uid":148086,"username":"molimoq","mobile":"13800138000"})
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getUserByQQAccessToken(string $accessToken): UserDTO
    {
        return EellyClient::request('user/oauthUser', 'getUserByQQAccessToken', true, $accessToken);
    }

    /**
     * 通过QQ token获取用户信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * uid      |int    |用户ID
     * username |string |用户名
     * mobile   |string |手机号
     *
     * @param string $accessToken QQ's access token
     *
     * @return UserDTO
     * @requestExample({"accessToken":"4E338C9700B3CAEE6017C15001BB7ACD"})
     * @returnExample({"uid":148086,"username":"molimoq","mobile":"13800138000"})
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getUserByQQAccessTokenAsync(string $accessToken)
    {
        return EellyClient::request('user/oauthUser', 'getUserByQQAccessToken', false, $accessToken);
    }

    /**
     * 通过微信code获取用户信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * uid      |int    |用户ID
     * username |string |用户名
     * mobile   |string |手机号
     *
     * @param string $clientId 衣联客户端id
     * @param string $code     Wechat's code
     *
     * @return UserDTO
     * @requestExample({"code":"4E338C9700B3CAEE6017C15001BB7ACD"})
     * @returnExample({"uid":148086,"username":"molimoq","mobile":"13800138000"})
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getUserByWechatCode(string $clientId, string $code): UserDTO
    {
        return EellyClient::request('user/oauthUser', 'getUserByWechatCode', true, $clientId, $code);
    }

    /**
     * 通过微信code获取用户信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * uid      |int    |用户ID
     * username |string |用户名
     * mobile   |string |手机号
     *
     * @param string $clientId 衣联客户端id
     * @param string $code     Wechat's code
     *
     * @return UserDTO
     * @requestExample({"code":"4E338C9700B3CAEE6017C15001BB7ACD"})
     * @returnExample({"uid":148086,"username":"molimoq","mobile":"13800138000"})
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getUserByWechatCodeAsync(string $clientId, string $code)
    {
        return EellyClient::request('user/oauthUser', 'getUserByWechatCode', false, $clientId, $code);
    }

    /**
     * 通过微信code获取用户信息(微信小程序).
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * uid      |int    |用户ID
     * username |string |用户名
     * mobile   |string |手机号
     *
     * @param string $clientId      衣联客户端id
     * @param string $code          登录时获取的code
     * @param string $encryptedData 包括敏感数据在内的完整用户信息的加密数据
     * @param string $iv            加密算法的初始向量
     * @param string $rawData       不包括敏感信息的原始数据字符串，用于计算签名
     * @param string $signature     使用 sha1( rawData + sessionkey ) 得到字符串，用于校验用户信息
     *
     * @return UserDTO
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getUserByWechatJscode(string $clientId, string $code, string $encryptedData, string $iv, string $rawData, string $signature): UserDTO
    {
        return EellyClient::request('user/oauthUser', 'getUserByWechatJscode', true, $clientId, $code, $encryptedData, $iv, $rawData, $signature);
    }

    /**
     * 通过微信code获取用户信息(微信小程序).
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * uid      |int    |用户ID
     * username |string |用户名
     * mobile   |string |手机号
     *
     * @param string $clientId      衣联客户端id
     * @param string $code          登录时获取的code
     * @param string $encryptedData 包括敏感数据在内的完整用户信息的加密数据
     * @param string $iv            加密算法的初始向量
     * @param string $rawData       不包括敏感信息的原始数据字符串，用于计算签名
     * @param string $signature     使用 sha1( rawData + sessionkey ) 得到字符串，用于校验用户信息
     *
     * @return UserDTO
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getUserByWechatJscodeAsync(string $clientId, string $code, string $encryptedData, string $iv, string $rawData, string $signature)
    {
        return EellyClient::request('user/oauthUser', 'getUserByWechatJscode', false, $clientId, $code, $encryptedData, $iv, $rawData, $signature);
    }

    /**
     * 通过微信code获取用户信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * uid      |int    |用户ID
     * username |string |用户名
     * mobile   |string |手机号
     *
     * @param string $mobile 手机号码
     * @param string $code   手机验证码
     *
     * @return UserDTO
     * @requestExample({"code":"4E338C9700B3CAEE6017C15001BB7ACD"})
     * @returnExample({"uid":148086,"username":"molimoq","mobile":"13800138000"})
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getUserByMobileCode(string $mobile, string $code): UserDTO
    {
        return EellyClient::request('user/oauthUser', 'getUserByMobileCode', true, $mobile, $code);
    }

    /**
     * 通过微信code获取用户信息.
     *
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * ---------|-------|--------------
     * uid      |int    |用户ID
     * username |string |用户名
     * mobile   |string |手机号
     *
     * @param string $mobile 手机号码
     * @param string $code   手机验证码
     *
     * @return UserDTO
     * @requestExample({"code":"4E338C9700B3CAEE6017C15001BB7ACD"})
     * @returnExample({"uid":148086,"username":"molimoq","mobile":"13800138000"})
     *
     * @author hehui<hehui@eelly.net>
     */
    public function getUserByMobileCodeAsync(string $mobile, string $code)
    {
        return EellyClient::request('user/oauthUser', 'getUserByMobileCode', false, $mobile, $code);
    }

    /**
     * 保存sso token
     *
     * @param string $token
     * @param array  $data
     * @param int    $lifetime
     * @return bool
     *
     * @author zhangyangxun
     * @since 2018-11-27
     */
    public function saveSsoLoginToken(string $token, array $data, int $lifetime = 60): bool
    {
        return EellyClient::request('user/oauthUser', 'saveSsoLoginToken', true, $token, $data, $lifetime);
    }

    /**
     * 保存sso token
     *
     * @param string $token
     * @param array  $data
     * @param int    $lifetime
     * @return bool
     *
     * @author zhangyangxun
     * @since 2018-11-27
     */
    public function saveSsoLoginTokenAsync(string $token, array $data, int $lifetime = 60)
    {
        return EellyClient::request('user/oauthUser', 'saveSsoLoginToken', false, $token, $data, $lifetime);
    }

    /**
     * 校验sso token
     *
     * @param string $token
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-11-27
     */
    public function checkSsoLoginToken(string $token): array
    {
        return EellyClient::request('user/oauthUser', 'checkSsoLoginToken', true, $token);
    }

    /**
     * 校验sso token
     *
     * @param string $token
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-11-27
     */
    public function checkSsoLoginTokenAsync(string $token)
    {
        return EellyClient::request('user/oauthUser', 'checkSsoLoginToken', false, $token);
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