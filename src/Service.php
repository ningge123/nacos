<?php

declare(strict_types=1);

namespace Cocoyo\Nacos;

class Service extends Client implements ServiceInterface
{
    public function register(array $options)
    {
        $params = [
            'query' => $this->resolveOptions($options, ['serviceName', 'groupName', 'namespaceId', 'protectThreshold', 'metadata', 'selector'])
        ];

        return $this->request('POST', '/nacos/v1/ns/service', $params);
    }

    public function update(array $options)
    {
        $params = [
            'query' => $this->resolveOptions($options, ['serviceName', 'groupName', 'namespaceId', 'protectThreshold', 'metadata', 'selector'])
        ];

        return $this->request('PUT', '/nacos/v1/ns/service', $params);
    }

    public function list(array $options)
    {
        $params = [
            'query' => $this->resolveOptions($options, ['pageNo', 'groupName', 'namespaceId', 'pageSize'])
        ];

        return $this->request('GET', '/nacos/v1/ns/service/list', $params);
    }

    public function detail(array $options)
    {
        $params = [
            'query' => $this->resolveOptions($options, ['serviceName', 'groupName', 'namespaceId'])
        ];

        return $this->request('GET', '/nacos/v1/ns/service', $params);
    }

    public function delete(array $options)
    {
        $params = [
            'query' => $this->resolveOptions($options, ['serviceName', 'groupName', 'namespaceId'])
        ];

        return $this->request('DELETE', '/nacos/v1/ns/service', $params);
    }
}