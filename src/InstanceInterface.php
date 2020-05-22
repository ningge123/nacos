<?php

declare(strict_types=1);

namespace Cocoyo\Nacos;

/**
 * @link https://nacos.io/zh-cn/docs/open-api.html
 */
interface InstanceInterface
{
    public function register(array $options) : NacosResponse;

    public function logout(array $options) : NacosResponse;

    public function update(array $options) : NacosResponse;

    public function list(array $options) : NacosResponse;

    public function detail(array $options) : NacosResponse;

    public function heartbeat(array $options) : NacosResponse;

    public function health(array $options) : NacosResponse;
}