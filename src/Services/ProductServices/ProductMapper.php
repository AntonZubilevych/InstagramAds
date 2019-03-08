<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 02.03.19
 * Time: 20:50
 */

namespace App\Services\ProductServices;

use App\DTO\ProductDTO;
use App\Entity\Product;

class ProductMapper
{
    public function fromEntityToDto(Product $product):ProductDTO
    {
        $dto = new ProductDTO();
        $dto->setName($product->getName());
        $dto->setPrice($product->getPrice());
        $dto->setAmount($product->getAmount());
        $dto->setPrice($product->getPrice());
        $dto->setDescription($product->getDecription());
        $dto->setPixel($product->getPixel());

        return $dto;
    }
}