<?php

namespace OZiTAG\Tager\Backend\Panel\Structures;

class TagerRouteHandlerResult
{
    private $actions = [];

    /** @var string */
    private $modelType = null;

    /** @var string */
    private $modelName = null;

    public function setModel($type, $name)
    {
        $this->modelType = $type;

        $this->modelName = $name;
    }

    public function addAction($label, $url)
    {
        $this->actions[] = [
            'url' => $url,
            'label' => $label
        ];
    }

    /**
     * @return bool
     */
    public function hasModel()
    {
        return !empty($this->modelType);
    }

    /**
     * @return string|null
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * @return string|null
     */
    public function getModelType()
    {
        return $this->modelType;
    }

    /**
     * @return array
     */
    public function getActions()
    {
        return $this->actions;
    }
}
