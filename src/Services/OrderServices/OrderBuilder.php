<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 01.03.19
 * Time: 21:08
 */

namespace App\Services\OrderServices;


use App\DTO\FullOrderDTO;
use App\Entity\Client;
use App\Entity\Order;
use App\Entity\Status;
use App\Entity\Template;
use Doctrine\ORM\EntityManagerInterface;

class OrderBuilder
{
    private $manager;
    private $startStatus;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
        $this->startStatus = $this->manager
            ->getRepository(Status::class)
            ->findOneBy(['name'=>'start']);

    }

    public function setManually(FullOrderDTO $dto ):?Order
    {
        $order = $this->build(new Order(),$dto);
        $this->manager->persist($order);
        $this->manager->flush();
        return $order;
    }

    public function setFromLanding(string $clientName , string $clientPhone , Template $template)
    {
        $order =  new Order();
        $order->setClient($this->getClient($clientName,$clientPhone ));
        $order->setName('Landing'.time());
        $order->setProduct($template->getProduct());
        $order->setAmount(1);
        $order->setDescription($order->getName());
        $order->setStatus($this->startStatus);
        $order->setSum((int)$order->getProduct()->getPrice() * (int)$order->getAmount() );
        $this->manager->persist($order);
        $this->manager->flush();

        return $order;

    }

    public function edit(Order $order , FullOrderDTO $dto):?Order
    {
        $this->build($order,$dto);
        $this->manager->flush();
        return $order;
    }

    private function build(Order $order,FullOrderDTO $dto):?Order
    {
        $order->setName($dto->getName());
        $order->setDescription($dto->getDescription());
        $order->setAmount($dto->getAmount());
        $order->setProduct($dto->getProduct());
        $order->setStatus($dto->getStatus());
        $order->setSum((int)$order->getProduct()->getPrice() * (int)$order->getAmount() );
        return $order;
    }

    private function getClient(string $name , string $phone):Client
    {
        if(!$this->manager->getRepository(Client::class)->findOneBy(['phone'=> $phone]))
        {
            $client = new Client();
            $client->setName($name);
            $client->setPhone($phone);
            $this->manager->persist($client);
            $this->manager->flush();
            return $client;
        }

        return $this->manager->getRepository(Client::class)->findOneBy(['phone'=> $phone]);

    }
}