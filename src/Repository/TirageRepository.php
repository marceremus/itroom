<?php

namespace App\Repository;

use App\Entity\Tirage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tirage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tirage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tirage[]    findAll()
 * @method Tirage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TirageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tirage::class);
    }

    // /**
    //  * @return Tirage[] Returns an array of Tirage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tirage
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findFirst($limit)
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.date_de_tirage', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult()
            ;
    }

    public function getDateTirage()
    {
        return $this->createQueryBuilder('t')
            ->select('t.date_de_tirage')
            ->orderBy('t.date_de_tirage', 'DESC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function getCombinaisonGagnante($dateTirage)
    {
        return $this->createQueryBuilder('t')
            ->select('t.combinaison_gagnante_en_ordre_croissant')
            ->andWhere('t.date_de_tirage = :dateTirage')
            ->setParameter("dateTirage", $dateTirage)
            ->getQuery()
            ->getResult()
            ;
    }
}
