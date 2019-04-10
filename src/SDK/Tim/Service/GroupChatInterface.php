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

namespace Eelly\SDK\Tim\Service;

/**
 * 群组聊天
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface GroupChatInterface
{
    /**
     * 腾讯云直播间聊天室发送弹幕消息
     *
     * @param integer $userId 用户id
     * @param integer $liveId 直播间id
     * @param integer $type 类型
     * @param array $replaceData 替换的数据
     * @param array $extend 拓展数据
     * @return boolean
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.13
     */
    public function timSendBarrage(int $userId, int $liveId, int $type, array $replaceData = [], array $extend = []):bool;

    /**
     * 创建群聊
     *
     * @param string $ownerAccount 群主
     * @param string $type 群类型 私人 private 公开 public 聊天室 chatRoom 音视频聊天室 avChatRoom 在线成员广播大群 bChatRoom
     * @param string $name 群名
     * @param array $memberList 群成员
     * @param array $extend 拓展数据 例如 extend['groupId']
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.26
     * 
     * @see https://cloud.tencent.com/document/product/269/1615
     */
    public function createGroup(string $ownerAccount, string $type, string $name, array $memberList = [], array $extend = []):array;

    /**
     * 添加群组成员
     *
     * @param string $groupId 群组id
     * @param array $memberList 群组成员 
     * @param integer $silence 是否静默加人。0：非静默加人；1：静默加人。不填该字段默认为 0
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.27
     * 
     * @see https://cloud.tencent.com/document/product/269/1621
     */
    public function addGroupMember(string $groupId, array $memberList, int $silence = 0):array;

    /**
     * 删除群组成员
     * 
     * @param string $groupId 群组id
     * @param array $memberList 群组成员 一维数组
     * @param integer $silence 是否静默加人。0：非静默加人；1：静默加人。不填该字段默认为 0
     * @param string $reason 删除理由
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.2.27
     * 
     * @see https://cloud.tencent.com/document/product/269/1622
     */
    public function deleteGroupMember(string $groupId, array $memberList, int $silence = 0, string $reason = ''):array;

    /**
     * 群发消息 兼容组合消息
     * 
     * > extend 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * msgBodyData | array | 消息内容
     * offlinePushInfo | array | 离线推送配置
     * fromAccount | string | 推送消息的来源账号
     * msgPriority | string | 消息优先级 High, Normal, Low, Lowest
     * 
     * > msgBodyData 数据说明
     * 
     * key | type | value
     * --- | ---- | ----
     * msgType | strting | 消息类型 text:文本消息 face:表情消息 location:地理位置 custom:自定义消息 sound:语音消息 image:图片消息 file:文件消息
     * msgContent | array | 消息内容 因不同类型体不同字段
     *
     * @param string $groupId 群主id
     * @param array $extend 拓展使用
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.13
     * 
     * @see https://cloud.tencent.com/document/product/269/2720#814046013
     */
    public function sendGroupMsg(string $groupId, array $extend):array;

    /**
     * 获取群信息
     *
     * @param array $groupIds 批量群组ids
     * @param array $extend 拓展
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.13
     * 
     * @see https://cloud.tencent.com/document/product/269/1616
     */
    public function getGroupInfo(array $groupIds, array $extend = []):array;

    /**
     * 获取群组成员信息
     *
     * @param string $groupId 群id
     * @param array $memberInfoFilter 成员字段信息 默认成员全部资料
     * @param array $memberRoleFilter 角色过滤 Owner Admin Member
     * @param array $appDefineDataFilter 维度
     * @param array $extend 拓展信息 例如limit offset
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.21
     * 
     * @see https://cloud.tencent.com/document/product/269/1617
     */
    public function getGroupMemberInfo(string $groupId, array $memberInfoFilter = [], array $memberRoleFilter = [], array $appDefineDataFilter = [], array $extend = []):array;

    /**
     * 群组禁言 解禁
     *
     * @param string $groupId 群id
     * @param array $identifiers 批量禁言的账号
     * @param integer $expire 默认禁言时长60秒 0 为取消禁言
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.13
     * 
     * @see https://cloud.tencent.com/document/product/269/1627
     */
    public function forbidSendMsg(string $groupId, array $identifiers, int $expire = 60):array;

    /**
     * 群聊发送系统通知
     *
     * @param string $groupId 群组id
     * @param string $content 通知内容
     * @param array $extend 拓展信息
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.13
     * 
     * @see https://cloud.tencent.com/document/product/269/1630
     */
    public function sendGroupSystemNorification(string $groupId, string $content, array $extend = []):array;

    /**
     * 获取群漫游信息
     *
     * @param string $groupId 群id
     * @param integer $limit 限制条数
     * @param array $extend 拓展
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.15
     * 
     * @see https://cloud.tencent.com/document/product/269/2738
     */
    public function groupMsgGetSimple(string $groupId, int $limit = 10, array $extend = []):array;

    /**
     * 解散群组
     *
     * @param string $groupId
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.21
     * 
     * @see https://cloud.tencent.com/document/product/269/1624
     */
    public function destroyGroup(string $groupId):bool;

    /**
     * 通过店铺id发送直播间弹幕和消息.
     *
     * @param int $fromUserId 发送消息用户id
     * @param int $storeId    店铺id
     * @param int $type       消息类型
     *
     * @return bool
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.4.3
     */
    public function sendBarrageByStoreId(int $fromUserId, int $storeId, int $type): bool;

    /**
     * 获取群组被禁言用户列表
     *
     * @param string $groupId 群id
     * @return array
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.4.10
     */
    public function getGroupShuttedUin(string $groupId):array;
}