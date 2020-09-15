<?php

namespace OZiTAG\Tager\Backend\Panel\Utils;

class TagerPanelConfig
{
    /**
     * @return string
     */
    public static function getLanguage()
    {
        return strtoupper(config('tager-panel.language', 'EN'));
    }
}
