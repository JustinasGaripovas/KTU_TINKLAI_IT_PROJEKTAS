<?php

namespace App\Repository;

use App\Entity\ScheduelSlot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ScheduelSlot|null find($id, $lockMode = null, $lockVersion = null)
 * @method ScheduelSlot|null findOneBy(array $criteria, array $orderBy = null)
 * @method ScheduelSlot[]    findAll()
 * @method ScheduelSlot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScheduelSlotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ScheduelSlot::class);
    }

    // /**
    //  * @return ScheduelSlot[] Returns an array of ScheduelSlot objects
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
    public function findOneBySomeField($value): ?ScheduelSlot
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
