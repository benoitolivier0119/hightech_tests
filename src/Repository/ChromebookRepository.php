<?php

namespace App\Repository;

use App\Entity\Chromebook;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Chromebook|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chromebook|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chromebook[]    findAll()
 * @method Chromebook[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChromebookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chromebook::class);
    }

    // /**
    //  * @return Chromebook[] Returns an array of Chromebook objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Chromebook
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
