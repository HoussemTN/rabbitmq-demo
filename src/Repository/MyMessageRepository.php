<?php

namespace App\Repository;

use App\Entity\MyMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MyMessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method MyMessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method MyMessage[]    findAll()
 * @method MyMessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MyMessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MyMessage::class);
    }

    // /**
    //  * @return MyMessage[] Returns an array of MyMessage objects
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
    public function findOneBySomeField($value): ?MyMessage
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
