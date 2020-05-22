# Nacos 协程客户端

Nacos服务管理平台 hyperf 框架 SDK

# 安装

```
composer require cocoyo/nacos
```

# 使用

* 获取对应 nacos 客户端：

```php
use Cocoyo\Nacos\Config;
use Hyperf\Guzzle\ClientFactory;
use Hyperf\Utils\ApplicationContext;

$container = ApplicationContext::getContainer();
$clientFactory = $container->get(ClientFactory::class);

$consulServer = 'http://127.0.0.1:8848';
$config = new Config(function () use ($clientFactory, $consulServer) {
    return $clientFactory->create([
        'base_uri' => $consulServer,
    ]);
});

$config->publish($options);

```

更多示例请查看单元测试
