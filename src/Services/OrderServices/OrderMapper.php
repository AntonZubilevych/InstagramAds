<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 04.03.19
 * Time: 17:02
 */

namespace App\Services\OrderServices;


use App\DTO\FullOrderDTO;
use App\Entity\Order;

class OrderMapper
{
    public function fromEntityToDto(Order $status):FullOrderDTO
    {
        $dto = new FullOrderDTO();
        $dto->setName($status->getName());
        $dto->setStatus($status->getStatus());
        $dto->setAmount($status->getAmount());
        $dto->setProduct($status->getProduct());
        $dto->setDescription($status->getDescription());

        return $dto;
    }
}