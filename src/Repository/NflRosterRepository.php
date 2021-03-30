<?php

namespace App\Repository;

use App\Entity\NflRoster;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NflRoster|null find($id, $lockMode = null, $lockVersion = null)
 * @method NflRoster|null findOneBy(array $criteria, array $orderBy = null)
 * @method NflRoster[]    findAll()
 * @method NflRoster[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NflRosterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NflRoster::class);
    }

    // /**
    //  * @return NflRoster[] Returns an array of NflRoster objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NflRoster
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
