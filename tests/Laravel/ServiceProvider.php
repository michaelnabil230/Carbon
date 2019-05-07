<?php
declare(strict_types=1);

namespace Illuminate\Support;

class ServiceProvider
{
    /**
     * @var \App
     */
    public $app;

    public function __construct()
    {
        include_once __DIR__.'/App.php';
        $this->app = new \App();
    }
}
