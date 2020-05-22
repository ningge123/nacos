<?php

declare(strict_types=1);

namespace Cocoyo\Nacos;

class Opeator extends Client implements OperatorInterface
{
    public function switches(array $options = [])  : NacosResponse
    {
        return $this->request('GET', '/nacos/v1/ns/operator/switches');
    }

    public function updateSwitches(array $options)  : NacosResponse
    {
        $params = [
            'query' => $this->resolveOptions($options, ['entry', 'value', 'debug'])
        ];

        return $this->request('PUT', '/nacos/v1/ns/operator/switches', $params);
    }

    public function metrics(array $options = [])  : NacosResponse
    {
        return $this->request('GET', '/nacos/v1/ns/operator/metrics');
    }

    public function servers(array $options = [])  : NacosResponse
    {
        return $this->request('GET', '/nacos/v1/ns/operator/servers');
    }
}