<?php

declare(strict_types=1);

namespace Cocoyo\Nacos;

/**
 * @link https://nacos.io/zh-cn/docs/open-api.html
 */
interface ConfigInterface
{
    /**
     * 获取配置
     * @param array $options
     * @return NacosResponse
     */
    public function show(array $options) : NacosResponse;

    /**
     * 发布配置
     * @param array $options
     * @return NacosResponse
     */
    public function publish(array $options) : NacosResponse;

    /**
     * 删除配置
     * @param array $options
     * @return NacosResponse
     */
    public function delete(array $options) : NacosResponse;
}