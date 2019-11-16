<?php

namespace App\Repository;

use App\Entity\Studentas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Studentas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Studentas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Studentas[]    findAll()
 * @method Studentas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudentasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Studentas::class);
    }

    // /**
    //  * @return Studentas[] Returns an array of Studentas objects
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
    public function findOneBySomeField($value): ?Studentas
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
