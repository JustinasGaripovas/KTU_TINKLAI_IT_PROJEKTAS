<?php

namespace App\Repository;

use App\Entity\Scheduel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Scheduel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Scheduel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Scheduel[]    findAll()
 * @method Scheduel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScheduelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Scheduel::class);
    }

    // /**
    //  * @return Scheduel[] Returns an array of Scheduel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Scheduel
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
