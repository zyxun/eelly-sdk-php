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

namespace Eelly\SDK\User\Service;

use Eelly\DTO\UserDTO;

/**
 * 用户认证相关方法.
 *
 * @author hehui<hehui@eelly.net>
 */
interface OauthUserInterface
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
    public function getUserByPassword(string $username, string $password): UserDTO;

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
    public function getUserByUid(int $uid): UserDTO;

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
    public function getUserByQQAccessToken(string $accessToken): UserDTO;

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
    public function getUserByWechatCode(string $clientId, string $code): UserDTO;

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
    public function getUserByWechatJscode(
        string $clientId,
        string $code,
        string $encryptedData,
        string $iv,
        string $rawData,
        string $signature
    ): UserDTO;

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
    public function getUserByMobileCode(string $mobile, string $code): UserDTO;

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
    public function saveSsoLoginToken(string $token, array $data, int $lifetime = 60): bool ;

    /**
     * 校验sso token
     *
     * @param string $token
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-11-27
     */
    public function checkSsoLoginToken(string $token): array;
}
