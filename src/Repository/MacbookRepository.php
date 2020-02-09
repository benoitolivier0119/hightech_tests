<?php

namespace App\Repository;

use App\Entity\Macbook;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Macbook|null find($id, $lockMode = null, $lockVersion = null)
 * @method Macbook|null findOneBy(array $criteria, array $orderBy = null)
 * @method Macbook[]    findAll()
 * @method Macbook[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MacbookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Macbook::class);
    }

    // /**
    //  * @return Macbook[] Returns an array of Macbook objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Macbook
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
