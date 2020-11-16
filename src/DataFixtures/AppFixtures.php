<?php

namespace App\DataFixtures;

use App\Entity\Tirage;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use League\Csv\Reader;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $csv  = Reader::createFromPath(__DIR__.'/tirage.csv','r');
        $csv->setDelimiter(';');

        $results = $csv->fetchAssoc();
        foreach ($results as $key=>$row){
var_dump($row);
            $tirage = new Tirage();
            $tirage->setAnneeNumeroDeTirage($key["annee_numero_de_tirage"][$row]);
            $tirage->setJourDeTirage($key["jour_de_tirag"][$row]);
            $tirage->setDateDeTirage(new \DateTime($key["date_de_tirage"][$row]));
            $tirage->setDateDeForclusion(new \DateTime($key["date_de_forclusion"][$row]));
            $tirage->setBoule1($key["boule_1"][$row]);
            $tirage->setBoule2($key["boule_2"][$row]);
            $tirage->setBoule3($key["boule_3"][$row]);
            $tirage->setBoule4($key["boule_4"][$row]);
            $tirage->setBoule5($key["boule_5"][$row]);
            $tirage->setNumeroChance($key(['numero_chance'][$row]));
            $tirage->setCombinaisonGagnanteEnOrdreCroissant($key['combinaison_gagnante_en_ordre_croissant'][$row]);

            $tirage->setNombreDeGagnantAuRang1($key['nombre_de_gagnant_au_rang1'][$row]);
            $tirage->setRapportDuRang1($key['rapport_du_rang1'][$row]);

            $tirage->setNombreDeGagnantAuRang2($key['nombre_de_gagnant_au_rang2'][$row]);
            $tirage->setRapportDuRang2($key['rapport_du_rang2'][$row]);

            $tirage->setNombreDeGagnantAuRang3($key['nombre_de_gagnant_au_rang3'][$row]);
            $tirage->setRapportDuRang3($key['rapport_du_rang3'][$row]);

            $tirage->setNombreDeGagnantAuRang4($key['nombre_de_gagnant_au_rang4'][$row]);
            $tirage->setRapportDuRang4($key['rapport_du_rang4'][$row]);

            $tirage->setNombreDeGagnantAuRang5($key['nombre_de_gagnant_au_rang5'][$row]);
            $tirage->setRapportDuRang5($key['rapport_du_rang5'][$row]);

            $tirage->setNombreDeGagnantAuRang6($key['nombre_de_gagnant_au_rang6'][$row]);
            $tirage->setRapportDuRang6($key['rapport_du_rang6'][$row]);

            $tirage->setNombreDeGagnantAuRang7($key['nombre_de_gagnant_au_rang7'][$row]);
            $tirage->setRapportDuRang7($key['rapport_du_rang7'][$row]);

            $tirage->setNombreDeGagnantAuRang8($key['nombre_de_gagnant_au_rang8'][$row]);
            $tirage->setRapportDuRang8($key['rapport_du_rang8'][$row]);

            $tirage->setNombreDeGagnantAuRang9($key['nombre_de_gagnant_au_rang9'][$row]);
            $tirage->setRapportDuRang9($key['rapport_du_rang9'][$row]);

            $tirage->setNombreDeCodesGagnants($key['nombre_de_codes_gagnants'][$row]);
            $tirage->setRapportCodesGagnants($key['rapport_codes_gagnants'][$row]);
            $tirage->setCodesGagnants($key['codes_gagnants'][$row]);

            $tirage->setBoule1SecondTirage($key['boule_1_second_tirage'][$row]);
            $tirage->setBoule2SecondTirage($key['boule_2_second_tirage'][$row]);
            $tirage->setBoule3SecondTirage($key['boule_3_second_tirage'][$row]);
            $tirage->setBoule4SecondTirage($key['boule_4_second_tirage'][$row]);
            $tirage->setBoule5SecondTirage($key['boule_5_second_tirage'][$row]);

            $tirage->setCombinaisonGagnanteEnOrdreCroissant($key['combinaison_gagnant_second_tirage_en_ordre_croissant'][$row]);

            $tirage->setNombreDeGagnantAuRang1SecondTirage($key['nombre_de_gagnant_au_rang_1_second_tirage'][$row]);
            $tirage->setRapportDuRang1SecondTirage($key['rapport_du_rang1_second_tirage'][$row]);

            $tirage->setNombreDeGagnantAuRang2SecondTirage($key['nombre_de_gagnant_au_rang_2_second_tirage'][$row]);
            $tirage->setRapportDuRang2SecondTirage($key['rapport_du_rang2_second_tirage'][$row]);

            $tirage->setNombreDeGagnantAuRang3SecondTirage($key['nombre_de_gagnant_au_rang_3_second_tirage'][$row]);
            $tirage->setRapportDuRang3SecondTirage($key['rapport_du_rang3_second_tirage'][$row]);

            $tirage->setNombreDeGagnantAuRang4SecondTirage($key['nombre_de_gagnant_au_rang_4_second_tirage'][$row]);
            $tirage->setRapportDuRang4SecondTirage($key['rapport_du_rang4_second_tirage'][$row]);

            $tirage->setNumeroJokerplus($key['numero_jokerplus'][$row]);
            $tirage->setDevise($key['devise'][$row]);


        }

        $manager->persist($tirage);

        $manager->flush();
    }
}
