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

namespace Eelly\SDK\Oauth\Service\Index\DTO;

use Eelly\SDK\AbstractDTO;

class ClientDTO extends AbstractDTO
{
    /**
     * id.
     *
     * @var int
     */
    public $client_id;

    /**
     * @var string 客户端key
     */
    public $client_key;

    /**
     * @var string 秘钥
     */
    public $client_secret;

    /**
     * @var int 是否加密
     */
    public $is_encrypt;

    /**
     * @var int 用户ID
     */
    public $user_id;

    /**
     * @var string 组织名字
     */
    public $org_name;

    /**
     * @var string 应用名字
     */
    public $app_name;

    /**
     * @var string 回调地址
     */
    public $redirect_uri;

    /**
     * @var int 认证类型(1：授权码模式，2：简化模式，3：密码模式，4：客户端模式)
     */
    public  $auth_type;

    /**
     * @var int 添加时间
     */
    public $created_time;

    /**
     * @var string 修改时间
     */
    public $update_time;




}
