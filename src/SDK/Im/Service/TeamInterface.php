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

namespace Eelly\SDK\Im\Service;

/**
 * IM群主接口层
 *
 */
interface TeamInterface
{
    /**
     * 获取主播粉丝群列表信息
     * 
     * ###返回数据说明
     *
     * 字段|类型|说明
     * --------|-------|--------------
     * totalMember | int | 已进群人数
     * teams | array | 群列表
     * teams[]['tid'] | int | 群id
     * teams[]['logo'] | string | 群头像
     * teams[]['title'] | string | 标题
     * teams[]['subTitle'] | string | 进群条件
     * teams[]['status'] | int | 状态: 0:未进群 1:已进群 2:人满
     * 
     * @param int $storeId 店铺id
     * @param int $page 分页
     * @param int $limit 每页显示数量, 默认20
     * @param UidDTO|null $uidDTO  登录用户
     * 
     * @returnExample({"totalMember":0,"teams":[{"tid":"123","logo":"https:\/\/img09.eelly.com","title":"bobo1972-官方直播①群","subTitle":"潜规则","status":0}]})
     * 
     * @author wechan
     * @since 2019年04月18日
     */
    public function getFansGroup(int $storeId, int $page = 1, int $limit = 20, UidDTO $uidDTO = null): array;
    
        
    /**
     * 买家进群事件
     * 
     * @param int $tid 群id
     * @param UidDTO $uidDTO 用户登录信息
     * 
     * @returnExample({"result":1})
     * 
     * 字段|类型|说明
     * --------|-------|--------------
     * result | int | 结果: 1.成功 0.失败
     * 
     * @author wechan
     * @since 2019年04月19日
     */
    public function buyerJoinGroup(int $tid ,UidDTO $uidDTO = null): array;

    /**
     * 账号拥有的群个数
     * @internal
     *
     * @param int $userId
     * @param int $type
     * @return int
     *
     * @author zhangyangxun
     * @since 2019-04-23
     */
    public function getTeamNumOwnedInternal(int $userId, int $type): int;
    
    
    /**
     * 买家进群事件
     *
     * @param int $tid 群id
     * @param int $userId 用户id
     * @param int $itmId IM群成员ID
     * 
     * @returnExample({"result":1})
     * 
     * 字段|类型|说明
     * --------|-------|--------------
     * result | int | 结果: 1.成功 0.失败
     *
     * @author wechan
     * @since 2019年05月06日
     */
    public function afterBuyerJoin(int $tid , int $userId, int $itmId): array;

    /**
     * 获取店铺激活群数量
     *
     * @param integer $storeId 店铺id
     * @return integer
     * @internal
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.6.17
     */
    public function getStoreActivationTeam(int $storeId):int;
}