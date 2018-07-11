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
     * @param integer $userId 用户id
     * @param string $filename 文件前缀名字 默认 avatar
     * @param string $dir 文件存储目录
     * 
     * @return string
     * 
     * @author sunanzhi <sunanzhi@sunanzhi.com>
     */
    public function signUrl(int $userId, string $filename = 'avatar', string $dir = null):string;


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
     * @param string $url 图片url 多图用url隔开
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
