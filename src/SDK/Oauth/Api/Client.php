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

namespace Eelly\SDK\Oauth\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Oauth\Service\ClientInterface;
use Eelly\SDK\Oauth\Service\Index\DTO\ClientDTO;
use Eelly\SDK\Oauth\Service\Index\DTO\ResultDTO;

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