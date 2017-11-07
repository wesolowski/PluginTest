<?php

namespace PluginTest;

use Shopware\Components\Plugin;

class PluginTest extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PreDispatch_Frontend_Detail' => 'onPreDispatch'
        ];
    }

    public function onPreDispatch()
    {
        fwrite(STDOUT, __FUNCTION__ . ' in ' . __FILE__ . PHP_EOL);
    }

}