<?php

declare(strict_types=1);

namespace Cocoyo\Nacos;

interface ServiceInterface
{
    /**
     * 创建服务
     * @param array $options
     * @return mixed
     */
    public function register(array $options);

    /**
     * 修改服务
     * @param array $options
     * @return mixed
     */
    public function update(array $options);

    /**
     * 查询服务列表
     * @param array $options
     * @return mixed
     */
    public function list(array $options);

    /**
     * 查询服务
     * @param array $options
     * @return mixed
     */
    public function detail(array $options);

    /**
     * 删除服务
     * @param array $options
     * @return mixed
     */
    public function delete(array $options);
}