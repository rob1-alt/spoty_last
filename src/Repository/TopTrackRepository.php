<?php

namespace App\Repository;

use App\Entity\TopTrack;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TopTrack|null find($id, $lockMode = null, $lockVersion = null)
 * @method TopTrack|null findOneBy(array $criteria, array $orderBy = null)
 * @method TopTrack[]    findAll()
 * @method TopTrack[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TopTrackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TopTrack::class);
    }

    /**
     * @return TopTrack[] Returns an array of TopTrack objects based on the user id
     */
    public function findByExampleField($userID)
    {

        return $this->createQueryBuilder('u')
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            ;
    }

    /*
    public function findByExampleField($value)
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
    */

    /*
    public function findOneBySomeField($value): ?TopTrack
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
