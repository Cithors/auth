<?php

namespace App\Repository;

use App\Entity\MissingList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MissingList|null find($id, $lockMode = null, $lockVersion = null)
 * @method MissingList|null findOneBy(array $criteria, array $orderBy = null)
 * @method MissingList[]    findAll()
 * @method MissingList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MissingListRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MissingList::class);
    }

    // /**
    //  * @return MissingList[] Returns an array of MissingList objects
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
    public function findOneBySomeField($value): ?MissingList
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
