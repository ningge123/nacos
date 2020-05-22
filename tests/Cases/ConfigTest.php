<?php

declare(strict_types=1);

namespace HyperfTest\Cases;

use Cocoyo\Nacos\Config;
use Hyperf\Guzzle\ClientFactory;
use Hyperf\Utils\ApplicationContext;

class ConfigTest extends AbstractTestCase
{
    const DEFAULT_URI = 'http://fas-config-dev.hqygou.com';

    public function testLists()
    {
        $clientFactory = ApplicationContext::getContainer()->get(ClientFactory::class);

        $config = new Config(function () use ($clientFactory) {
            return $clientFactory->create([
                'base_uri' => self::DEFAULT_URI
            ]);
        });

        $response = $config->show(['dataId' => 'db-1', 'group' => 'config-common']);

        $this->assertSame($response->getStatusCode(), 200);
        $this->assertIsString($response->getBody()->getContents());
    }

    public function testPublish()
    {
        $clientFactory = ApplicationContext::getContainer()->get(ClientFactory::class);

        $config = new Config(function () use ($clientFactory) {
            return $clientFactory->create([
                'base_uri' => self::DEFAULT_URI
            ]);
        });

        $response = $config->publish(['dataId' => 'test-cocoyo', 'group' => 'config-common', 'content' => '{"test":"cocoyo"}']);

        $this->assertSame($response->getStatusCode(), 200);
        $this->assertIsString($response->getBody()->getContents());
    }

    public function testDelete()
    {
        $clientFactory = ApplicationContext::getContainer()->get(ClientFactory::class);

        $config = new Config(function () use ($clientFactory) {
            return $clientFactory->create([
                'base_uri' => self::DEFAULT_URI
            ]);
        });

        $response = $config->delete(['dataId' => 'test-cocoyo', 'group' => 'config-common']);

        $this->assertSame($response->getStatusCode(), 200);
        $this->assertIsString($response->getBody()->getContents());
    }
}
