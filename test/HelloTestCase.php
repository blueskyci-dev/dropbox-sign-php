<?php

namespace HelloSignSDK\Test;

use GuzzleHttp;
use GuzzleHttp\Handler;
use GuzzleHttp\Psr7;
use HelloSignSDK\Configuration;
use PHPUnit\Framework\TestCase;

abstract class HelloTestCase extends TestCase
{
    public const ROOT_FILE_PATH = __DIR__ . '/fixtures';

    /** @var GuzzleHttp\Client */
    protected $client;

    /** @var Handler\MockHandler */
    protected $handler;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $config = new Configuration();
        $config->setUsername('YOUR_API_KEY')
            ->setRootFilePath(self::ROOT_FILE_PATH);

        Configuration::setDefaultConfiguration($config);
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->handler = new Handler\MockHandler();
    }

    protected function setExpectedResponse(array $data): void
    {
        $this->handler->append(
            new Psr7\Response(200, [], json_encode($data)),
        );
    }
}
