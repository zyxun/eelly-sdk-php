<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Contact\Service;

use Eelly\DTO\UidDTO;


/**
 * 联系人导入通信录记录.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 * @since 2017年10月12日
 */
interface ImportInterface
{

    /**
     * 检测用户多个id是否已经被卖家导入通讯录.
     *
     * @param array $userIds 用户ID
     * @param UidDTO|null $user
     *
     * @return array
     *
     * @requestExample()
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年10月12日
     */
    public function isAddressList(array $userIds, UidDTO $user = null): array;

}