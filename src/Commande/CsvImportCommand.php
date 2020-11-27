<?php


namespace App\Commande;

use App\Entity\Tirage;
use Doctrine\ORM\EntityManagerInterface;
use League\Csv\Reader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Class CsvImportCommand
 * @package AppBundle\ConsoleCommand
 */
class CsvImportCommand extends Command
{
    /**
     * @var EntityManagerInterface
     */
    private $manager;

    /**
     * CsvImportCommand constructor.
     *
     * @param EntityManagerInterface $manager
     *
     * @throws \Symfony\Component\Console\Exception\LogicException
     */
    public function __construct(EntityManagerInterface $manager)
    {
        parent::__construct();

        $this->manager = $manager;
    }

    /**
     * Configure
     * @throws \Symfony\Component\Console\Exception\InvalidArgumentException
     */
    protected function configure()
    {
        $this
            ->setName('csv:import')
            ->setDescription('Imports the mock CSV data file')
        ;
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return void
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $reader = Reader::createFromPath('%kernel.root_dir%/../public/files/tirage1.csv');
        $reader->setDelimiter(';');

        $results = $reader->fetchAssoc();
        $io->progressStart(iterator_count($results));

        foreach ($results as $row) {
            dump($row);
            $tirage = new Tirage();
            $tirage->setAnneeNumeroDeTirage($row["annee_numero_de_tirage"]);
            $tirage->setJourDeTirage($row["jour_de_tirage"]);
            $tirage->setDateDeTirage(date_create_from_format("d/m/Y", $row["date_de_tirage"]));
            $tirage->setDateDeForclusion(date_create_from_format("d/m/Y", $row["date_de_forclusion"]));
            $tirage->setBoule1(intval($row["boule_1"]));
            $tirage->setBoule2(intval($row["boule_2"]));
            $tirage->setBoule3(intval($row["boule_3"]));
            $tirage->setBoule4(intval($row["boule_4"]));
            $tirage->setBoule5($row["boule_5"]);
            $tirage->setNumeroChance($row["numero_chance"]);
            $tirage->setCombinaisonGagnanteEnOrdreCroissant($row['combinaison_gagnante_en_ordre_croissant']);

            $tirage->setNombreDeGagnantAuRang1(intval($row['nombre_de_gagnant_au_rang1']));
            $tirage->setRapportDuRang1(intval($row['rapport_du_rang1']));

            $tirage->setNombreDeGagnantAuRang2($row['nombre_de_gagnant_au_rang2']);
            $tirage->setRapportDuRang2(intval($row['rapport_du_rang2']));

            $tirage->setNombreDeGagnantAuRang3($row['nombre_de_gagnant_au_rang3']);
            $tirage->setRapportDuRang3(intval($row['rapport_du_rang3']));

            $tirage->setNombreDeGagnantAuRang4($row['nombre_de_gagnant_au_rang4']);
            $tirage->setRapportDuRang4(intval($row['rapport_du_rang4']));

            $tirage->setNombreDeGagnantAuRang5($row['nombre_de_gagnant_au_rang5']);
            $tirage->setRapportDuRang5(intval($row['rapport_du_rang5']));

            $tirage->setNombreDeGagnantAuRang6($row['nombre_de_gagnant_au_rang6']);
            $tirage->setRapportDuRang6(intval($row['rapport_du_rang6']));

            $tirage->setNombreDeGagnantAuRang7($row['nombre_de_gagnant_au_rang7']);
            $tirage->setRapportDuRang7(intval($row['rapport_du_rang7']));

            $tirage->setNombreDeGagnantAuRang8($row['nombre_de_gagnant_au_rang8']);
            $tirage->setRapportDuRang8(intval($row['rapport_du_rang8']));

            $tirage->setNombreDeGagnantAuRang9($row['nombre_de_gagnant_au_rang9']);
            $tirage->setRapportDuRang9(intval($row['rapport_du_rang9']));

            $tirage->setNombreDeCodesGagnants(intval($row['nombre_de_codes_gagnants']));
            $tirage->setRapportCodesGagnants(intval($row['rapport_codes_gagnants']));
            $tirage->setCodesGagnants($row['codes_gagnants']);

            $tirage->setBoule1SecondTirage(intval($row['boule_1_second_tirage']));
            $tirage->setBoule2SecondTirage(intval($row['boule_2_second_tirage']));
            $tirage->setBoule3SecondTirage(intval($row['boule_3_second_tirage']));
            $tirage->setBoule4SecondTirage(intval($row['boule_4_second_tirage']));
            $tirage->setBoule5SecondTirage(intval($row['boule_5_second_tirage']));

            $tirage->setCombinaisonGagnanteEnOrdreCroissant($row['combinaison_gagnant_second_tirage_en_ordre_croissant']);

            $tirage->setNombreDeGagnantAuRang1SecondTirage(intval($row['nombre_de_gagnant_au_rang_1_second_tirage']));
            $tirage->setRapportDuRang1SecondTirage(intval($row['rapport_du_rang1_second_tirage']));

            $tirage->setNombreDeGagnantAuRang2SecondTirage(intval($row['nombre_de_gagnant_au_rang_2_second_tirage']));
            $tirage->setRapportDuRang2SecondTirage(intval($row['rapport_du_rang2_second_tirage']));

            $tirage->setNombreDeGagnantAuRang3SecondTirage(intval($row['nombre_de_gagnant_au_rang_3_second_tirage']));
            $tirage->setRapportDuRang3SecondTirage($row['rapport_du_rang3_second_tirage']);

            $tirage->setNombreDeGagnantAuRang4SecondTirage(intval($row['nombre_de_gagnant_au_rang_4_second_tirage']));
            $tirage->setRapportDuRang4SecondTirage(intval($row['rapport_du_rang4_second_tirage']));

            $tirage->setNumeroJokerplus($row['numero_jokerplus']);
            $tirage->setDevise($row['devise']);

            $this->manager->persist($tirage);
            $io->progressAdvance();
        }
            $this->manager->flush();
        $io->progressFinish();
         $io->success("L'intégration de fichier csv réalisée aves succès !");
         return 1;

    }

    /**
     * @return EntityManagerInterface
     */
    public function getManager(): EntityManagerInterface
    {
        return $this->manager;
    }

    /**
     * @param EntityManagerInterface $manager
     */
    public function setManager(EntityManagerInterface $manager): void
    {
        $this->manager = $manager;
    }


}
