<?php

namespace OZiTAG\Tager\Backend\Panel\Features;

use Illuminate\Http\Resources\Json\JsonResource;
use OZiTAG\Tager\Backend\Core\Features\Feature;

class PageFeature extends Feature
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function handle()
    {
        return new JsonResource([
            'adminPageUrl' => '/admin'
        ]);
    }
}
