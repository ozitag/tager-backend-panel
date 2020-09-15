<?php

namespace OZiTAG\Tager\Backend\Panel\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use OZiTAG\Tager\Backend\Panel\Structures\RouteHandlerResult;
use OZiTAG\Tager\Backend\Panel\Utils\TagerPanelConfig;

class PageResource extends JsonResource
{
    /** @var RouteHandlerResult|null */
    private $result;

    public function __construct(?RouteHandlerResult $result = null)
    {
        $this->result = $result;
    }

    public function toArray($request)
    {
        return [
            'language' => TagerPanelConfig::getLanguage(),
            'button' => [
                'label' => $this->result ? $this->result->getActionButtonLabel() : 'Edit Page',
                'url' => $this->result ? $this->result->getActionButtonUrl() : '/admin'
            ]
        ];
    }
}
