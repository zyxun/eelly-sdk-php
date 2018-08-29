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
     * > 返回数据(StsTokenDTO)
     *
     * 属性名           | 备注
     * ----------------|-------------------------------------------------------------------------
     * accessKeyId     | Android/iOS移动应用初始化OSSClient获取的 AccessKeyId。
     * accessKeySecret | Android/iOS移动应用初始化OSSClient获取AccessKeySecret。
     * securityToken   | Android/iOS移动应用初始化的Token。
     * expiration      | 该Token失效的时间。Android SDK会自动判断Token是否失效，如果失效，则自动获取Token。
     *
     * 参考：<https://help.aliyun.com/document_detail/31920.html>
     *
     * @param UidDTO $uidDTO 需要登录
     *
     * @return OssTokenDTO
     *
     * @returnExample({
     *     "accessKeySecret": "32Kv2oYwyVKWGePe1LaqbHpywMWkxQsiGCn5yNTRRvsb",
     *     "accessKeyId": "STS.NHUSczbLNH3JENSod8dnvy8G7",
     *     "expiration": "2018-08-29T10:39:26Z",
     *     "securityToken": "CAISiQJ1q6Ft5B2yfSjIr4vgGNnOj5Nv//GhR2jii2RtaOFalv3s1Tz2IH5EdXlvA+kftvs+lWBW6/sSlqJ4T55IQ1Dza8J148zZYftj086T1fau5Jko1beXewHKeSOZsebWZ+LmNqS/Ht6md1HDkAJq3LL+bk/Mdle5MJqP+/EFA9MMRVv6F3kkYu1bPQx/ssQXGGLMPPK2SH7Qj3HXEVBjt3gb6wZ24r/txdaHuFiMzg+46I9P/96vf8n/NfMBZskvD42Hu8VtbbfE3SJq7BxHybx7lqQs+02c4IHMUwYLukzebLuFooMycV9jFaE+Gr9Zqv/njuF/ueHVmInxxgxEIeZPSSPbSZAEX3elGoABpwJ6iRvBCS9pkRRtnVfAuCVZcSlYRSjj7WAONEk027unKo1/CEb0ImGdObjNru0a/Iqw6FLfCQ4WX19Q+t24dQWBELeHDXw34kRlutSrLTItanirrkeRv9TGx9wKtxNfXXvUwrwrMn7u/tpgRZBlgBwFqUqO5kBevkApNz/kTkM="
     * })
     */
    public function stsToken(UidDTO $uidDTO = null): StsTokenDTO;
}
