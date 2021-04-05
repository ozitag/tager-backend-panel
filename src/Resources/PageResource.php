<?php

namespace OZiTAG\Tager\Backend\Panel\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;
use OZiTAG\Tager\Backend\Panel\Structures\TagerRouteHandlerResult;
use OZiTAG\Tager\Backend\Panel\Utils\TagerPanelConfig;
use OZiTAG\Tager\Backend\Utils\Helpers\UrlHelper;

class PageResource extends JsonResource
{
    /** @var RouteHandlerResult|null */
    private $result;

    public function __construct(?TagerRouteHandlerResult $result = null)
    {
        $this->result = $result;
    }

    private function getActions()
    {
        if (!$this->result) {
            return [];
        }

        return array_map(function ($action) {
            return [
                'url' => isset($action['url']) ?
                    (UrlHelper::isAbsoluteUrl($action['url']) ? '' : TagerPanelConfig::getAdminHomeUrl()) . $action['url'] :
                    null,
                'label' => $action['label'] ?? null
            ];
        }, $this->result->getActions());
    }

    private function getModel()
    {
        if (!$this->result || !$this->result->hasModel()) {
            return null;
        }

        return [
            'type' => $this->result->getModelType(),
            'name' => $this->result->getModelName()
        ];
    }

    public function toArray($request)
    {
        return [
            'actions' => $this->getActions(),
            'model' => $this->getModel()
        ];
    }
}
