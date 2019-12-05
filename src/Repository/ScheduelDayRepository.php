<?php

namespace App\Repository;

use App\Entity\ScheduelDay;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ScheduelDay|null find($id, $lockMode = null, $lockVersion = null)
 * @method ScheduelDay|null findOneBy(array $criteria, array $orderBy = null)
 * @method ScheduelDay[]    findAll()
 * @method ScheduelDay[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScheduelDayRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ScheduelDay::class);
    }

    // /**
    //  * @return ScheduelDay[] Returns an array of ScheduelDay objects
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
    public function findOneBySomeField($value): ?ScheduelDay
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
