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

namespace Eelly\SDK\Oauth\Service;

use Eelly\SDK\Oauth\DTO\ClientDTO;

/**
 * 客户端接口.
 *
 * @author liangxinyi<liangxinyi@eelly.net>
 */
interface ClientInterface
{

    /**
     * 添加客户端.
     *
     * @param array  $data                  客户端数组
     * @param string $data['clientKey']    客户端key
     * @param string $data['clientSecret'] 秘钥
     * @param int|null    $data['userId']       用户ID
     * @param int|null    $data['isEncrypt']    是否加密
     * @param string $data['orgName']      组织名字
     * @param string $data['appName']      应用名字
     * @param string|null $data['redirectUri']  回调地址
     * @param int|null    $data['authType']     认证类型(1：授权码模式，2：简化模式，3：密码模式，4：客户端模式)
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return int 客户端id
     * @requestExample({"data":{"clientKey":"121","clientSecret":"aaasssss"}})
     * @returnExample({"clientId":"1","clientKey":"myawesomeapp","clientSecret":"$2y$10$ZhlBMQNOUNSWt95LNMIfqePECBg85zwqjq7xS56uzQCllnQ4T9sgG","isEncrypt":"\u0001","userId":"0","orgName":"eelly","app_name":"myapp","redirectUri":"","authType":"4","createdTime":"0","updateTime":"2017-06-13 14:29:53"})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function addClient(array $data): int;

    /**
     * 分页获得客户端列表.
     *
     * @param string $clientKey   客户端key
     * @param int         $currentPage 当前页
     * @param int         $limit       每页页数
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return array 分页结果集
     * @requestExample({"clientKey":"","currentPage":1,"limit":2})
     * @returnExample({"items":[{"clientId":"1","clientKey":"myawesomeapp","clientSecret":"$2y$10$ZhlBMQNOUNSWt95LNMIfqePECBg85zwqjq7xS56uzQCllnQ4T9sgG","isEncrypt":"\u0001","userId":"0","orgName":"eelly","appName":"myapp","redirectUri":"","authType":"4","createdTime":"0","updateTime":"2017-06-13 14:29:53"}],"page":{"first":1,"before":1,"current":1,"last":14,"next":2,"totalPages":14,"totalItems":14,"limit":1}})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function listClientPage(string $clientKey = null, int $currentPage = 1, int $limit = 10): array;

    /**
     * 获得客户端列表.
     *
     * @param string $clientKey 客户端key
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return array 返回列表结果集
     * @requestExample()
     * @returnExample([{"clientId":"1","clientKey":"myawesomeapp","clientSecret":"$2y$10$ZhlBMQNOUNSWt95LNMIfqePECBg85zwqjq7xS56uzQCllnQ4T9sgG","isEncrypt":"\u0001","userId":"0","orgName":"eelly","appName":"myapp","redirectUri":"","authType":"4","createdTime":"0","updateTime":"2017-06-13 14:29:53"}])
     * @badSql
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function listClient(string $clientKey = null): array;

    /**
     * 编辑客户端.
     * 编辑并保存指定客户端id信息.
     *
     * @param int    $clientId              客户端id
     * @param array  $data                  更新信息

     * @param string $data['clientKey']    客户端key
     * @param string $data['clientSecret'] 秘钥
     * @param int    $data['userId']       用户ID
     * @param int    $data['isEncrypt']    是否加密
     * @param string $data['orgName']      组织名字
     * @param string $data['appName']      应用名字
     * @param string $data['redirectUri']  回调地址
     * @param int    $data['authType']     认证类型(1：授权码模式，2：简化模式，3：密码模式，4：客户端模式)
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool 返回bool值
     * @requestExample({"clientId":1,"data":{"clientKey":"user","clientSecret":"ssss"}})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function updateClient(int $clientId, array $data): bool;

    /**
     * 根据id获取客户端信息.
     * 根据客户端id获取该条客户端信息.
     *
     * @param int $clientId 客户端id
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return ClientDTO
     * @requestExample({"clientId":1})
     * @returnExample({"clientId":"1","clientKey":"myawesomeapp","clientSecret":"$2y$10$ZhlBMQNOUNSWt95LNMIfqePECBg85zwqjq7xS56uzQCllnQ4T9sgG","isEncrypt":"1","userId":"0","orgName":"eelly","appName":"myapp","redirectUri":"","authType":"4","createdTime":"0","updateTime":"2017-06-13 14:29:53"})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     * since 2017-7-24
     */
    public function getClient(int $clientId): ClientDTO;

    /**
     * 删除指定id客户端.
     *
     * 删除单条指定id的客户端信息.
     *
     * @param int $clientId 客户端id
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool 返回bool值
     * @requestExample({"clientId":1})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-24
     */
    public function deleteClient(int $clientId): bool;

    /**
     * 批量删除客户端.
     *
     * 根据ids数组里面的id批量删除客户端信息.
     *
     * @param array $clientIds 客户端id数组
     *
     * @throws \Eelly\SDK\Oauth\Exception\OauthException
     *
     * @return bool
     * @requestExample({"clientIds":[1,2,3,4,5,6,7]})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-7-24
     */
    public function deleteClientBatch(array $clientIds): bool;
}
