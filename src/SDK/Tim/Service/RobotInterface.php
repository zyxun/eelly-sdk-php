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
 * 机器人相关接口
 *
 * @author sunanzhi <sunanzhi@hotmail.com>
 */
interface RobotInterface
{
    /**
     * 添加机器人 此接口为批量添加机器人，谨慎使用
     *
     * @return boolean
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.20
     */
    public function add():bool;

    /**
     * 更新机器人角色
     *
     * @param array $extend 拓展业务
     * @return void
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.21
     */
    public function setRobotRole(array $extend = []):void;

    /**
     * 获取机器人数据
     *
     * @param array $extend 拓展使用
     * @return array
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.21
     */
    public function getRobot(array $extend = []):array;

    /**
     * 更新机器人数据
     *
     * @param array $accounts 账号
     * @param array $updateField 更新字段
     * @param array $extend 拓展
     * @return boolean
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.21
     */
    public function updateRobot(array $accounts, array $updateField, array $extend = []):bool;
}