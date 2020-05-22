<?php

declare(strict_types=1);

namespace HyperfTest\Cases;

use Cocoyo\Nacos\Config;
use Cocoyo\Nacos\Instance;
use Hyperf\Guzzle\ClientFactory;
use Hyperf\Utils\ApplicationContext;

class InstanceTest extends AbstractTestCase
{
    const DEFAULT_URI = 'http://fas-config-dev.hqygou.com';

    public function testRegister()
    {
        $clientFactory = ApplicationContext::getContainer()->get(ClientFactory::class);

        $instance = new Instance(function () use ($clientFactory) {
            return $clientFactory->create([
                'base_uri' => self::DEFAULT_URI
            ]);
        });

        $response = $instance->register([
            'ip' => '192.168.10.10',
            'port' => '9501',
            'serviceName' => 'cocoyo-service',
        ]);

        $this->assertSame($response->getStatusCode(), 200);
        $this->assertIsString($response->getBody()->getContents());

        var_dump($response->getBody()->getContents());
    }

    public function testLogout()
    {
        $clientFactory = ApplicationContext::getContainer()->get(ClientFactory::class);

        $instance = new Instance(function () use ($clientFactory) {
            return $clientFactory->create([
                'base_uri' => self::DEFAULT_URI
            ]);
        });

        $response = $instance->logout([
            'ip' => '192.168.10.10',
            'port' => '9501',
            'serviceName' => 'cocoyo-service',
        ]);

        $this->assertSame($response->getStatusCode(), 200);
        $this->assertIsString($response->getBody()->getContents());
    }

    public function testUpdate()
    {
        $clientFactory = ApplicationContext::getContainer()->get(ClientFactory::class);

        $instance = new Instance(function () use ($clientFactory) {
            return $clientFactory->create([
                'base_uri' => self::DEFAULT_URI
            ]);
        });

        $response = $instance->update([
            'ip' => '192.168.10.10',
            'port' => '9501',
            'serviceName' => 'cocoyo-service',
        ]);

        $this->assertSame($response->getStatusCode(), 200);
        $this->assertIsString($response->getBody()->getContents());
        var_dump($response->getBody()->getContents());
    }

    public function testHeartbeat()
    {
        $clientFactory = ApplicationContext::getContainer()->get(ClientFactory::class);

        $instance = new Instance(function () use ($clientFactory) {
            return $clientFactory->create([
                'base_uri' => self::DEFAULT_URI
            ]);
        });

        $response = $instance->heartbeat([
            'serviceName' => 'cocoyo-service',
            'beat'        => '{"hello" : "asda"}'
        ]);

        $this->assertSame($response->getStatusCode(), 200);
        $this->assertIsString($response->getBody()->getContents());
        var_dump($response->getBody()->getContents());
    }
}
