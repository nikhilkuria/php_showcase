<?php
/** My frist controller */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{


    /**
     * @Route("/genus/{genusName}")
     */
    public function showPage($genusName){

/*        $templating = $this->container->get('templating');

        $html = $templating->render('genus/show.html.twig',[
            'name' => $genusName
        ]);*/

        $notes = array("This is a line",
            "This is one two",
            "This one is special because it has {$genusName}");

        $html =  $this->render('genus/show.html.twig',[
            'name' => $genusName,
            'notes' => $notes
        ]);

        return new Response($html);

    }

    /**
     * @Route("/genus/dump/{name}")
     */

    public function dumpDemo($name){
        $simpleArray = array("This is a line",
            "This is one two",
            "This one is special because it has {$name}");

        $html = $this->render('genus/dump.html.twig',[
            'name' => $name,
            'simpleArray' => $simpleArray
        ]);

        return new Response($html);
    }

}