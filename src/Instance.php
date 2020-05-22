<?php

declare(strict_types=1);

namespace Cocoyo\Nacos;

class Instance extends Client implements InstanceInterface
{
    public function register(array $options) : NacosResponse
    {
        $params = [
            'query' => $this->resolveOptions($options, ['ip', 'port', 'namespaceId', 'weight', 'enabled', 'healthy', 'metadata', 'clusterName', 'serviceName', 'groupName', 'ephemeral'])
        ];

        return $this->request('POST', '/nacos/v1/ns/instance', $params);
    }

    public function logout(array $options) : NacosResponse
    {
        $params = [
            'query' => $this->resolveOptions($options, ['serviceName', 'groupName', 'ip', 'port', 'clusterName', 'namespaceId', 'ephemeral'])
        ];

        return $this->request('DELETE', '/nacos/v1/ns/instance', $params);
    }

    public function update(array $options) : NacosResponse
    {
        $params = [
            'query' => $this->resolveOptions($options, ['serviceName', 'groupName', 'ip', 'port', 'clusterName', 'namespaceId', 'weight', 'metadata', 'enabled', 'ephemeral'])
        ];

        return $this->request('PUT', '/nacos/v1/ns/instance', $params);
    }

    public function list(array $options) : NacosResponse
    {
        $params = [
            'query' => $this->resolveOptions($options, ['serviceName', 'groupName', 'namespaceId', 'clusters', 'healthyOnly'])
        ];

        return $this->request('GET', '/nacos/v1/ns/instance/list', $params);
    }

    public function detail(array $options) : NacosResponse
    {
        $params = [
            'query' => $this->resolveOptions($options, ['serviceName', 'groupName', 'ip', 'port', 'namespaceId', 'cluster', 'healthyOnly', 'ephemeral'])
        ];

        return $this->request('GET', '/nacos/v1/ns/instance', $params);
    }

    public function heartbeat(array $options) : NacosResponse
    {
        $params = [
            'query' => $this->resolveOptions($options, ['serviceName', 'groupName', 'ephemeral', 'beat'])
        ];

        return $this->request('PUT', '/nacos/v1/ns/instance/beat', $params);
    }

    public function health(array $options) : NacosResponse
    {
        $params = [
            'query' => $this->resolveOptions($options, ['namespaceId', 'serviceName', 'groupName', 'clusterName', 'ip', 'port', 'healthy'])
        ];

        return $this->request('PUT', '/nacos/v1/ns/health/instance', $params);
    }
}