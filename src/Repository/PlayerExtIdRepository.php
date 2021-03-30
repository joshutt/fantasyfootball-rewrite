<?php

namespace App\Repository;

use App\Entity\PlayerExtId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PlayerExtId|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerExtId|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerExtId[]    findAll()
 * @method PlayerExtId[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerExtIdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlayerExtId::class);
    }

    // /**
    //  * @return PlayerExtId[] Returns an array of PlayerExtId objects
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
    public function findOneBySomeField($value): ?PlayerExtId
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
