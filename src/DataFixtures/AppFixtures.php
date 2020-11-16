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
        foreach ($results as $row){
var_dump($row);
            $tirage = new Tirage();
            $tirage->setAnneeNumeroDeTirage($row[' annee_numero_de_tirage']);
            $tirage->setJourDeTirage(['jour_de_tirag']);
            $tirage->setDateDeTirage(new \DateTime($row['date_de_tirage']));
            $tirage->setDateDeForclusion(new \DateTime($row['date_de_forclusion']));
            $tirage->setBoule1($row["boule_1"]);
            $tirage->setBoule2($row["boule_2"]);
            $tirage->setBoule3($row["boule_3"]);
            $tirage->setBoule4($row["boule_4"]);
            $tirage->setBoule5($row["boule_5"]);
            $tirage->setNumeroChance($row(['numero_chance']));
            $tirage->setCombinaisonGagnanteEnOrdreCroissant($row['combinaison_gagnante_en_ordre_croissant']);

            $tirage->setNombreDeGagnantAuRang1($row['nombre_de_gagnant_au_rang1']);
            $tirage->setRapportDuRang1($row['rapport_du_rang1']);

            $tirage->setNombreDeGagnantAuRang2($row['nombre_de_gagnant_au_rang2']);
            $tirage->setRapportDuRang2($row['rapport_du_rang2']);

            $tirage->setNombreDeGagnantAuRang3($row['nombre_de_gagnant_au_rang3']);
            $tirage->setRapportDuRang3($row['rapport_du_rang3']);

            $tirage->setNombreDeGagnantAuRang4($row['nombre_de_gagnant_au_rang4']);
            $tirage->setRapportDuRang4($row['rapport_du_rang4']);

            $tirage->setNombreDeGagnantAuRang5($row['nombre_de_gagnant_au_rang5']);
            $tirage->setRapportDuRang5($row['rapport_du_rang5']);

            $tirage->setNombreDeGagnantAuRang6($row['nombre_de_gagnant_au_rang6']);
            $tirage->setRapportDuRang6($row['rapport_du_rang6']);

            $tirage->setNombreDeGagnantAuRang7($row['nombre_de_gagnant_au_rang7']);
            $tirage->setRapportDuRang7($row['rapport_du_rang7']);

            $tirage->setNombreDeGagnantAuRang8($row['nombre_de_gagnant_au_rang8']);
            $tirage->setRapportDuRang8($row['rapport_du_rang8']);

            $tirage->setNombreDeGagnantAuRang9($row['nombre_de_gagnant_au_rang9']);
            $tirage->setRapportDuRang9($row['rapport_du_rang9']);

            $tirage->setNombreDeCodesGagnants($row['nombre_de_codes_gagnants']);
            $tirage->setRapportCodesGagnants($row['rapport_codes_gagnants']);
            $tirage->setCodesGagnants($row['codes_gagnants']);

            $tirage->setBoule1SecondTirage($row['boule_1_second_tirage']);
            $tirage->setBoule2SecondTirage($row['boule_2_second_tirage']);
            $tirage->setBoule3SecondTirage($row['boule_3_second_tirage']);
            $tirage->setBoule4SecondTirage($row['boule_4_second_tirage']);
            $tirage->setBoule5SecondTirage($row['boule_5_second_tirage']);

            $tirage->setCombinaisonGagnanteEnOrdreCroissant($row['combinaison_gagnant_second_tirage_en_ordre_croissant']);

            $tirage->setNombreDeGagnantAuRang1SecondTirage($row['nombre_de_gagnant_au_rang_1_second_tirage']);
            $tirage->setRapportDuRang1SecondTirage($row['rapport_du_rang1_second_tirage']);

            $tirage->setNombreDeGagnantAuRang2SecondTirage($row['nombre_de_gagnant_au_rang_2_second_tirage']);
            $tirage->setRapportDuRang2SecondTirage($row['rapport_du_rang2_second_tirage']);

            $tirage->setNombreDeGagnantAuRang3SecondTirage($row['nombre_de_gagnant_au_rang_3_second_tirage']);
            $tirage->setRapportDuRang3SecondTirage($row['rapport_du_rang3_second_tirage']);

            $tirage->setNombreDeGagnantAuRang4SecondTirage($row['nombre_de_gagnant_au_rang_4_second_tirage']);
            $tirage->setRapportDuRang4SecondTirage($row['rapport_du_rang4_second_tirage']);

            $tirage->setNumeroJokerplus($row['numero_jokerplus']);
            $tirage->setDevise($row['devise']);


        }

        $manager->persist($tirage);

        $manager->flush();
    }
}
