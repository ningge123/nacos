<?php

declare(strict_types=1);

namespace Cocoyo\Nacos;

/**
 * @link https://nacos.io/zh-cn/docs/open-api.html
 */
interface OperatorInterface
{
    /**
     * 查询系统开关
     * @return mixed
     */
    public function switches() : NacosResponse;

    /**
     * 修改系统开关
     * @param array $options
     * @return mixed
     */
    public function updateSwitches(array $options) : NacosResponse;

    /**
     * 查看系统当前数据指标
     * @return mixed
     */
    public function metrics() : NacosResponse;

    /**
     * 查看当前集群Server列表
     * @param array $options
     * @return mixed
     */
    public function servers(array $options = []) : NacosResponse;
}