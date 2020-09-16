<?php

namespace OZiTAG\Tager\Backend\Panel\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use OZiTAG\Tager\Backend\Panel\Structures\TagerRouteHandlerResult;
use OZiTAG\Tager\Backend\Panel\Utils\TagerPanelConfig;

class PageResource extends JsonResource
{
    /** @var RouteHandlerResult|null */
    private $result;

    public function __construct(?TagerRouteHandlerResult $result = null)
    {
        $this->result = $result;
    }

    private function getButtonJson()
    {
        if (!$this->result) {
            return null;
        }

        return [
            'label' => $this->result->getActionButtonLabel(),
            'url' => '/admin' . $this->result->getActionButtonUrl()
        ];
    }

    private function getActions()
    {
        if (empty($this->result->getActions())) {
            return [];
        }

        return array_map(function ($action) {
            return [
                'url' => $action['url'] ?? null,
                'label' => $action['label'] ?? null
            ];
        }, $this->result->getActions());
    }

    private function getModel()
    {
        if (!$this->result->hasModel()) {
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
