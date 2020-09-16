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
     * @return string
     * @throws \Exception
     */
    private function validateRegex()
    {
        $regex = $this->regex;

        try {
            preg_match($regex, null);
        } catch (\Exception $exception) {
            $regex = '#' . $this->regex . '#';
            try {
                preg_match($regex, null);
            } catch (\Exception $exception) {
                throw new \Exception('Invalid regex "' . $this->regex . '"');
            }
        }

        return $regex;
    }

    /**
     * @param string $path
     * @return bool|array
     */
    public function parseRoute($path)
    {
        $p = strrpos($path, '?');
        if($p !== false){
            $path = substr($path, 0, $p);
        }

        $regex = $this->validateRegex();

        if (!preg_match($regex, $path, $result)) {
           return false;
        }

        return array_slice($result, 1);
    }
}
