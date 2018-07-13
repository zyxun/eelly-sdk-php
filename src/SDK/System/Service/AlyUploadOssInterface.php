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

/**
 * 上传图片
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface AlyUploadOssInterface
{
    /**
     * 签名url 
     * 
     * > 请求字段说明
     * 
     * 键值    | 类型    | 描述
     * ------ | ------- | --------
     * unique | string  | 唯一标识，如果是作为用户的头像则建议用userid，如果是直播间的分享二维码图建议用直播间的id，如果是多文件上传则建议用用户id拼接元素组成字符串来进行标识
     * filename | string | 文件名称前缀，也是oss文件夹名称，头像用avatar，二维码用code
     * type | string | 文件类型 png，jpg，txt等
     * 
     * > 返回说明：将返回时效性oss临时url，将用于客户端上传文件；
     * 
     * > 返回结果其中线上访问路径：http://eellyimg.oss-cn-shenzhen.aliyuncs.com/avatar/avatar_123123.png
     *
     * @param int $unique 用户 userId:上传用户头像的id， roomId：上传直播间的id
     * @param string $contentType 上传文件的类型 例如 'image/jpeg' 具体参数： @see https://helpcdn.aliyun.com/knowledge_detail/39522.html
     * @param string $filename 文件名称前缀 avatar:头像，code:二维码
     * @param string $type 文件类型 png、jpg...
     * 
     * @return string
     * 
     * @requestExample({
     *      "id":"123123",
     *      "filename":"avatar",
     *      "type":"png"
     * })
     * @returnExample("http://eellyimg.oss-cn-shenzhen.aliyuncs.com/avatar/avatar_123123.png?OSSAccessKeyId=LTAISXGJbA2IXbhv&Expires=1531380457&Signature=S3Fl9Pmgf9mqfDF9aCcvaHFER0Y%3D")
     * 
     * @author sunanzhi <sunanzhi@sunanzhi.com>
     */
    public function signUrl(string $unique, string $contentType, string $filename = 'avatar', string $type = 'png'):string;


    /**
     * 私有读取图片
     *
     * @param string $url 图片url
     * @return string
     * 
     * @author sunanzhi <sunanzhi@sunanzhi.com>
     */
    public function checkSignUrl(string $url):string;


    /**
     * 删除oss资源文件
     *
     * @param string $url 图片url 多图用#隔开
     * @return boolean
     */
    public function delImg(string $url):bool;


    /**
     * 第三方上传图片 微信／qq 登陆抓取头像上传
     * 
     * @param integer $userId 用户id
     * @param string $url 头像url
     * @return boolean
     */
    public function thirdPartUploadImg(int $userId, string $url):bool;
}
