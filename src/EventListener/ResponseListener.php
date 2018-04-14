<?php
/**
 * Created by PhpStorm.
 * User: finch
 * Date: 4/13/2018
 * Time: 7:10 PM
 */

namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class ResponseListener
{
    public function onKernelResponse(FilterResponseEvent $event) {
        $event->getResponse()->headers->set('x-frame-options', 'deny');
        $event->getResponse()->headers->set('x-xss-protection', '1; mode=block');
        $event->getResponse()->headers->set('x-content-type-options', 'nosniff');
    }
}