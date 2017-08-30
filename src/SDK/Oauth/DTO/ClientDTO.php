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

namespace Eelly\SDK\Oauth\DTO;

use Eelly\DTO\AbstractDTO;

class ClientDTO extends AbstractDTO
{
    /**
     * id.
     *
     * @var int
     */
    public $clientId;

    /**
     * @var string 客户端key
     */
    public $clientKey;

    /**
     * @var string 秘钥
     */
    public $clientSecret;

    /**
     * @var int 是否加密
     */
    public $isEncrypt;

    /**
     * @var int 用户ID
     */
    public $userId;

    /**
     * @var string 组织名字
     */
    public $orgName;

    /**
     * @var string 应用名字
     */
    public $appName;

    /**
     * @var string 回调地址
     */
    public $redirectUri;

    /**
     * @var int 认证类型(1：授权码模式，2：简化模式，3：密码模式，4：客户端模式)
     */
    public $authType;

    /**
     * @var int 添加时间
     */
    public $createdTime;


}
