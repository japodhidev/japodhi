<?php
/**
 * Created by PhpStorm.
 * User: finch
 * Date: 4/13/2018
 * Time: 7:10 PM
 */

namespace App\EventListener;

use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class ResponseListener
{


    public function onKernelResponse(FilterResponseEvent $event) {


        $response = $event->getResponse();
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('X-Frame-Options', 'deny');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');


        $response->prepare($event->getRequest());

    }
}