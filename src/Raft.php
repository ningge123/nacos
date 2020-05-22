<?php

declare(strict_types=1);

namespace Cocoyo\Nacos;

class Raft extends Client implements RaftInterface
{
    public function leader()
    {
        return $this->request('GET', '/nacos/v1/ns/raft/leader');
    }
}