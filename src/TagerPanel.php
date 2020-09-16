<?php

namespace OZiTAG\Tager\Backend\Panel;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use OZiTAG\Tager\Backend\Panel\Contracts\IRouteHandler;
use OZiTAG\Tager\Backend\Panel\Structures\TagerRouteHandler;

class TagerPanel
{
    /** @var TagerRouteHandler[] */
    private static $routeHandlers = [];

    /**
     * @return TagerRouteHandler[]
     */
    public static function getRouteHandlers()
    {
        return self::$routeHandlers;
    }

    public static function registerRouteHandler($routeRegex, IRouteHandler $hanlder)
    {
        self::$routeHandlers[] = new TagerRouteHandler($routeRegex, $hanlder);
    }
}
