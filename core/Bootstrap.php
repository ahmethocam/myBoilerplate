<?php


namespace Core;


class Bootstrap
{
    public $router;

    public function __construct()
    {
        $this->router = new \Buki\Router\Router(
            [
                'paths' => [
                    'controllers' => 'app/controllers',
                    'middlewares' => 'app/middlewares',
                ],
                'namespaces' => [
                    'controllers' => 'App\Controllers',
                    'middlewares' => 'App\Middlewares',
                ]
            ]);
    }

    public function __destruct()
    {
        $this->router->run();
    }
}