<?php namespace unit\providers;

include __DIR__ . '/../../../app/providers/ConfigProvider.php';

use PHPUnit\Framework\TestCase;
use testA\providers\ConfigProvider;
use Phalcon\Di\ServiceProviderInterface;

class ConfigProviderTest extends TestCase
{
    public function testImplementation(): void
    {
        $class = $this->createMock(ConfigProvider::class);

        $this->assertInstanceOf(ServiceProviderInterface::class, $class);
    }
}
