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
        $reader = Reader::createFromPath('%kernel.root_dir%/../src/Data/tirage.csv');
        $results = $reader->fetchAssoc();
        foreach ($results as $row){

            $tirage = new Tirage();
            $tirage->setAnneeNumeroDeTirage($row['annee_numero_de_tirage']);
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
        }

        $manager->persist($tirage);

        $manager->flush();
    }
}
