<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Comment;
use App\Entity\Product;
use Doctrine\Common\Persistence\ObjectManager;

class ProductFixtures extends BaseFixtures
{
    public function loadData(ObjectManager $manager)
    {
        $this->createMany(Product::class, 10, function(Product $product) use ($manager){
            $product->setName($this->faker->name);
            $product->setAmount($this->faker->randomNumber());
            $product->setDecription($this->faker->text(200));
            $product->setPrice($this->faker->randomNumber());
        });

        $manager->flush();
    }
}
