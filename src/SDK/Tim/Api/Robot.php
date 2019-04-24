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

namespace Eelly\SDK\Tim\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Tim\Service\RobotInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Robot
{
    /**
     * 添加机器人 此接口为批量添加机器人，谨慎使用
     *
     * @return boolean
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.20
     */
    public function add(): bool
    {
        return EellyClient::request('tim/robot', 'add', true);
    }

    /**
     * 添加机器人 此接口为批量添加机器人，谨慎使用
     *
     * @return boolean
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.20
     */
    public function addAsync()
    {
        return EellyClient::request('tim/robot', 'add', false);
    }

    /**
     * 更新机器人角色
     *
     * @param array $extend 拓展业务
     * @return boolean
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.21
     */
    public function setRobotRole(array $extend): bool
    {
        return EellyClient::request('tim/robot', 'setRobotRole', true, $extend);
    }

    /**
     * 更新机器人角色
     *
     * @param array $extend 拓展业务
     * @return boolean
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.21
     */
    public function setRobotRoleAsync(array $extend)
    {
        return EellyClient::request('tim/robot', 'setRobotRole', false, $extend);
    }

    /**
     * 获取机器人数据
     *
     * @param array $extend 拓展使用
     * @return array
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.21
     */
    public function getRobot(array $extend): array
    {
        return EellyClient::request('tim/robot', 'getRobot', true, $extend);
    }

    /**
     * 获取机器人数据
     *
     * @param array $extend 拓展使用
     * @return array
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.21
     */
    public function getRobotAsync(array $extend)
    {
        return EellyClient::request('tim/robot', 'getRobot', false, $extend);
    }

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
    public function updateRobot(array $accounts, array $updateField, array $extend = []): bool
    {
        return EellyClient::request('tim/robot', 'updateRobot', true, $accounts, $updateField, $extend);
    }

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
    public function updateRobotAsync(array $accounts, array $updateField, array $extend = [])
    {
        return EellyClient::request('tim/robot', 'updateRobot', false, $accounts, $updateField, $extend);
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