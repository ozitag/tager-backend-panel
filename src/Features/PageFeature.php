<?php

namespace OZiTAG\Tager\Backend\Panel\Features;

use Illuminate\Http\Resources\Json\JsonResource;
use OZiTAG\Tager\Backend\Core\Features\Feature;
use OZiTAG\Tager\Backend\Panel\Jobs\GetRouteResultJob;
use OZiTAG\Tager\Backend\Panel\Resources\PageResource;
use OZiTAG\Tager\Backend\Panel\Structures\RouteHandlerResult;

class PageFeature extends Feature
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function handle()
    {
        $result = $this->run(GetRouteResultJob::class, [
            'path' => $this->path
        ]);

        return new PageResource($result);
    }
}
