<?php

namespace App\DataFixtures;

use App\Entity\Status;
use Doctrine\Common\Persistence\ObjectManager;

class StatusFixture  extends BaseFixtures
{
    protected function loadData(ObjectManager $manager)
    {
        $this->createMany(Status::class, 3, function(Status $product) use ($manager){
            $product->setName($this->faker->word);
        });

        $manager->flush();
    }
}
