<?php

namespace OZiTAG\Tager\Backend\Panel;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\App;
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
        $routeHandlers = self::$routeHandlers;

        usort($routeHandlers, function ($a, $b) {
            return strlen($a->getRegex()) < strlen($b->getRegex()) ? 1 : -1;
        });

        return $routeHandlers;
    }

    public static function registerRouteHandler($routeRegex, $handlerClassName)
    {
        $handlerClass = App::make($handlerClassName);
        if (!$handlerClass instanceof IRouteHandler) {
            throw new \Exception('handlerClass must implements IRouteHandler contract');
        }

        self::$routeHandlers[] = new TagerRouteHandler($routeRegex, $handlerClass);
    }
}
