<?php

namespace OZiTAG\Tager\Backend\Panel\Jobs;

use OZiTAG\Tager\Backend\Core\Jobs\Job;
use OZiTAG\Tager\Backend\Pages\Models\TagerPage;
use OZiTAG\Tager\Backend\Panel\TagerPanel;

class GetRouteResultJob extends Job
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function handle()
    {
        $handlers = TagerPanel::getRouteHandlers();

        foreach ($handlers as $handler) {

            $parseResult = $handler->parseRoute($this->path);
            if ($parseResult === false) {
                continue;
            }

            $result = $handler->getRouteHandler()->handle($this->path, $parseResult);
            if($result){
                return $result;
            }
        }

        return null;
    }
}
