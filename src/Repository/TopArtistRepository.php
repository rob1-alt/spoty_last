<?php

namespace App\Repository;

use App\Entity\TopArtist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TopArtist|null find($id, $lockMode = null, $lockVersion = null)
 * @method TopArtist|null findOneBy(array $criteria, array $orderBy = null)
 * @method TopArtist[]    findAll()
 * @method TopArtist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TopArtistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TopArtist::class);
    }



     /**
      * @return TopArtist[] Returns an array of TopArtist objects
      */
    public function findByExampleField($userID)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?TopArtist
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
