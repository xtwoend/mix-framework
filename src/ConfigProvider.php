<?php

namespace Mix;

use Mix\ConfigFactory;
use Mix\Command\RoutesCommand;
use Hyperf\Contract\ConfigInterface;
use Mix\Command\VendorPublishCommand;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                // 
            ],
            'commands' => [
                RoutesCommand::class,
                VendorPublishCommand::class
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
        ];
    }
}
