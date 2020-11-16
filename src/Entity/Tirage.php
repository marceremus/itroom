<?php

namespace App\Entity;

use App\Repository\TirageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Collection;

/**
 * @ORM\Entity(repositoryClass=TirageRepository::class)
 */
class Tirage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $annee_numero_de_tirage;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $jour_de_tirage;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_de_tirage;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_de_forclusion;

    /**
     * @ORM\Column(type="integer")
     */
    private $boule_1;

    /**
     * @ORM\Column(type="integer")
     */
    private $boule_2;

    /**
     * @ORM\Column(type="integer")
     */
    private $boule_3;

    /**
     * @ORM\Column(type="integer")
     */
    private $boule_4;

    /**
     * @ORM\Column(type="integer")
     */
    private $boule_5;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero_chance;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $combinaison_gagnante_en_ordre_croissant;

    /**
     * @ORM\Column(type="boolean")
     */
    private $nombre_de_gagnant_au_rang1;

    /**
     * @ORM\Column(type="integer")
     */
    private $rapport_du_rang1;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_gagnant_au_rang2;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $rapport_du_rang2;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_gagnant_au_rang3;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $rapport_du_rang3;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_gagnant_au_rang4;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $rapport_du_rang4;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_gagnant_au_rang5;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $rapport_du_rang5;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_gagnant_au_rang6;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $rapport_du_rang6;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_gagnant_au_rang7;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $rapport_du_rang7;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_gagnant_au_rang8;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $rapport_du_rang8;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_gagnant_au_rang9;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $rapport_du_rang9;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_codes_gagnants;

    /**
     * @ORM\Column(type="integer")
     */
    private $rapport_codes_gagnants;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $codes_gagnants;

    /**
     * @ORM\Column(type="integer")
     */
    private $boule_1_second_tirage;

    /**
     * @ORM\Column(type="integer")
     */
    private $boule_2_second_tirage;

    /**
     * @ORM\Column(type="integer")
     */
    private $boule_3_second_tirage;

    /**
     * @ORM\Column(type="integer")
     */
    private $boule_4_second_tirage;

    /**
     * @ORM\Column(type="integer")
     */
    private $boule_5_second_tirage;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $combinaison_gagnant_second_tirage_en_ordre_croissant;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_gagnant_au_rang_1_second_tirage;

    /**
     * @ORM\Column(type="integer")
     */
    private $rapport_du_rang1_second_tirage;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_gagnant_au_rang_2_second_tirage;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $rapport_du_rang2_second_tirage;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_gagnant_au_rang_3_second_tirage;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $rapport_du_rang3_second_tirage;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_gagnant_au_rang_4_second_tirage;

    /**
     * @ORM\Column(type="integer")
     */
    private $rapport_du_rang4_second_tirage;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $numero_jokerplus;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $devise;

    public function __construct(){
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAnneeNumeroDeTirage()
    {
        return $this->annee_numero_de_tirage;
    }

    /**
     * @param mixed $annee_numero_de_tirage
     */
    public function setAnneeNumeroDeTirage($annee_numero_de_tirage): void
    {
        $this->annee_numero_de_tirage = $annee_numero_de_tirage;
    }

    /**
     * @return mixed
     */
    public function getJourDeTirage()
    {
        return $this->jour_de_tirage;
    }

    /**
     * @param mixed $jour_de_tirage
     */
    public function setJourDeTirage($jour_de_tirage): void
    {
        $this->jour_de_tirage = $jour_de_tirage;
    }

    /**
     * @return mixed
     */
    public function getDateDeTirage()
    {
        return $this->date_de_tirage;
    }

    /**
     * @param mixed $date_de_tirage
     */
    public function setDateDeTirage($date_de_tirage): void
    {
        $this->date_de_tirage = $date_de_tirage;
    }

    /**
     * @return mixed
     */
    public function getDateDeForclusion()
    {
        return $this->date_de_forclusion;
    }

    /**
     * @param mixed $date_de_forclusion
     */
    public function setDateDeForclusion($date_de_forclusion): void
    {
        $this->date_de_forclusion = $date_de_forclusion;
    }

    /**
     * @return mixed
     */
    public function getBoule1()
    {
        return $this->boule_1;
    }

    /**
     * @param mixed $boule_1
     */
    public function setBoule1($boule_1): void
    {
        $this->boule_1 = $boule_1;
    }

    /**
     * @return mixed
     */
    public function getBoule2()
    {
        return $this->boule_2;
    }

    /**
     * @param mixed $boule_2
     */
    public function setBoule2($boule_2): void
    {
        $this->boule_2 = $boule_2;
    }

    /**
     * @return mixed
     */
    public function getBoule3()
    {
        return $this->boule_3;
    }

    /**
     * @param mixed $boule_3
     */
    public function setBoule3($boule_3): void
    {
        $this->boule_3 = $boule_3;
    }

    /**
     * @return mixed
     */
    public function getBoule4()
    {
        return $this->boule_4;
    }

    /**
     * @param mixed $boule_4
     */
    public function setBoule4($boule_4): void
    {
        $this->boule_4 = $boule_4;
    }

    /**
     * @return mixed
     */
    public function getBoule5()
    {
        return $this->boule_5;
    }

    /**
     * @param mixed $boule_5
     */
    public function setBoule5($boule_5): void
    {
        $this->boule_5 = $boule_5;
    }

    /**
     * @return mixed
     */
    public function getNumeroChance()
    {
        return $this->numero_chance;
    }

    /**
     * @param mixed $numero_chance
     */
    public function setNumeroChance($numero_chance): void
    {
        $this->numero_chance = $numero_chance;
    }

    /**
     * @return mixed
     */
    public function getCombinaisonGagnanteEnOrdreCroissant()
    {
        return $this->combinaison_gagnante_en_ordre_croissant;
    }

    /**
     * @param mixed $combinaison_gagnante_en_ordre_croissant
     */
    public function setCombinaisonGagnanteEnOrdreCroissant($combinaison_gagnante_en_ordre_croissant): void
    {
        $this->combinaison_gagnante_en_ordre_croissant = $combinaison_gagnante_en_ordre_croissant;
    }

    /**
     * @return mixed
     */
    public function getNombreDeGagnantAuRang1()
    {
        return $this->nombre_de_gagnant_au_rang1;
    }

    /**
     * @param mixed $nombre_de_gagnant_au_rang1
     */
    public function setNombreDeGagnantAuRang1($nombre_de_gagnant_au_rang1): void
    {
        $this->nombre_de_gagnant_au_rang1 = $nombre_de_gagnant_au_rang1;
    }

    /**
     * @return mixed
     */
    public function getRapportDuRang1()
    {
        return $this->rapport_du_rang1;
    }

    /**
     * @param mixed $rapport_du_rang1
     */
    public function setRapportDuRang1($rapport_du_rang1): void
    {
        $this->rapport_du_rang1 = $rapport_du_rang1;
    }

    /**
     * @return mixed
     */
    public function getNombreDeGagnantAuRang2()
    {
        return $this->nombre_de_gagnant_au_rang2;
    }

    /**
     * @param mixed $nombre_de_gagnant_au_rang2
     */
    public function setNombreDeGagnantAuRang2($nombre_de_gagnant_au_rang2): void
    {
        $this->nombre_de_gagnant_au_rang2 = $nombre_de_gagnant_au_rang2;
    }

    /**
     * @return mixed
     */
    public function getRapportDuRang2()
    {
        return $this->rapport_du_rang2;
    }

    /**
     * @param mixed $rapport_du_rang2
     */
    public function setRapportDuRang2($rapport_du_rang2): void
    {
        $this->rapport_du_rang2 = $rapport_du_rang2;
    }

    /**
     * @return mixed
     */
    public function getNombreDeGagnantAuRang3()
    {
        return $this->nombre_de_gagnant_au_rang3;
    }

    /**
     * @param mixed $nombre_de_gagnant_au_rang3
     */
    public function setNombreDeGagnantAuRang3($nombre_de_gagnant_au_rang3): void
    {
        $this->nombre_de_gagnant_au_rang3 = $nombre_de_gagnant_au_rang3;
    }

    /**
     * @return mixed
     */
    public function getRapportDuRang3()
    {
        return $this->rapport_du_rang3;
    }

    /**
     * @param mixed $rapport_du_rang3
     */
    public function setRapportDuRang3($rapport_du_rang3): void
    {
        $this->rapport_du_rang3 = $rapport_du_rang3;
    }

    /**
     * @return mixed
     */
    public function getNombreDeGagnantAuRang4()
    {
        return $this->nombre_de_gagnant_au_rang4;
    }

    /**
     * @param mixed $nombre_de_gagnant_au_rang4
     */
    public function setNombreDeGagnantAuRang4($nombre_de_gagnant_au_rang4): void
    {
        $this->nombre_de_gagnant_au_rang4 = $nombre_de_gagnant_au_rang4;
    }

    /**
     * @return mixed
     */
    public function getRapportDuRang4()
    {
        return $this->rapport_du_rang4;
    }

    /**
     * @param mixed $rapport_du_rang4
     */
    public function setRapportDuRang4($rapport_du_rang4): void
    {
        $this->rapport_du_rang4 = $rapport_du_rang4;
    }

    /**
     * @return mixed
     */
    public function getNombreDeGagnantAuRang5()
    {
        return $this->nombre_de_gagnant_au_rang5;
    }

    /**
     * @param mixed $nombre_de_gagnant_au_rang5
     */
    public function setNombreDeGagnantAuRang5($nombre_de_gagnant_au_rang5): void
    {
        $this->nombre_de_gagnant_au_rang5 = $nombre_de_gagnant_au_rang5;
    }

    /**
     * @return mixed
     */
    public function getRapportDuRang5()
    {
        return $this->rapport_du_rang5;
    }

    /**
     * @param mixed $rapport_du_rang5
     */
    public function setRapportDuRang5($rapport_du_rang5): void
    {
        $this->rapport_du_rang5 = $rapport_du_rang5;
    }

    /**
     * @return mixed
     */
    public function getNombreDeGagnantAuRang6()
    {
        return $this->nombre_de_gagnant_au_rang6;
    }

    /**
     * @param mixed $nombre_de_gagnant_au_rang6
     */
    public function setNombreDeGagnantAuRang6($nombre_de_gagnant_au_rang6): void
    {
        $this->nombre_de_gagnant_au_rang6 = $nombre_de_gagnant_au_rang6;
    }

    /**
     * @return mixed
     */
    public function getRapportDuRang6()
    {
        return $this->rapport_du_rang6;
    }

    /**
     * @param mixed $rapport_du_rang6
     */
    public function setRapportDuRang6($rapport_du_rang6): void
    {
        $this->rapport_du_rang6 = $rapport_du_rang6;
    }

    /**
     * @return mixed
     */
    public function getNombreDeGagnantAuRang7()
    {
        return $this->nombre_de_gagnant_au_rang7;
    }

    /**
     * @param mixed $nombre_de_gagnant_au_rang7
     */
    public function setNombreDeGagnantAuRang7($nombre_de_gagnant_au_rang7): void
    {
        $this->nombre_de_gagnant_au_rang7 = $nombre_de_gagnant_au_rang7;
    }

    /**
     * @return mixed
     */
    public function getRapportDuRang7()
    {
        return $this->rapport_du_rang7;
    }

    /**
     * @param mixed $rapport_du_rang7
     */
    public function setRapportDuRang7($rapport_du_rang7): void
    {
        $this->rapport_du_rang7 = $rapport_du_rang7;
    }

    /**
     * @return mixed
     */
    public function getNombreDeGagnantAuRang8()
    {
        return $this->nombre_de_gagnant_au_rang8;
    }

    /**
     * @param mixed $nombre_de_gagnant_au_rang8
     */
    public function setNombreDeGagnantAuRang8($nombre_de_gagnant_au_rang8): void
    {
        $this->nombre_de_gagnant_au_rang8 = $nombre_de_gagnant_au_rang8;
    }

    /**
     * @return mixed
     */
    public function getRapportDuRang8()
    {
        return $this->rapport_du_rang8;
    }

    /**
     * @param mixed $rapport_du_rang8
     */
    public function setRapportDuRang8($rapport_du_rang8): void
    {
        $this->rapport_du_rang8 = $rapport_du_rang8;
    }

    /**
     * @return mixed
     */
    public function getNombreDeGagnantAuRang9()
    {
        return $this->nombre_de_gagnant_au_rang9;
    }

    /**
     * @param mixed $nombre_de_gagnant_au_rang9
     */
    public function setNombreDeGagnantAuRang9($nombre_de_gagnant_au_rang9): void
    {
        $this->nombre_de_gagnant_au_rang9 = $nombre_de_gagnant_au_rang9;
    }

    /**
     * @return mixed
     */
    public function getRapportDuRang9()
    {
        return $this->rapport_du_rang9;
    }

    /**
     * @param mixed $rapport_du_rang9
     */
    public function setRapportDuRang9($rapport_du_rang9): void
    {
        $this->rapport_du_rang9 = $rapport_du_rang9;
    }

    /**
     * @return mixed
     */
    public function getNombreDeCodesGagnants()
    {
        return $this->nombre_de_codes_gagnants;
    }

    /**
     * @param mixed $nombre_de_codes_gagnants
     */
    public function setNombreDeCodesGagnants($nombre_de_codes_gagnants): void
    {
        $this->nombre_de_codes_gagnants = $nombre_de_codes_gagnants;
    }

    /**
     * @return mixed
     */
    public function getRapportCodesGagnants()
    {
        return $this->rapport_codes_gagnants;
    }

    /**
     * @param mixed $rapport_codes_gagnants
     */
    public function setRapportCodesGagnants($rapport_codes_gagnants): void
    {
        $this->rapport_codes_gagnants = $rapport_codes_gagnants;
    }

    /**
     * @return mixed
     */
    public function getCodesGagnants()
    {
        return $this->codes_gagnants;
    }

    /**
     * @param mixed $codes_gagnants
     */
    public function setCodesGagnants($codes_gagnants): void
    {
        $this->codes_gagnants = $codes_gagnants;
    }

    /**
     * @return mixed
     */
    public function getBoule1SecondTirage()
    {
        return $this->boule_1_second_tirage;
    }

    /**
     * @param mixed $boule_1_second_tirage
     */
    public function setBoule1SecondTirage($boule_1_second_tirage): void
    {
        $this->boule_1_second_tirage = $boule_1_second_tirage;
    }

    /**
     * @return mixed
     */
    public function getBoule2SecondTirage()
    {
        return $this->boule_2_second_tirage;
    }

    /**
     * @param mixed $boule_2_second_tirage
     */
    public function setBoule2SecondTirage($boule_2_second_tirage): void
    {
        $this->boule_2_second_tirage = $boule_2_second_tirage;
    }

    /**
     * @return mixed
     */
    public function getBoule3SecondTirage()
    {
        return $this->boule_3_second_tirage;
    }

    /**
     * @param mixed $boule_3_second_tirage
     */
    public function setBoule3SecondTirage($boule_3_second_tirage): void
    {
        $this->boule_3_second_tirage = $boule_3_second_tirage;
    }

    /**
     * @return mixed
     */
    public function getBoule4SecondTirage()
    {
        return $this->boule_4_second_tirage;
    }

    /**
     * @param mixed $boule_4_second_tirage
     */
    public function setBoule4SecondTirage($boule_4_second_tirage): void
    {
        $this->boule_4_second_tirage = $boule_4_second_tirage;
    }

    /**
     * @return mixed
     */
    public function getBoule5SecondTirage()
    {
        return $this->boule_5_second_tirage;
    }

    /**
     * @param mixed $boule_5_second_tirage
     */
    public function setBoule5SecondTirage($boule_5_second_tirage): void
    {
        $this->boule_5_second_tirage = $boule_5_second_tirage;
    }

    /**
     * @return mixed
     */
    public function getCombinaisonGagnantSecondTirageEnOrdreCroissant()
    {
        return $this->combinaison_gagnant_second_tirage_en_ordre_croissant;
    }

    /**
     * @param mixed $combinaison_gagnant_second_tirage_en_ordre_croissant
     */
    public function setCombinaisonGagnantSecondTirageEnOrdreCroissant($combinaison_gagnant_second_tirage_en_ordre_croissant): void
    {
        $this->combinaison_gagnant_second_tirage_en_ordre_croissant = $combinaison_gagnant_second_tirage_en_ordre_croissant;
    }

    /**
     * @return mixed
     */
    public function getNombreDeGagnantAuRang1SecondTirage()
    {
        return $this->nombre_de_gagnant_au_rang_1_second_tirage;
    }

    /**
     * @param mixed $nombre_de_gagnant_au_rang_1_second_tirage
     */
    public function setNombreDeGagnantAuRang1SecondTirage($nombre_de_gagnant_au_rang_1_second_tirage): void
    {
        $this->nombre_de_gagnant_au_rang_1_second_tirage = $nombre_de_gagnant_au_rang_1_second_tirage;
    }

    /**
     * @return mixed
     */
    public function getRapportDuRang1SecondTirage()
    {
        return $this->rapport_du_rang1_second_tirage;
    }

    /**
     * @param mixed $rapport_du_rang1_second_tirage
     */
    public function setRapportDuRang1SecondTirage($rapport_du_rang1_second_tirage): void
    {
        $this->rapport_du_rang1_second_tirage = $rapport_du_rang1_second_tirage;
    }

    /**
     * @return mixed
     */
    public function getNombreDeGagnantAuRang2SecondTirage()
    {
        return $this->nombre_de_gagnant_au_rang_2_second_tirage;
    }

    /**
     * @param mixed $nombre_de_gagnant_au_rang_2_second_tirage
     */
    public function setNombreDeGagnantAuRang2SecondTirage($nombre_de_gagnant_au_rang_2_second_tirage): void
    {
        $this->nombre_de_gagnant_au_rang_2_second_tirage = $nombre_de_gagnant_au_rang_2_second_tirage;
    }

    /**
     * @return mixed
     */
    public function getRapportDuRang2SecondTirage()
    {
        return $this->rapport_du_rang2_second_tirage;
    }

    /**
     * @param mixed $rapport_du_rang2_second_tirage
     */
    public function setRapportDuRang2SecondTirage($rapport_du_rang2_second_tirage): void
    {
        $this->rapport_du_rang2_second_tirage = $rapport_du_rang2_second_tirage;
    }

    /**
     * @return mixed
     */
    public function getNombreDeGagnantAuRang3SecondTirage()
    {
        return $this->nombre_de_gagnant_au_rang_3_second_tirage;
    }

    /**
     * @param mixed $nombre_de_gagnant_au_rang_3_second_tirage
     */
    public function setNombreDeGagnantAuRang3SecondTirage($nombre_de_gagnant_au_rang_3_second_tirage): void
    {
        $this->nombre_de_gagnant_au_rang_3_second_tirage = $nombre_de_gagnant_au_rang_3_second_tirage;
    }

    /**
     * @return mixed
     */
    public function getRapportDuRang3SecondTirage()
    {
        return $this->rapport_du_rang3_second_tirage;
    }

    /**
     * @param mixed $rapport_du_rang3_second_tirage
     */
    public function setRapportDuRang3SecondTirage($rapport_du_rang3_second_tirage): void
    {
        $this->rapport_du_rang3_second_tirage = $rapport_du_rang3_second_tirage;
    }

    /**
     * @return mixed
     */
    public function getNombreDeGagnantAuRang4SecondTirage()
    {
        return $this->nombre_de_gagnant_au_rang_4_second_tirage;
    }

    /**
     * @param mixed $nombre_de_gagnant_au_rang_4_second_tirage
     */
    public function setNombreDeGagnantAuRang4SecondTirage($nombre_de_gagnant_au_rang_4_second_tirage): void
    {
        $this->nombre_de_gagnant_au_rang_4_second_tirage = $nombre_de_gagnant_au_rang_4_second_tirage;
    }

    /**
     * @return mixed
     */
    public function getRapportDuRang4SecondTirage()
    {
        return $this->rapport_du_rang4_second_tirage;
    }

    /**
     * @param mixed $rapport_du_rang4_second_tirage
     */
    public function setRapportDuRang4SecondTirage($rapport_du_rang4_second_tirage): void
    {
        $this->rapport_du_rang4_second_tirage = $rapport_du_rang4_second_tirage;
    }

    /**
     * @return mixed
     */
    public function getNumeroJokerplus()
    {
        return $this->numero_jokerplus;
    }

    /**
     * @param mixed $numero_jokerplus
     */
    public function setNumeroJokerplus($numero_jokerplus): void
    {
        $this->numero_jokerplus = $numero_jokerplus;
    }

    /**
     * @return mixed
     */
    public function getDevise()
    {
        return $this->devise;
    }

    /**
     * @param mixed $devise
     */
    public function setDevise($devise): void
    {
        $this->devise = $devise;
    }


}
