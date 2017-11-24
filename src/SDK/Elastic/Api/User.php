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

namespace Eelly\SDK\Elastic\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Elastic\Service\UserInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class User implements UserInterface
{
    /**
     * 检索会员信息.
     *
     * @param array $param 会员检索数组参数
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return array 会员检索返回结果
     * @requestExample({"core":"user","sArray":[{"field":"realname","keyword":"\u6881\u65b0\u5b9c"},{"field":"email","keyword":"qq.com"}],"sortArray":{"regTime":"desc"},"locationSearch":{"field":"local","lat":39.909999999999997,"lon":116.41667,"distance":1000},"sRows":80,"sStart":0,"fArray":{"status":1},"spWord":"1","facets":["uiId","gpvId"],"query":"gender:2","clear":1})
     * @returnExample({"numFound":10,"docs":[{"username":"liangxinyi8525917","realname":"\u6881\u65b0\u5b9c8525917","email":"8525917@qq.com","mobile":"13588525917","creditMark":32,"regTime":1507567070,"status":1,"regType":4,"flag":1,"gender":2,"regChannel":1,"uiId":8,"gcId":852,"gpvId":231,"districtId":241,"location":{"lat":39.916670000000003,"lon":116.41667}},{"username":"liangxinyi8793129","realname":"\u6881\u65b0\u5b9c8793129","email":"8793129@qq.com","mobile":"13588793129","creditMark":64,"regTime":1507567070,"status":0,"regType":4,"flag":1,"gender":0,"regChannel":1,"uiId":5,"gcId":880,"gpvId":145,"districtId":822,"location":{"lat":39.916670000000003,"lon":116.41667}},{"username":"liangxinyi7956893","realname":"\u6881\u65b0\u5b9c7956893","email":"7956893@qq.com","mobile":"13587956893","creditMark":64,"regTime":1507567070,"status":2,"regType":1,"flag":1,"gender":1,"regChannel":1,"uiId":8,"gcId":40,"gpvId":285,"districtId":455,"location":{"lat":39.916670000000003,"lon":116.41667}}],"facetData":{"gpvId":{"145":1,"227":1,"231":1,"284":1,"285":1,"423":1,"442":1,"657":1,"702":1,"935":1},"uiId":{"8":3,"1":2,"5":2,"4":1,"7":1,"10":1}}})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function searchUser(array $param): array
    {
        return EellyClient::request('elastic/user', __FUNCTION__, true, $param);
    }

    /**
     * 检索会员信息.
     *
     * @param array $param 会员检索数组参数
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return array 会员检索返回结果
     * @requestExample({"core":"user","sArray":[{"field":"realname","keyword":"\u6881\u65b0\u5b9c"},{"field":"email","keyword":"qq.com"}],"sortArray":{"regTime":"desc"},"locationSearch":{"field":"local","lat":39.909999999999997,"lon":116.41667,"distance":1000},"sRows":80,"sStart":0,"fArray":{"status":1},"spWord":"1","facets":["uiId","gpvId"],"query":"gender:2","clear":1})
     * @returnExample({"numFound":10,"docs":[{"username":"liangxinyi8525917","realname":"\u6881\u65b0\u5b9c8525917","email":"8525917@qq.com","mobile":"13588525917","creditMark":32,"regTime":1507567070,"status":1,"regType":4,"flag":1,"gender":2,"regChannel":1,"uiId":8,"gcId":852,"gpvId":231,"districtId":241,"location":{"lat":39.916670000000003,"lon":116.41667}},{"username":"liangxinyi8793129","realname":"\u6881\u65b0\u5b9c8793129","email":"8793129@qq.com","mobile":"13588793129","creditMark":64,"regTime":1507567070,"status":0,"regType":4,"flag":1,"gender":0,"regChannel":1,"uiId":5,"gcId":880,"gpvId":145,"districtId":822,"location":{"lat":39.916670000000003,"lon":116.41667}},{"username":"liangxinyi7956893","realname":"\u6881\u65b0\u5b9c7956893","email":"7956893@qq.com","mobile":"13587956893","creditMark":64,"regTime":1507567070,"status":2,"regType":1,"flag":1,"gender":1,"regChannel":1,"uiId":8,"gcId":40,"gpvId":285,"districtId":455,"location":{"lat":39.916670000000003,"lon":116.41667}}],"facetData":{"gpvId":{"145":1,"227":1,"231":1,"284":1,"285":1,"423":1,"442":1,"657":1,"702":1,"935":1},"uiId":{"8":3,"1":2,"5":2,"4":1,"7":1,"10":1}}})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function searchUserAsync(array $param)
    {
        return EellyClient::request('elastic/user', __FUNCTION__, false, $param);
    }

    /**
     * 添加用户索引信息.
     *
     * @param array $users             二维会员信息数组
     * @param int   $users[]['userId'] 会员索引id,其他字段请参考配置文件
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return bool 返回bool值
     * @requestExample()
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function putUser(array $users): bool
    {
        return EellyClient::request('elastic/user', __FUNCTION__, true, $users);
    }

    /**
     * 添加用户索引信息.
     *
     * @param array $users             二维会员信息数组
     * @param int   $users[]['userId'] 会员索引id,其他字段请参考配置文件
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return bool 返回bool值
     * @requestExample()
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function putUserAsync(array $users)
    {
        return EellyClient::request('elastic/user', __FUNCTION__, false, $users);
    }

    /**
     * 创建用户索引类型mapping映射.
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return bool 返回bool结果
     * @requestExample()
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-09
     */
    public function createUserType(): bool
    {
        return EellyClient::request('elastic/user', __FUNCTION__, true);
    }

    /**
     * 创建用户索引类型mapping映射.
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return bool 返回bool结果
     * @requestExample()
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-09
     */
    public function createUserTypeAsync()
    {
        return EellyClient::request('elastic/user', __FUNCTION__, false);
    }

    /**
     * 根据userId删除用户索引信息.
     *
     * @param array $userIds 用户userId
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return bool 返回bool结果
     * @requestExample({"userIds":[1,2,3]})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function deleteUser(array $userIds): bool
    {
        return EellyClient::request('elastic/user', __FUNCTION__, true, $userIds);
    }

    /**
     * 根据userId删除用户索引信息.
     *
     * @param array $userIds 用户userId
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return bool 返回bool结果
     * @requestExample({"userIds":[1,2,3]})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function deleteUserAsync(array $userIds)
    {
        return EellyClient::request('elastic/user', __FUNCTION__, false, $userIds);
    }

    /**
     * 清空会员索引的所有数据.
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return bool 返回bool值
     * @requestExample()
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function clearUser(): bool
    {
        return EellyClient::request('elastic/user', __FUNCTION__, true);
    }

    /**
     * 清空会员索引的所有数据.
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return bool 返回bool值
     * @requestExample()
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function clearUserAsync()
    {
        return EellyClient::request('elastic/user', __FUNCTION__, false);
    }

    /**
     * 更新会员索引信息--可局部更新.
     *
     * @param array $docs             二维会员信息数组
     * @param int   $docs[]['userId'] 会员索引id,必须
     * @param array $docs[]['doc']    会员索引需更新信息,必须，内部参数可参照会员索引字段
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return bool 返回bool值
     * @requestExample({"docs":[{"id":1,"doc":{"username":"梁新宜"}},{"id":2,"doc":{"username":"liangxinyi"}}]})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function updateUser(array $docs): bool
    {
        return EellyClient::request('elastic/user', __FUNCTION__, true, $docs);
    }

    /**
     * 更新会员索引信息--可局部更新.
     *
     * @param array $docs             二维会员信息数组
     * @param int   $docs[]['userId'] 会员索引id,必须
     * @param array $docs[]['doc']    会员索引需更新信息,必须，内部参数可参照会员索引字段
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return bool 返回bool值
     * @requestExample({"docs":[{"id":1,"doc":{"username":"梁新宜"}},{"id":2,"doc":{"username":"liangxinyi"}}]})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function updateUserAsync(array $docs)
    {
        return EellyClient::request('elastic/user', __FUNCTION__, false, $docs);
    }

    /**
     * 初始化会员索引--加载数据存储.
     * php-fpm下运行的是单进程初始化，cli下运营的是多进程初始化.
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return bool 返回bool值
     * @requestExample({"docs":[{"id":1,"doc":{"username":"梁新宜"}},{"id":2,"doc":{"username":"liangxinyi"}}]})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function initUser()
    {
        return EellyClient::request('elastic/user', __FUNCTION__, true);
    }

    /**
     * 初始化会员索引--加载数据存储.
     * php-fpm下运行的是单进程初始化，cli下运营的是多进程初始化.
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return bool 返回bool值
     * @requestExample({"docs":[{"id":1,"doc":{"username":"梁新宜"}},{"id":2,"doc":{"username":"liangxinyi"}}]})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function initUserAsync()
    {
        return EellyClient::request('elastic/user', __FUNCTION__, false);
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