<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/show', name: 'show')]

    public function show(): Response
    {
        return new Response('<h1> bonjourrr </h1>');
    }


    #[Route('/msg/{name}', name: 'msg')]
   
    public function msg($name): Response
    {
        return $this->render('home/msg.html.twig',['n'=>$name]);
    }

    #[Route('/details{id}', name: 'd')]

    public function details($id): Response
    {
        return new Response('auth'.$id);
    }


    
}