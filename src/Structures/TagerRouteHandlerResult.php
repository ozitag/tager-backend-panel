<?php

namespace OZiTAG\Tager\Backend\Panel\Structures;

class TagerRouteHandlerResult
{
    private $actionButtonLabel;

    private $actionButtonUrl;

    public function __construct($actionButtonLabel, $actionButtonUrl)
    {
        $this->setActionButtonLabel($actionButtonLabel);
        $this->setActionButtonUrl($actionButtonUrl);
    }

    public function setActionButtonLabel($value)
    {
        $this->actionButtonLabel = $value;
    }

    public function getActionButtonLabel()
    {
        return $this->actionButtonLabel;
    }

    public function setActionButtonUrl($value)
    {
        $this->actionButtonUrl = $value;
    }

    public function getActionButtonUrl()
    {
        return $this->actionButtonUrl;
    }
}
