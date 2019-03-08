<?php

namespace App\Repository;

use App\Entity\TemplatesComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TemplatesComment|null find($id, $lockMode = null, $lockVersion = null)
 * @method TemplatesComment|null findOneBy(array $criteria, array $orderBy = null)
 * @method TemplatesComment[]    findAll()
 * @method TemplatesComment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TemplatesCommentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TemplatesComment::class);
    }

    // /**
    //  * @return TemplatesComment[] Returns an array of TemplatesComment objects
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
    public function findOneBySomeField($value): ?TemplatesComment
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
