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

namespace Eelly\SDK\Order\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Order\Service\CainiaoInterface;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Cainiao implements CainiaoInterface
{
    /**
     * 判断是否绑定.
     *
     * @param int         $type   绑定类型：1 淘宝帐户 2 菜鸟帐户
     * @param UidDTO|null $uidDTO
     *
     * @return int
     * @requestExample({"type":1})
     * @returnExample(1)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月23日
     */
    public function isBindToken(int $type, UidDTO $uidDTO = null): int
    {
        return EellyClient::request('order/cainiao', 'isBindToken', true, $type, $uidDTO);
    }

    /**
     * 判断是否绑定.
     *
     * @param int         $type   绑定类型：1 淘宝帐户 2 菜鸟帐户
     * @param UidDTO|null $uidDTO
     *
     * @return int
     * @requestExample({"type":1})
     * @returnExample(1)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月23日
     */
    public function isBindTokenAsync(int $type, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/cainiao', 'isBindToken', false, $type, $uidDTO);
    }

    /**
     * 获取用户可选的模板.
     *
     * @param UidDTO|null $uidDTO 登录用户数据
     *
     * @return array
     * @returnExample({
     *   "templateList": [
     *       {
     *           "cpCode": "test",
     *           "name": "蓝牙通用模板",
     *           "size": "76*180",
     *           "images": "https://img01.eelly.com/G06/M00/00/4A/small_148_rIYBAFqhzrOIIZfDAAD34jJKXesAAAdXAGJLdIAAPf6066.jpg"
     *       },
     *       {
     *           "cpCode": "emptyTest",
     *           "name": "蓝牙通用模板",
     *           "size": "76*180",
     *           "images": "https://img01.eelly.com/G06/M00/00/4A/small_148_rIYBAFqhzrOIIZfDAAD34jJKXesAAAdXAGJLdIAAPf6066.jpg"
     *       },
     *       {
     *           "cpCode": "FAST",
     *           "name": "百世",
     *           "size": "76*170",
     *           "images": "https://img01.eelly.com/G06/M00/00/4A/small_148_rIYBAFqhzrOIIZfDAAD34jJKXesAAAdXAGJLdIAAPf6066.jpg"
     *       }
     *   ],
     *   "defaultCpCode": ""
     * })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月23日
     */
    public function getTemplateList(UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/cainiao', 'getTemplateList', true, $uidDTO);
    }

    /**
     * 获取用户可选的模板.
     *
     * @param UidDTO|null $uidDTO 登录用户数据
     *
     * @return array
     * @returnExample({
     *   "templateList": [
     *       {
     *           "cpCode": "test",
     *           "name": "蓝牙通用模板",
     *           "size": "76*180",
     *           "images": "https://img01.eelly.com/G06/M00/00/4A/small_148_rIYBAFqhzrOIIZfDAAD34jJKXesAAAdXAGJLdIAAPf6066.jpg"
     *       },
     *       {
     *           "cpCode": "emptyTest",
     *           "name": "蓝牙通用模板",
     *           "size": "76*180",
     *           "images": "https://img01.eelly.com/G06/M00/00/4A/small_148_rIYBAFqhzrOIIZfDAAD34jJKXesAAAdXAGJLdIAAPf6066.jpg"
     *       },
     *       {
     *           "cpCode": "FAST",
     *           "name": "百世",
     *           "size": "76*170",
     *           "images": "https://img01.eelly.com/G06/M00/00/4A/small_148_rIYBAFqhzrOIIZfDAAD34jJKXesAAAdXAGJLdIAAPf6066.jpg"
     *       }
     *   ],
     *   "defaultCpCode": ""
     * })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月23日
     */
    public function getTemplateListAsync(UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/cainiao', 'getTemplateList', false, $uidDTO);
    }

    /**
     * 获取电子面单快递.
     *
     * @param int         $type   绑定类型：1 淘宝帐户 2 菜鸟帐户
     * @param UidDTO|null $uidDTO 登录用户ID
     *
     * @return array
     * @returnExample({
     *   "templateList": [
     *       {
     *           "name": "韵达快递",
     *           "cpCode": "ZJS"
     *       },
     *       {
     *           "name": "百世快递",
     *           "cpCode": "FAST"
     *       }
     *   ],
     *   "defaultCpCode": ""
     * })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月23日
     */
    public function getInvoiceList(int $type, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('order/cainiao', 'getInvoiceList', true, $type, $uidDTO);
    }

    /**
     * 获取电子面单快递.
     *
     * @param int         $type   绑定类型：1 淘宝帐户 2 菜鸟帐户
     * @param UidDTO|null $uidDTO 登录用户ID
     *
     * @return array
     * @returnExample({
     *   "templateList": [
     *       {
     *           "name": "韵达快递",
     *           "cpCode": "ZJS"
     *       },
     *       {
     *           "name": "百世快递",
     *           "cpCode": "FAST"
     *       }
     *   ],
     *   "defaultCpCode": ""
     * })
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月23日
     */
    public function getInvoiceListAsync(int $type, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/cainiao', 'getInvoiceList', false, $type, $uidDTO);
    }

    /**
     * 授权地址，第三方授权认证方式.
     *
     * @param UidDTO|null $uidDTO
     *
     * @return string
     *
     * @returnExample({'http://lcp.cloud.cainiao.com/permission/isv/grantpage.do?isvAppKey=892317&ext=T3JkZXJcTG9naWNcQ2Fpbmlhb0xvZ2ljOnVzZXJJZDoxNDgwODY=&redirectUrl=https://www.eelly.com/cainiaoCallbackUrl.php'})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月22日
     */
    public function getAuthUrl(UidDTO $uidDTO = null): string
    {
        return EellyClient::request('order/cainiao', 'getAuthUrl', true, $uidDTO);
    }

    /**
     * 授权地址，第三方授权认证方式.
     *
     * @param UidDTO|null $uidDTO
     *
     * @return string
     *
     * @returnExample({'http://lcp.cloud.cainiao.com/permission/isv/grantpage.do?isvAppKey=892317&ext=T3JkZXJcTG9naWNcQ2Fpbmlhb0xvZ2ljOnVzZXJJZDoxNDgwODY=&redirectUrl=https://www.eelly.com/cainiaoCallbackUrl.php'})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月22日
     */
    public function getAuthUrlAsync(UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/cainiao', 'getAuthUrl', false, $uidDTO);
    }

    /**
     * 用户自动提交菜鸟授权ID.
     *
     * @param string      $accessCode 授权码
     * @param UidDTO|null $uidDTO
     *
     * @return bool
     *
     * @requestExample({"accessCode":"WVRQMG1UdDV1dndYZFJPbllQeTBEeUlqeTdKK0poQllwaTZSWjd2OGVoWGdjcUtMdzg0ZXNUNXJvUk1aWXg4dg=="})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月22日
     */
    public function saveToken(string $accessCode, UidDTO $uidDTO = null): bool
    {
        return EellyClient::request('order/cainiao', 'saveToken', true, $accessCode, $uidDTO);
    }

    /**
     * 用户自动提交菜鸟授权ID.
     *
     * @param string      $accessCode 授权码
     * @param UidDTO|null $uidDTO
     *
     * @return bool
     *
     * @requestExample({"accessCode":"WVRQMG1UdDV1dndYZFJPbllQeTBEeUlqeTdKK0poQllwaTZSWjd2OGVoWGdjcUtMdzg0ZXNUNXJvUk1aWXg4dg=="})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月22日
     */
    public function saveTokenAsync(string $accessCode, UidDTO $uidDTO = null)
    {
        return EellyClient::request('order/cainiao', 'saveToken', false, $accessCode, $uidDTO);
    }

    /**
     * 菜鸟面单回调.
     *
     * @param string $accessCode 授权码
     * @param string $key
     *
     * @return bool
     *
     * @requestExample({"accessCode":"WVRQMG1UdDV1dndYZFJPbllQeTBEeUlqeTdKK0poQllwaTZSWjd2OGVoWGdjcUtMdzg0ZXNUNXJvUk1aWXg4dg==","key":"=T3JkZXJcTG9naWNcQ2Fpbmlhb0xvZ2ljOnVzZXJJZDoxNDgwODY="})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月22日
     */
    public function callBackSaveToken(string $accessCode, string $key): bool
    {
        return EellyClient::request('order/cainiao', 'callBackSaveToken', true, $accessCode, $key);
    }

    /**
     * 菜鸟面单回调.
     *
     * @param string $accessCode 授权码
     * @param string $key
     *
     * @return bool
     *
     * @requestExample({"accessCode":"WVRQMG1UdDV1dndYZFJPbllQeTBEeUlqeTdKK0poQllwaTZSWjd2OGVoWGdjcUtMdzg0ZXNUNXJvUk1aWXg4dg==","key":"=T3JkZXJcTG9naWNcQ2Fpbmlhb0xvZ2ljOnVzZXJJZDoxNDgwODY="})
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2018年05月22日
     */
    public function callBackSaveTokenAsync(string $accessCode, string $key)
    {
        return EellyClient::request('order/cainiao', 'callBackSaveToken', false, $accessCode, $key);
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