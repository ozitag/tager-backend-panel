<?php

namespace OZiTAG\Tager\Backend\Panel\Jobs;

use OZiTAG\Tager\Backend\Core\Jobs\Job;
use OZiTAG\Tager\Backend\Pages\Models\TagerPage;

class GetRouteResultJob extends Job
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function handle()
    {
        return null;
    }
}
