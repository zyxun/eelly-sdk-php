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

namespace Eelly\SDK\Elastic\Service;

/**
 * Elastic查询店铺接口.
 *
 * @author liangxinyi<liangxinyi@eelly.net>
 */
interface StoreInterface
{
    /**
     * 检索店铺信息.
     *
     * @param array $param 店铺检索数组参数
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return array 店铺检索返回结果
     * @requestExample({"core":"store","sArray":[{"field":"realname","keyword":"\u6881\u65b0\u5b9c"},{"field":"email","keyword":"qq.com"}],"sortArray":{"regTime":"desc"},"locationSearch":{"field":"local","lat":39.909999999999997,"lon":116.41667,"distance":1000},"sRows":80,"sStart":0,"fArray":{"status":1},"spWord":"1","facets":["uiId","gpvId"],"query":"gender:2","clear":1})
     * @returnExample({"numFound":10,"docs":[{"storename":"liangxinyi8525917","realname":"\u6881\u65b0\u5b9c8525917","email":"8525917@qq.com","mobile":"13588525917","creditMark":32,"regTime":1507567070,"status":1,"regType":4,"flag":1,"gender":2,"regChannel":1,"uiId":8,"gcId":852,"gpvId":231,"districtId":241,"location":{"lat":39.916670000000003,"lon":116.41667}},{"storename":"liangxinyi8793129","realname":"\u6881\u65b0\u5b9c8793129","email":"8793129@qq.com","mobile":"13588793129","creditMark":64,"regTime":1507567070,"status":0,"regType":4,"flag":1,"gender":0,"regChannel":1,"uiId":5,"gcId":880,"gpvId":145,"districtId":822,"location":{"lat":39.916670000000003,"lon":116.41667}},{"storename":"liangxinyi7956893","realname":"\u6881\u65b0\u5b9c7956893","email":"7956893@qq.com","mobile":"13587956893","creditMark":64,"regTime":1507567070,"status":2,"regType":1,"flag":1,"gender":1,"regChannel":1,"uiId":8,"gcId":40,"gpvId":285,"districtId":455,"location":{"lat":39.916670000000003,"lon":116.41667}}],"facetData":{"gpvId":{"145":1,"227":1,"231":1,"284":1,"285":1,"423":1,"442":1,"657":1,"702":1,"935":1},"uiId":{"8":3,"1":2,"5":2,"4":1,"7":1,"10":1}}})
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function searchStore(array $param): array;

    /**
     * 添加店铺索引信息.
     *
     * @param array $stores              二维店铺信息数组
     * @param int   $stores[]['storeId'] 索引id,其他字段请参考配置文件
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
    public function putStore(array $stores): bool;

    /**
     * 创建店铺索引类型mapping映射.
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
    public function createStoreType(): bool;

    /**
     * 根据storeId删除店铺索引信息.
     *
     * @param array $storeIds 店铺storeId
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return bool 返回bool结果
     * @requestExample({"storeIds":[1,2,3]})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function deleteStore(array $storeIds): bool;

    /**
     * 清空店铺索引的所有数据.
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
    public function clearStore(): bool;

    /**
     * 更新店铺索引信息--可局部更新.
     *
     * @param array $docs              二维店铺信息数组
     * @param int   $docs[]['storeId'] 店铺索引id,必须,其他字段参考配置
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return bool 返回bool值
     * @requestExample({"docs":[{"id":1,"storename":"梁新宜"},{"id":2,"storename":"liangxinyi"}]})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function updateStore(array $docs): bool;

    /**
     * 初始化店铺索引--加载数据存储.
     * php-fpm下运行的是单进程初始化，cli下运营的是多进程初始化.
     *
     * @throws \Eelly\SDK\Elastic\Exception\ElasticException
     *
     * @return bool 返回bool值
     * @requestExample({"docs":[{"id":1,"doc":{"storename":"梁新宜"}},{"id":2,"doc":{"storename":"liangxinyi"}}]})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-10-10
     */
    public function initStore();
}
