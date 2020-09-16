<?php

namespace OZiTAG\Tager\Backend\Panel\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use OZiTAG\Tager\Backend\Panel\Structures\TagerRouteHandlerResult;
use OZiTAG\Tager\Backend\Panel\Utils\TagerPanelConfig;

class InfoResource extends JsonResource
{
    private $language;

    private $baseUrl;

    public function __construct($language, $baseUrl)
    {
        $this->language = $language;
        $this->baseUrl = $baseUrl;
    }

    public function toArray($request)
    {
        return [
            'baseUrl' => $this->baseUrl,
            'language' => $this->language
        ];
    }
}
