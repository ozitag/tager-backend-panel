<?php

namespace OZiTAG\Tager\Backend\Panel;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use OZiTAG\Tager\Backend\Panel\Contracts\IRouteHandler;

class TagerPanel
{
    private static $routeHandlers = [];

    public static function registerRouteHandler($routeRegex, IRouteHandler $hanlder)
    {
        self::$routeHandlers[] = [
            'regex' => $routeRegex,
            'handler' => $hanlder
        ];
    }
}
