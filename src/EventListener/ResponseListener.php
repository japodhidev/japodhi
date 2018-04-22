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
        $response->headers->set('Content-Security-policy', "default-src 'self' *.japodhidev.com; script-src 'unsafe-inline' https://www.google-analytics.com  http://www.japodhidev.com https://maps.googleapis.com https://www.googletagmanager.com/gtag/js?id=UA-117919775-1 https://use.fontawesome.com http://maps.googleapis.com; img-src 'self' http://www.japodhidev.com  https://maps.gstatic.com https://maps.googleapis.com http://maps.googleapis.com; font-src 'self' http://www.japodhidev.com https://fonts.gstatic.com https://use.fontawesome.com http://maps.googleapis.com; style-src 'unsafe-inline' http://www.japodhidev.com https://fonts.googleapis.com https://maps.googleapis.com https://www.googletagmanager.com https://use.fontawesome.com http://maps.googleapis.com;" );
        $response->headers->set('Referrer-Policy', 'no-referrer, strict-origin-when-cross-origin');
        $response->headers->set('Set-Cookie', 'secure');



        $response->prepare($event->getRequest());

    }
}