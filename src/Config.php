<?php

declare(strict_types=1);

namespace Cocoyo\Nacos;

class Config extends Client implements ConfigInterface
{
    public function show(array $options): NacosResponse
    {
        $params = [
            'query' => $this->resolveOptions($options, ['dataId', 'group', 'tenant'])
        ];

        return $this->request('GET', '/nacos/v1/cs/configs', $params);
    }

    public function publish(array $options): NacosResponse
    {
        $params = [
            'form_params' => $this->resolveOptions($options, ['dataId', 'group', 'content', 'tenant', 'type'])
        ];

        return $this->request('POST', '/nacos/v1/cs/configs', $params);
    }

    public function delete(array $options): NacosResponse
    {
        $params = [
            'query' => $this->resolveOptions($options, ['dataId', 'group', 'tenant'])
        ];

        return $this->request('DELETE', '/nacos/v1/cs/configs', $params);
    }
}