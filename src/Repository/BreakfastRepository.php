<?php

namespace App\Repository;

use App\Entity\Breakfast;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Breakfast|null find($id, $lockMode = null, $lockVersion = null)
 * @method Breakfast|null findOneBy(array $criteria, array $orderBy = null)
 * @method Breakfast[]    findAll()
 * @method Breakfast[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BreakfastRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Breakfast::class);
    }

    // /**
    //  * @return Breakfast[] Returns an array of Breakfast objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function count()
    {
        return $db = $this->createQueryBuilder('breakfast');
        $db
            ->addSelect('COUNT(*) as count')
            ->addSelect('id_user')
            ->groupBy('breakfast.id_user');
        $result = $db->getQuery()->getResult();
    }
    */

    /*
    public function findOneBySomeField($value): ?Breakfast
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
