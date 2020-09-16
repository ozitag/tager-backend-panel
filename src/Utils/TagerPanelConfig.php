<?php

namespace OZiTAG\Tager\Backend\Panel\Utils;

class TagerPanelConfig
{
    /**
     * @return string
     */
    public static function getLanguage()
    {
        return strtoupper((string)config('tager-panel.language', 'EN'));
    }

    /**
     * @return string
     */
    public static function getAdminBaseUri()
    {
        return (string)config('tager-panel.adminBaseUri', '/admin');
    }
}
