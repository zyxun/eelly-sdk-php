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

namespace Eelly\SDK\Service\Service;

use Eelly\DTO\UidDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface ContractInterface
{
    /**
     * 新增合同版本.
     *
     * @param array  $data 新增数据
     * @param UidDTO $user 登录用户对象
     *
     * @throws
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function addContract(array $data, UidDTO $user = null): array;

    /**
     * 获取指定ID的合同版本.
     *
     * @param int $scId 自定义信息ID
     *
     * @throws
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function getContract(int $scId): array;

    /**
     * 修改合同版本.
     * 修改自定义信息，包括状态
     *
     * @param array  $data list的数据
     * @param UidDTO $user 登录用户对象
     *
     * @throws
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function updateContract(array $data, UidDTO $user = null): array;

    /**
     * 获取合同版本列表.
     *
     * @param array  $condition   查询条件
     * @param int    $limit       每页页数
     * @param int    $currentPage 当前页
     * @param UidDTO $user        登录用户对象
     *
     * @throws
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function listContractPage(array $condition = [], int $limit = 10, int $currentPage = 1, UidDTO $user = null): array;
}
