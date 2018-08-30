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

namespace Eelly\SDK\System\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\System\DTO\StsTokenDTO;

/**
 * 阿里云OSS服务相关接口.
 *
 * @author hehui<hehui@eelly.net>
 */
interface OssInterface
{
    /**
     * 获取OSS的STS凭证.
     *
     * > 业务参数说明(实现图片分发到不同bucket或不同目录)
     *
     *
     * 业务名称          |  bizName            | bizId               |  dir示例(服务端)                          | 文件名示例(客户端)
     * ---------------- | ------------------- | --------------------| --------------------------------------   |------------
     * 用户头像          |  avatar             | 无                  |  user148086/avatar                       | user148086/avatar/logo.png (qq.png或wechat.png)
     * 店铺logo         | store_logo          | 店铺id               | user148086/store12378                    | user148086/store12378/logo.png
     * 商品图片          | goods              | 店铺id               | user148086/store12378/goods/20180901      | user148086/store12378/goods/20180901/5421000613151.png (反转毫秒的时间戳)
     * 动态             | zone               | 无                   | user148086/zone/20180901                  | user148086/zone/20180901/5421000613151.png
     * 反馈             | feedback           | 无                   | user148086/feedback/20180901              |user148086/feedback/20180901/5421000613151.png
     *
     *
     * 参考：<https://help.aliyun.com/document_detail/64945.html>
     *
     * > 返回数据(StsTokenDTO)
     *
     * 属性名           | 备注
     * ----------------|-------------------------------------------------------------------------
     * accessKeyId     | Android/iOS移动应用初始化OSSClient获取的 AccessKeyId。
     * accessKeySecret | Android/iOS移动应用初始化OSSClient获取AccessKeySecret。
     * securityToken   | Android/iOS移动应用初始化的Token。
     * expiration      | 该Token失效的时间。Android SDK会自动判断Token是否失效，如果失效，则自动获取Token。
     * dir             | 业务强制使用的目录
     *
     * 参考：<https://help.aliyun.com/document_detail/31920.html>
     *
     * @param string $bizName 业务名
     * @param string $bizId   业务关联id
     * @param UidDTO $uidDTO  需要登录
     *
     * @return OssTokenDTO
     *
     * @returnExample({
     *     "accessKeySecret": "32Kv2oYwyVKWGePe1LaqbHpywMWkxQsiGCn5yNTRRvsb",
     *     "accessKeyId": "STS.NHUSczbLNH3JENSod8dnvy8G7",
     *     "expiration": "2018-08-29T10:39:26Z",
     *     "securityToken": "CAISiQJ1q6Ft5B2yfSjIr4vgGNnOj5Nv//GhR2jii2rrkeRv9TGx9wKtxNfXXvUwrwrMn7u/tpgRZBlgBwFqUqO5kBevkApNz/kTkM=",
     *     "dir": "user148086/store12378/goods/20180901"
     * })
     *
     * @author hehui<hehui@eelly.net>
     */
    public function stsToken(string $bizName, string $bizId = '', UidDTO $uidDTO = null): StsTokenDTO;
}
