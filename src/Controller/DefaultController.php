<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function index() : Response
    {
        return $this->render('default.html.twig', ['text' => 'Hello World']);

    }
}