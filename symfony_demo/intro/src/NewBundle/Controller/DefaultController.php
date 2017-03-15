<?php

namespace NewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/helloWorld", name="helloWorld")
     */
    public function helloWorldAction()
    {
        return new Response("Hello World from new bundle!!!");
    }

    /**
     * @Route("/hello/{name}/{age}", name="helloWorld")
     */
    public function helloJsonAction($name, $age)
    {
        return new JsonResponse(array('name'=>$name, 'age'=>$age));
    }
}
