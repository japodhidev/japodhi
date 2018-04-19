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
        $response->headers->set('Content-Security-policy', "default-src 'self'; script-src https://static.ads-twitter.com https://www.google-analytics.com 'sha256-q2sY7jlDS4SrxBg6oq/NBYk9XVSwDsterXWpH99SAn0='; img-src 'self' https://s3.amazonaws.com https://twitter.com https://pbs.twimg.com; font-src 'self' https://fonts.gstatic.com; style-src 'self' https://fonts.googleapis.com; frame-ancestors 'none';" );
        $response->headers->set('Referrer-Policy', 'no-referrer, strict-origin-when-cross-origin');



        $response->prepare($event->getRequest());

    }
}