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

namespace Eelly\SDK\System\Api;

use Eelly\DTO\UidDTO;
use Eelly\SDK\EellyClient;
use Eelly\SDK\System\DTO\BankDTO;
use Eelly\SDK\System\Service\BankInterface;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Bank
{
    /**
     * 根据传过来的银行主键id，返回对应的银行信息.
     *
     * @param int $bankId 银行主键id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return BankDTO
     *
     * @requestExample({"bankId":1})
     * @returnExample({"bankId":1,"name":"中行上海分行", "code":"银行编码","logo":"bank_logo_shbank.gif","use_flag":1,"sort":255,
     *     "status":1,"createdTime":1503560249})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-27
     */
    public function getBank(int $bankId): BankDTO
    {
        return EellyClient::request('system/bank', __FUNCTION__, true, $bankId);
    }

    /**
     * 根据传过来的银行主键id，返回对应的银行信息.
     *
     * @param int $bankId 银行主键id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return BankDTO
     *
     * @requestExample({"bankId":1})
     * @returnExample({"bankId":1,"name":"中行上海分行", "code":"银行编码","logo":"bank_logo_shbank.gif","use_flag":1,"sort":255,
     *     "status":1,"createdTime":1503560249})
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-27
     */
    public function getBankAsync(int $bankId)
    {
        return EellyClient::request('system/bank', __FUNCTION__, false, $bankId);
    }

    /**
     * 添加一条银行记录.
     *
     * @param array  $data                银行数据
     * @param string $data['name']        银行名称
     * @param string $data['code']        银行编码
     * @param string $data['logo']        银行logo
     * @param int    $data['useFlag']     银行使用标志
     * @param int    $data['sort']        排序
     * @param int    $data['status']      状态：0 禁用 1 正常
     * @param int    $data['createdTime'] 创建时间
     * @param UidDTO $user                用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"name":"测试银行", "code":"testcode","logo":"bank_logo_shbank.gif","use_flag":1,"sort":255,"status":1,"createdTime":1503560249})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-27
     */
    public function addBank(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/bank', __FUNCTION__, true, $data, $user);
    }

    /**
     * 添加一条银行记录.
     *
     * @param array  $data                银行数据
     * @param string $data['name']        银行名称
     * @param string $data['code']        银行编码
     * @param string $data['logo']        银行logo
     * @param int    $data['useFlag']     银行使用标志
     * @param int    $data['sort']        排序
     * @param int    $data['status']      状态：0 禁用 1 正常
     * @param int    $data['createdTime'] 创建时间
     * @param UidDTO $user                用户登录信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"name":"测试银行", "code":"testcode","logo":"bank_logo_shbank.gif","use_flag":1,"sort":255,"status":1,"createdTime":1503560249})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-27
     */
    public function addBankAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('system/bank', __FUNCTION__, false, $data, $user);
    }

    /**
     * 更新一条银行记录.
     *
     * @param int    $bankId          银行主键id
     * @param array  $data            银行数据
     * @param string $data['name']    银行名称
     * @param string $data['code']    银行编码
     * @param string $data['logo']    银行logo
     * @param int    $data['useFlag'] 银行使用标志
     * @param int    $data['sort']    排序
     * @param int    $data['status']  状态：0 禁用 1 正常
     * @param UidDTO $user            登录用户信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"bankId":1, "data":{"name":"测试银行", "code":"testcode","logo":"bank_logo_shbank.gif","use_flag":1,"sort":255,"status":1}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-27
     */
    public function updateBank(int $bankId, array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('system/bank', __FUNCTION__, true, $bankId, $data, $user);
    }

    /**
     * 更新一条银行记录.
     *
     * @param int    $bankId          银行主键id
     * @param array  $data            银行数据
     * @param string $data['name']    银行名称
     * @param string $data['code']    银行编码
     * @param string $data['logo']    银行logo
     * @param int    $data['useFlag'] 银行使用标志
     * @param int    $data['sort']    排序
     * @param int    $data['status']  状态：0 禁用 1 正常
     * @param UidDTO $user            登录用户信息
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample({"bankId":1, "data":{"name":"测试银行", "code":"testcode","logo":"bank_logo_shbank.gif","use_flag":1,"sort":255,"status":1}})
     * @returnExample(true)
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-27
     */
    public function updateBankAsync(int $bankId, array $data, UidDTO $user = null)
    {
        return EellyClient::request('system/bank', __FUNCTION__, false, $bankId, $data, $user);
    }

    /**
     * 分页获取银行信息列表.
     *
     * @param array $condition            查询条件
     * @param int   $condition['useFlag'] 银行使用标志
     * @param int   $condition['status']  状态：0 禁用 1 正常
     * @param int   $currentPage          页码
     * @param int   $limit                分页条数
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     * @requestExample(["condition": [{"useFlag":1,"status":1}],"limit": "10","currentPage": "1"])
     * @returnExample(["items": [{"bankId":1,"name":"测试银行", "code":"testcode","logo":"bank_logo_shbank.gif",
     *     "use_flag":1,"sort":255,"status":1,"createdTime":1503560249},
     *     "page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-27
     */
    public function listBankPage(array $condition = [], int $currentPage = 1, int $limit = 20): array
    {
        return EellyClient::request('system/bank', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     * 分页获取银行信息列表.
     *
     * @param array $condition            查询条件
     * @param int   $condition['useFlag'] 银行使用标志
     * @param int   $condition['status']  状态：0 禁用 1 正常
     * @param int   $currentPage          页码
     * @param int   $limit                分页条数
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     * @requestExample(["condition": [{"useFlag":1,"status":1}],"limit": "10","currentPage": "1"])
     * @returnExample(["items": [{"bankId":1,"name":"测试银行", "code":"testcode","logo":"bank_logo_shbank.gif",
     *     "use_flag":1,"sort":255,"status":1,"createdTime":1503560249},
     *     "page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhangyingdi<zhangyingdi@gmail.com>
     *
     * @since  2017-09-27
     */
    public function listBankPageAsync(array $condition = [], int $currentPage = 1, int $limit = 20)
    {
        return EellyClient::request('system/bank', __FUNCTION__, false, $condition, $currentPage, $limit);
    }

    /**
     * {@inheritdoc}
     */
    public function listBanks(): array
    {
        return EellyClient::request('system/bank', __FUNCTION__, true);
    }

    /**
     * {@inheritdoc}
     */
    public function updateBankLogo(int $bankId, string $logo): bool
    {
        return EellyClient::request('system/bank', __FUNCTION__, true, $bankId, $logo);
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
