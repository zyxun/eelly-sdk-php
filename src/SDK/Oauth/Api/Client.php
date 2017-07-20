<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Oauth\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Oauth\Service\ClientInterface;
use Eelly\SDK\Oauth\Service\Index\DTO\ResultDTO;
use Eelly\SDK\Oauth\Service\Index\DTO\ClientDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Client implements ClientInterface
{

    /**
     * 添加客户端
     * @return int
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function addClient(array $data): int
    {
        return EellyClient::request('oauth/clientserver', 'addClient', $data);
    }



    /**
     * 编辑客户端.
     * @param int $id      客户端id
     * @param array $data  更新信息
     * @return bool
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function updateClient(int $id,array $data): bool
    {
        return EellyClient::request('oauth/clientserver', 'updateClient', $id, $data);
    }

    /**
     * 根据id获取客户端信息
     * @param int $id  客户端id
     * @return array
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function getClient(int $id): ClientDTO
    {
        return EellyClient::request('oauth/clientserver', 'getClient', $id);
    }


    /**
     * 分页获得客户端列表.
     *
     * @param int $limit 每页页数
     * @param int $currentPage 当前页
     * @return array
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function listClientPage(int $limit = 10, int $currentPage = 1): array
    {
        // TODO: Implement listClientPage() method.
        return EellyClient::request('oauth/clientserver', 'listClientPage', $limit,$currentPage);
    }

    /**
     * 获得客户端列表.
     *
     * @return array
     * @author liangxinyi<liangxinyi@eelly.net>
     */
    public function listClient(): array
    {
        // TODO: Implement listClient() method.
        return EellyClient::request('oauth/clientserver', 'listClient');

    }
}