<?php

namespace PluginTest\Subscriber;

use Enlight\Event\SubscriberInterface;


class Detail implements SubscriberInterface
{
    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'Enlight_Controller_Action_PreDispatch_Frontend_Detail' => 'onPreDispatchSubscriber'
        ];
    }

    public function onPreDispatchSubscriber()
    {
        fwrite(STDOUT, __FUNCTION__ . ' in ' . __FILE__ . PHP_EOL);
    }


}