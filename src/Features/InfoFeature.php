<?php

namespace OZiTAG\Tager\Backend\Panel\Features;

use Illuminate\Http\Resources\Json\JsonResource;
use OZiTAG\Tager\Backend\Core\Features\Feature;
use OZiTAG\Tager\Backend\Panel\Jobs\GetRouteResultJob;
use OZiTAG\Tager\Backend\Panel\Resources\InfoResource;
use OZiTAG\Tager\Backend\Panel\Resources\PageResource;
use OZiTAG\Tager\Backend\Panel\Structures\RouteHandlerResult;
use OZiTAG\Tager\Backend\Panel\Structures\TagerRouteHandlerResult;
use OZiTAG\Tager\Backend\Panel\Utils\TagerPanelConfig;

class InfoFeature extends Feature
{
    public function handle()
    {
        return new InfoResource(
            TagerPanelConfig::getLanguage(),
            TagerPanelConfig::getAdminHomeUrl()
        );
    }
}
