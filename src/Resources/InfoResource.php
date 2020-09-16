<?php

namespace OZiTAG\Tager\Backend\Panel\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use OZiTAG\Tager\Backend\Panel\Structures\TagerRouteHandlerResult;
use OZiTAG\Tager\Backend\Panel\Utils\TagerPanelConfig;

class InfoResource extends JsonResource
{
    private $language;

    private $adminHomeUrl;

    public function __construct($language, $adminHomeUrl)
    {
        $this->language = $language;
        $this->adminHomeUrl = $adminHomeUrl;
    }

    public function toArray($request)
    {
        return [
            'adminHomeUrl' => $this->adminHomeUrl,
            'language' => $this->language
        ];
    }
}
