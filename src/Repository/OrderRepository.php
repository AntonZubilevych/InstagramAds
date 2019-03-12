<?php

namespace App\Repository;

use App\DTO\FilterOrder;
use App\Entity\Order;
use App\Entity\Status;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Order|null find($id, $lockMode = null, $lockVersion = null)
 * @method Order|null findOneBy(array $criteria, array $orderBy = null)
 * @method Order[]    findAll()
 * @method Order[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Order::class);
    }

    public function findAllJoined(FilterOrder $filterOrder = null)
    {

        $query =  $this->createQueryBuilder('o')
            ->leftJoin('o.status', 's')
            ->leftJoin('o.product', 'p')
            ->leftJoin('o.client', 'c')
            ->addSelect('p')
            ->addSelect('s')
            ->addSelect('c')
            ->orderBy('o.updatedAt', 'DESC');

        if($filterOrder && $filterOrder->getStatus()){
            $query
                ->andWhere('o.status = :val' )
                ->setParameter('val', $filterOrder->getStatus());
        }

        if($filterOrder && $filterOrder->getPhone()){
            $query
                ->andWhere('c.phone Like :phone')
                ->setParameter('phone', '%' . $filterOrder->getPhone() . '%');
        }


        return $query->getQuery()->getResult();

    }


    // /**
    //  * @return Order[] Returns an array of Order objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Order
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
