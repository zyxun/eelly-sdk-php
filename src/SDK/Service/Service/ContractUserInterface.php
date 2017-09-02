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
interface ContractUserInterface
{
    /**
     * 新增用户合同签订记录.
     *
     * @param array  $data 新增数据
     * @param UidDTO $user 登录用户对象
     *
     * @throws Eelly\SDK\Service\Exception\ContractUserException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\ContractUserException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\ContractUserException 703001 插入数据失败
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function addContractUser(array $data, UidDTO $user = null): array;

    /**
     * 获取指定ID的用户合同签订记录.
     *
     * @param int $scnId 合同编号ID
     *
     * @throws Eelly\SDK\Service\Exception\ContractUserException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\ContractUserException 702001 数据不存在
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function getContractUser(int $scnId): array;

    /**
     * 修改用户合同签订记录.
     * 修改信息，包括状态
     *
     * @param array  $data list的数据
     * @param UidDTO $user 登录用户对象
     *
     * @throws Eelly\SDK\Service\Exception\ContractUserException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\ContractUserException 700001 用户未登录
     * @throws Eelly\SDK\Service\Exception\ContractUserException 704001 更新数据失败
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */
    public function updateContractUser(array $data, UidDTO $user = null): array;

    /**
     * 获取用户合同签订记录.
     *
     * @param array $condition   查询条件
     * @param int   $limit       每页页数
     * @param int   $currentPage 当前页
     *
     * @throws Eelly\SDK\Service\Exception\ContractUserException 701001 参数错误
     * @throws Eelly\SDK\Service\Exception\ContractUserException 700001 用户未登录
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author fenghaikun<fenghaikun@eelly.net>
     *
     * @since 2017-8-02
     */

    public function listContractUserPage(array $condition = [],int $currentPage = 1, int $limit = 10,UidDTO $user=null):array;
    


}

