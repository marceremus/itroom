<?php

namespace App\Controller;


use App\Helpers\GetCsvFile;
use App\Repository\TirageRepository;
use Doctrine\ORM\EntityManagerInterface;
use League\Csv\Reader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
            'tirages' => $tirageRepository->findFirst($limite),
            'datetirage' => $tirageRepository->getDateTirage(),
        ]);
    }

}
