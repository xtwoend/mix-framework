<?php

namespace Mix;

use Hyperf\Contract\ApplicationInterface;

class Application
{
    public $app;
    protected $basePath;

    /**
     * Constract
     *
     * @param [type] $dependencies
     * @param boolean $autoload
     */
    public function __construct($basePath)
    {
        $this->basePath = $basePath;
        $this->createApp();
    }

    public function createApp()
    {
        $container = $this->basePath . '/config/container.php';
        $this->app = $container->get(ApplicationInterface::class);
    }
    
    /**
     * Undocumented function
     *
     * @return ApplicationInterface
     */
    public function run(): ApplicationInterface
    {
        return $this->app->run();
    }
}
