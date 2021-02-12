<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{name<[a-zA-Z]+>}", name="hello")
     * @param Environment $twig
     * @param string $name
     * @return Response
     */
    public function hello(Environment $twig, $name= "World") : Response
    {
        return $this->render('hello.html.twig', [
            'prenom' => $name
        ]);

    }
}
