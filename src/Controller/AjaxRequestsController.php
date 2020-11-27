<?php

namespace App\Controller;

use App\Repository\TirageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjaxRequestsController extends AbstractController
{
    /**
     * @Route("/gagner", name="gagner")
     */
    public function index(Request $request, TirageRepository $tirageRepository): Response
    {

        $chiffre1 = $request->request->get("chiffre1");
        $chiffre2 = $request->request->get("chiffre2");
        $chiffre3 = $request->request->get("chiffre3");
        $chiffre4 = $request->request->get("chiffre4");
        $chiffre5 = $request->request->get("chiffre5");
        $dateTirage = $request->request->get("dateTirage");


        $combinaisonGagnate = $tirageRepository->getCombinaisonGagnante($dateTirage);

        $combinaison = "";

        foreach ($combinaisonGagnate as $key=>$valeur){
            foreach ($valeur as $k=>$v){
                $combinaison = explode("-", $v);
            }
        }

        $tabChoice = [$chiffre1, $chiffre2, $chiffre3, $chiffre4, $chiffre5];

        $diff = array_diff($combinaison, $tabChoice);

        if(count($diff) <= 3){
            return $this->json(array("results" => $diff, "message" => "ok"), 200);
        }else{
            return $this->json(array("message" => "ko"), 200);
        }



//        return $this->json($results, 200);
    }
}
