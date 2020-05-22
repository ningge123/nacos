<?php

declare(strict_types=1);

namespace Cocoyo\Nacos;

/**
 * @link https://nacos.io/zh-cn/docs/open-api.html
 */
interface RaftInterface
{
    /**
     * 查看当前集群leader
     * @return mixed
     */
    public function leader();
}