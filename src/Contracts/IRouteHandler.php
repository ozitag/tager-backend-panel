<?php

namespace OZiTAG\Tager\Backend\Panel\Contracts;

use OZiTAG\Tager\Backend\Panel\Structures\TagerRouteHandlerResult;

interface IRouteHandler
{
    /** @return TagerRouteHandlerResult */
    public function handle($route, $matches);
}
