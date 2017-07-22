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

use Eelly\SDK\Oauth\Service\Index\DTO\ClientDTO;

/**
 * @author liangxinyi<liangxinyi@eelly.net>
 */
interface ClientInterface
{
    /**
     * 添加客户端.
     *
     * @return int
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function addClient(array $data):int;

    /**
     * 分页获得客户端列表.
     *
     * @param int $limit       每页页数
     * @param int $currentPage 当前页
     *
     * @return array
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function listClientPage(int $limit = 10, int $currentPage = 1):array;

    /**
     * 获得客户端列表.
     *
     * @return array
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function listClient():array;

    /**
     * 编辑客户端.
     *
     * @param int   $id   客户端id
     * @param array $data 更新信息
     *
     * @return bool
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function updateClient(int $id, array $data):bool;

    /**
     * 根据id获取客户端信息.
     *
     * @param int $id 客户端id
     *
     * @return ClientDTO
     * @returnExample({"client_id":"1","client_key":"myawesomeapp","client_secret":"$2y$10$ZhlBMQNOUNSWt95LNMIfqePECBg85zwqjq7xS56uzQCllnQ4T9sgG","is_encrypt":"\u0001","user_id":"0","org_name":"eelly","app_name":"myapp","redirect_uri":"","auth_type":"4","created_time":"0","update_time":"2017-06-13 14:29:53"})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function getClient(int $id):ClientDTO;
}
