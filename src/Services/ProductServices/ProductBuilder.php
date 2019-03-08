<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 01.03.19
 * Time: 21:08
 */

namespace App\Services\ProductServices;


use App\DTO\ProductDTO;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;

class ProductBuilder
{
    private $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    public function set(ProductDTO $dto ):?Product
    {
        $product = $this->build(new Product(),$dto);
        $this->manager->persist($product);
        $this->manager->flush();
        return $product;
    }

    public function edit(Product $product , ProductDTO $dto):?Product
    {
        $this->build($product,$dto);
        $this->manager->flush();
        return $product;
    }

    private function build(Product $product,ProductDTO $dto):?Product
    {
        $product->setName($dto->getName());
        $product->setDecription($dto->getDescription());
        $product->setAmount($dto->getAmount());
        $product->setPrice($dto->getPrice());
        $product->setPixel($dto->getPixel());
        return $product;
    }
}