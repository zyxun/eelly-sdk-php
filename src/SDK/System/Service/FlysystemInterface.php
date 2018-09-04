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
use Eelly\SDK\System\DTO\UserFileDTO;
use GuzzleHttp\Psr7\UploadedFile;

/**
 * Flysystem文件处理.
 *
 * @author hehui<hehui@eelly.net>
 */
interface FlysystemInterface
{
    /**
     * 文件上传(需要用form-data提交).
     *
     * > 请求参数bizName 和 bizId 说明
     *
     *  业务名         |  bizName            | bizId
     * ---------------- | ------------------- | ----------
     * 用户头像          |  avatar             | 无
     * 店铺logo         | store_logo          | 店铺id
     * 反馈             | feedback           | 无
     * 用户动态          | uzone               | 无
     * 商品图片          | goods              | 店铺id
     * 店铺动态          | szone               | 店铺id
     *
     * > 返回数据说明
     *
     * 属性 | 说明
     * ---------- | -----------
     * fileId     | 文件id
     * fileUri    | 文件访问路径
     *
     * > 请求示例
     *
     * ```sh
     * curl --request POST \
     *   --url https://api.eelly.test/system/flysystem/uploadFile \
     *   --header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJJV5rJkXLBUd2kyYtd4Zhqokv3TFvmCvFMe4mC5L_IKYgabij8' \
     *   --header 'content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW' \
     *   --form 0=@/Users/hehui/workspace/QQ20180809-190334@2x.png \
     *   --form 1=goods \
     *   --form 2=21221
     * ```
     *
     * @param UploadedFile $uploadedFile 上传的文件
     * @param string       $bizName      业务名
     * @param string       $bizId        业务关联id
     * @param UidDTO|null  $uidDTO       需要登录
     *
     * @return UserFileDTO
     *
     * @returnExample({
     *     "fileId": "5b8895109842b000303c4155",
     *     "fileUri": "https://eellytest.eelly.com/user148086/other/20180831/8812177765351.png"
     * })
     *
     * @author hehui<hehui@eelly.net>
     */
    public function uploadFile(UploadedFile $uploadedFile, string $bizName = 'other', string $bizId = '', UidDTO $uidDTO = null): UserFileDTO;
}
