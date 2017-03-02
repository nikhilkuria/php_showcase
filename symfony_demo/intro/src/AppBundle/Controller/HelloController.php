<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HelloController extends Controller
{
    /**
     * @Route("/hello/{name}", name="hello")
     */
    public function helloAction(Request $request, $name)
    {
        return $this->render('hello/helloName.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'name' => $name,
            'world' => 'world'
        ]);
    }
}
