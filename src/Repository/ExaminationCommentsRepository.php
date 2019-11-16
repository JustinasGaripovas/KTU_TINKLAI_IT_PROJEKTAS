<?php

namespace App\Repository;

use App\Entity\ExaminationComments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ExaminationComments|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExaminationComments|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExaminationComments[]    findAll()
 * @method ExaminationComments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExaminationCommentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExaminationComments::class);
    }

    // /**
    //  * @return ExaminationComments[] Returns an array of ExaminationComments objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ExaminationComments
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
