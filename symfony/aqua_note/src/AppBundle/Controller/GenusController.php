<?php
/** My frist controller */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
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

    /**
     * @Route("/genus/{genusName}/notes", name = "genus_show_notes")
     */
    public function getNotes($genusName){
        $notes = [
            ['id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Octopus asked me a riddle, outsmarted me', 'date' => 'Dec. 10, 2015'],
            ['id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'I counted 8 legs... as they wrapped around me', 'date' => 'Dec. 1, 2015'],
            ['id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Inked!', 'date' => 'Aug. 20, 2015'],
        ];

        $data = [
            'notes' => $notes
        ];

        //return new Response(json_encode($data));
        return new JsonResponse($data);
    }
}