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
interface ContractNumberInterface
{
    /**
     * 新增合同编号.
     *
     * @param array  $data 新增数据
     * @param UidDTO $user 登录用户对象
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function addContractNumber(array $data, UidDTO $user = null): array;

    /**
     * 获取指定ID的合同编号.
     *
     * @param int $scnId 合同编号ID
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function getContractNumber(int $scnId): array;

    /**
     * 修改合同编号.
     * 修改信息，包括状态
     *
     * @param array  $data list的数据
     * @param UidDTO $user 登录用户对象
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function updateContractNumber(array $data, UidDTO $user = null): array;

    /**
     * 获取合同编号列表.
     *
     * @param array  $condition   查询条件
     * @param int    $limit       每页页数
     * @param int    $currentPage 当前页
     * @param UidDTO $user        登录用户对象
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */

    public function listContractNumberPage(array $condition = [],int $currentPage = 1, int $limit = 10,UidDTO $user=null):array;
    


}

