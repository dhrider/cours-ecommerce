<?php


namespace App\Controller;


use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    protected $logger;
    protected $calculator;

    public function __construct(LoggerInterface $logger, Calculator $calculator)
    {
        $this->logger = $logger;
        $this->calculator = $calculator;
    }

    /**
     * @Route("/hello/{name<[a-zA-Z]+>}", name="hello")
     * @param string $name
     * @param Slugify $slugify
     * @return Response
     */
    public function hello(Slugify $slugify, $name= "World") : Response
    {
        dump($slugify->slugify('Hello World'));

        $this->logger->info("Mon message de log");

        $tva = $this->calculator->calcul(100);

        dump($tva);

        return New Response("Hello $name");
    }
}
