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
use Eelly\SDK\Elastic\Service\SearchInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Search implements SearchInterface
{
    /**
     * 搜索引擎搜索.
     *
     * @param array $searchParam 检索参数
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return array 返回结果
     * @requestExample({"searchParam":{"core":"user","sArray":[{"field":"realname","keyword":"\u6881\u65b0\u5b9c"},{"field":"email","keyword":"qq.com"}],"sortArray":{"regTime":"desc"},"locationSearch":{"field":"local","lat":39.909999999999997,"lon":116.41667,"distance":1000},"sRows":80,"sStart":0,"fArray":{"status":1},"spWord":"1","facets":["uiId","gpvId"],"query":"gender:2","clear":1}})
     * @returnExample({"numFound":10,"docs":[{"username":"liangxinyi8525917","realname":"\u6881\u65b0\u5b9c8525917","email":"8525917@qq.com","mobile":"13588525917","creditMark":32,"regTime":1507567070,"status":1,"regType":4,"flag":1,"gender":2,"regChannel":1,"uiId":8,"gcId":852,"gpvId":231,"districtId":241,"location":{"lat":39.916670000000003,"lon":116.41667}},{"username":"liangxinyi8793129","realname":"\u6881\u65b0\u5b9c8793129","email":"8793129@qq.com","mobile":"13588793129","creditMark":64,"regTime":1507567070,"status":0,"regType":4,"flag":1,"gender":0,"regChannel":1,"uiId":5,"gcId":880,"gpvId":145,"districtId":822,"location":{"lat":39.916670000000003,"lon":116.41667}},{"username":"liangxinyi7956893","realname":"\u6881\u65b0\u5b9c7956893","email":"7956893@qq.com","mobile":"13587956893","creditMark":64,"regTime":1507567070,"status":2,"regType":1,"flag":1,"gender":1,"regChannel":1,"uiId":8,"gcId":40,"gpvId":285,"districtId":455,"location":{"lat":39.916670000000003,"lon":116.41667}}],"facetData":{"gpvId":{"145":1,"227":1,"231":1,"284":1,"285":1,"423":1,"442":1,"657":1,"702":1,"935":1},"uiId":{"8":3,"1":2,"5":2,"4":1,"7":1,"10":1}}})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-12
     */
    public function search(array $searchParam): array
    {
        return EellyClient::request('elastic/search', __FUNCTION__, true, $searchParam);
    }

    /**
     * 搜索引擎搜索.
     *
     * @param array $searchParam 检索参数
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return array 返回结果
     * @requestExample({"searchParam":{"core":"user","sArray":[{"field":"realname","keyword":"\u6881\u65b0\u5b9c"},{"field":"email","keyword":"qq.com"}],"sortArray":{"regTime":"desc"},"locationSearch":{"field":"local","lat":39.909999999999997,"lon":116.41667,"distance":1000},"sRows":80,"sStart":0,"fArray":{"status":1},"spWord":"1","facets":["uiId","gpvId"],"query":"gender:2","clear":1}})
     * @returnExample({"numFound":10,"docs":[{"username":"liangxinyi8525917","realname":"\u6881\u65b0\u5b9c8525917","email":"8525917@qq.com","mobile":"13588525917","creditMark":32,"regTime":1507567070,"status":1,"regType":4,"flag":1,"gender":2,"regChannel":1,"uiId":8,"gcId":852,"gpvId":231,"districtId":241,"location":{"lat":39.916670000000003,"lon":116.41667}},{"username":"liangxinyi8793129","realname":"\u6881\u65b0\u5b9c8793129","email":"8793129@qq.com","mobile":"13588793129","creditMark":64,"regTime":1507567070,"status":0,"regType":4,"flag":1,"gender":0,"regChannel":1,"uiId":5,"gcId":880,"gpvId":145,"districtId":822,"location":{"lat":39.916670000000003,"lon":116.41667}},{"username":"liangxinyi7956893","realname":"\u6881\u65b0\u5b9c7956893","email":"7956893@qq.com","mobile":"13587956893","creditMark":64,"regTime":1507567070,"status":2,"regType":1,"flag":1,"gender":1,"regChannel":1,"uiId":8,"gcId":40,"gpvId":285,"districtId":455,"location":{"lat":39.916670000000003,"lon":116.41667}}],"facetData":{"gpvId":{"145":1,"227":1,"231":1,"284":1,"285":1,"423":1,"442":1,"657":1,"702":1,"935":1},"uiId":{"8":3,"1":2,"5":2,"4":1,"7":1,"10":1}}})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-12
     */
    public function searchAsync(array $searchParam)
    {
        return EellyClient::request('elastic/search', __FUNCTION__, false, $searchParam);
    }

    /**
     * 返回分词结果.
     *
     * @param array  $word              分词的数组
     * @param string $word[]['field']   分词的字段
     * @param string $word[]['keyword'] 分词的关键字
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return array 以检索字段为键名返回分词结果
     * @requestExample({"words":[{"field":"realname","keyword":"\u6881\u65b0\u5b9c"},{"field":"email","keyword":"qq.com"}]})
     * @returnExample({"realname":["\u6881","\u65b0","\u5b9c"],"email":["qq.com"]})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-12
     */
    public function getSpWord(array $words): array
    {
        return EellyClient::request('elastic/search', __FUNCTION__, true, $words);
    }

    /**
     * 返回分词结果.
     *
     * @param array  $word              分词的数组
     * @param string $word[]['field']   分词的字段
     * @param string $word[]['keyword'] 分词的关键字
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return array 以检索字段为键名返回分词结果
     * @requestExample({"words":[{"field":"realname","keyword":"\u6881\u65b0\u5b9c"},{"field":"email","keyword":"qq.com"}]})
     * @returnExample({"realname":["\u6881","\u65b0","\u5b9c"],"email":["qq.com"]})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-12
     */
    public function getSpWordAsync(array $words)
    {
        return EellyClient::request('elastic/search', __FUNCTION__, false, $words);
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