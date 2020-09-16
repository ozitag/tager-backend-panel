<?php

namespace OZiTAG\Tager\Backend\Panel\Controllers;

use Illuminate\Http\Request;
use OZiTAG\Tager\Backend\Core\Controllers\Controller;
use OZiTAG\Tager\Backend\Panel\Features\InfoFeature;
use OZiTAG\Tager\Backend\Panel\Features\PageFeature;

class PublicController extends Controller
{
    public function page(Request $request)
    {
        return $this->serve(PageFeature::class, [
            'path' => $request->get('path')
        ]);
    }

    public function info()
    {
        return $this->serve(InfoFeature::class);
    }
}
