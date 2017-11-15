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

namespace Eelly\SDK\Contact\Service;

use Eelly\DTO\UidDTO;

/**
 * 联系人导入通信录记录.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 *
 * @since 2017年10月12日
 */
interface ImportInterface
{
    /**
     * 检测用户多个id是否已经被卖家导入通讯录.
     *
     * @param array       $userIds 用户ID
     * @param UidDTO|null $user
     *
     * @return array
     *
     * @requestExample()
     * @returnExample(true)
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月12日
     */
    public function isAddressList(array $userIds, UidDTO $user = null): array;
}
