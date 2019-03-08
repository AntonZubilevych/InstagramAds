<?php

namespace App\Repository;

use App\Entity\TemplatesDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TemplatesDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method TemplatesDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method TemplatesDescription[]    findAll()
 * @method TemplatesDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TemplatesDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TemplatesDescription::class);
    }

    // /**
    //  * @return TemplatesDescription[] Returns an array of TemplatesDescription objects
    //  */
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
    public function findOneBySomeField($value): ?TemplatesDescription
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
