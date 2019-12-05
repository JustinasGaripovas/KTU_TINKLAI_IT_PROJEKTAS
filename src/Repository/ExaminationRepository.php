<?php

namespace App\Repository;

use App\Entity\Examination;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\NonUniqueResultException;

/**
 * @method Examination|null find($id, $lockMode = null, $lockVersion = null)
 * @method Examination|null findOneBy(array $criteria, array $orderBy = null)
 * @method Examination[]    findAll()
 * @method Examination[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExaminationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Examination::class);
    }

    public function findIfIsNotTaken($date, $hour): bool
    {
        $result = null;

        try {
            $result = $this->createQueryBuilder('e')
                ->andWhere('e.date = :date')
                ->setParameter('date', $date)
                ->andWhere('e.hours = :hour')
                ->setParameter('hour', $hour)
                ->getQuery()
                ->getOneOrNullResult();
        } catch (NonUniqueResultException $e) {
            return null;
        }


        return $result == null;
    }


    /*
    public function findOneBySomeField($value): ?Examination
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findAllVisitsForDoctor($value)
    {
        return $this->createQueryBuilder('e')
            ->setParameter('val', $value)
            ->innerJoin('e.employee', 'employee')
            ->andWhere('employee.id = :val')
            ->getQuery()
            ->getResult();
    }

    public function findAllVisitsForUser($value)
    {
        return $this->createQueryBuilder('e')
            ->setParameter('val', $value)
            ->innerJoin('e.user', 'user')
            ->andWhere('user.id = :val')
            ->getQuery()
            ->getResult();
    }
}
