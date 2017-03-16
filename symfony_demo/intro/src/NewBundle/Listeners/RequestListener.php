<?php
/**
 * Created by PhpStorm.
 * User: nikhilkuria
 * Date: 16/03/17
 * Time: 12:26 PM
 */

namespace NewBundle\Listeners;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class RequestListener
{
    public function onKernelRequest(GetResponseEvent $event){
        //$response = new Response("Intercepted");
        //$event->setResponse($response);
    }
}