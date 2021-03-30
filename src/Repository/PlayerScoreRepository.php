<?php

namespace App\Repository;

use App\Entity\PlayerScore;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PlayerScore|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerScore|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerScore[]    findAll()
 * @method PlayerScore[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerScoreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlayerScore::class);
    }

    // /**
    //  * @return PlayerScore[] Returns an array of PlayerScore objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PlayerScore
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
