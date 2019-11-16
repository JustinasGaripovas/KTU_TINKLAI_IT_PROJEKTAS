<?php

namespace App\Repository;

use App\Entity\ExaminationComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ExaminationComment|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExaminationComment|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExaminationComment[]    findAll()
 * @method ExaminationComment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExaminationCommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExaminationComment::class);
    }

    // /**
    //  * @return ExaminationComment[] Returns an array of ExaminationComment objects
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
    public function findOneBySomeField($value): ?ExaminationComment
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
