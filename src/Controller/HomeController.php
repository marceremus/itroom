<?php

namespace App\Controller;

use App\Entity\Tirage;
use App\Repository\TirageRepository;
use Doctrine\Persistence\ObjectManager;
use http\Env\Request;
use League\Csv\Reader;
use PDO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(TirageRepository $tirageRepository): Response
    {
        $limite = 9;

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'tirages' => $tirageRepository->findFirst($limite)
        ]);
    }
}
