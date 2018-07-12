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

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\AlyUploadOssInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class AlyUploadOss implements AlyUploadOssInterface
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
    public function signUrl(int $userId, string $filename = 'avatar', string $dir = null): string
    {
        return EellyClient::request('system/alyUploadOss', 'signUrl', true, $userId, $filename, $dir);
    }

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
    public function signUrlAsync(int $userId, string $filename = 'avatar', string $dir = null)
    {
        return EellyClient::request('system/alyUploadOss', 'signUrl', false, $userId, $filename, $dir);
    }

    /**
     * 私有读取图片
     *
     * @param string $url 图片url
     * @return string
     * 
     * @author sunanzhi <sunanzhi@sunanzhi.com>
     */
    public function checkSignUrl(string $url): string
    {
        return EellyClient::request('system/alyUploadOss', 'checkSignUrl', true, $url);
    }

    /**
     * 私有读取图片
     *
     * @param string $url 图片url
     * @return string
     * 
     * @author sunanzhi <sunanzhi@sunanzhi.com>
     */
    public function checkSignUrlAsync(string $url)
    {
        return EellyClient::request('system/alyUploadOss', 'checkSignUrl', false, $url);
    }

    /**
     * 删除oss资源文件
     *
     * @param string $url 图片url 多图用#隔开
     * @return boolean
     */
    public function delImg(string $url): bool
    {
        return EellyClient::request('system/alyUploadOss', 'delImg', true, $url);
    }

    /**
     * 删除oss资源文件
     *
     * @param string $url 图片url 多图用#隔开
     * @return boolean
     */
    public function delImgAsync(string $url)
    {
        return EellyClient::request('system/alyUploadOss', 'delImg', false, $url);
    }

    /**
     * 第三方上传图片 微信／qq 登陆抓取头像上传
     * 
     * @param integer $userId 用户id
     * @param string $url 头像url
     * @return boolean
     */
    public function thirdPartUploadImg(int $userId, string $url): bool
    {
        return EellyClient::request('system/alyUploadOss', 'thirdPartUploadImg', true, $userId, $url);
    }

    /**
     * 第三方上传图片 微信／qq 登陆抓取头像上传
     * 
     * @param integer $userId 用户id
     * @param string $url 头像url
     * @return boolean
     */
    public function thirdPartUploadImgAsync(int $userId, string $url)
    {
        return EellyClient::request('system/alyUploadOss', 'thirdPartUploadImg', false, $userId, $url);
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