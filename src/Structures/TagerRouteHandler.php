<?php

namespace OZiTAG\Tager\Backend\Panel\Structures;

use OZiTAG\Tager\Backend\Panel\Contracts\IRouteHandler;

class TagerRouteHandler
{
    private $regex;

    private $routeHandler;

    public function __construct($regex, IRouteHandler $routeHandler)
    {
        $this->regex = $regex;

        $this->routeHandler = $routeHandler;
    }

    /**
     * @return IRouteHandler
     */
    public function getRouteHandler()
    {
        return $this->routeHandler;
    }

    /**
     * @param string $path
     * @return bool|array
     */
    public function parseRoute($path)
    {
        try {
            if (!preg_match($this->regex, $path, $result)) {
                return false;
            }
        } catch (\Exception $exception) {
            if (!preg_match('#' . $this->regex . '#', $path, $result)) {
                return false;
            }
        }

        return array_slice($result, 1);
    }
}
