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

    public function toArray($request)
    {
        return [
            'actions' => [
                [
                    'url' => '/admin/pages/1',
                    'label' => 'Edit Page'
                ]
            ],
            'model' => [
                'type' => 'Page',
                'name' => 'FAQ'
            ]
        ];
    }
}
