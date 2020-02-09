<?php

namespace App\Repository;

use App\Entity\Portable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Portable|null find($id, $lockMode = null, $lockVersion = null)
 * @method Portable|null findOneBy(array $criteria, array $orderBy = null)
 * @method Portable[]    findAll()
 * @method Portable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PortableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Portable::class);
    }

    // /**
    //  * @return Portable[] Returns an array of Portable objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Portable
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
