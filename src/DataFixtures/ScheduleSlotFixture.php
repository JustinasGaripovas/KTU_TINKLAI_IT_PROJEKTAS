<?php

namespace App\DataFixtures;

use App\Entity\ScheduelSlot;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ScheduleSlotFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 20 products! Bam!
        for ($i = 0; $i < 23; $i+=2) {

            $product = new ScheduelSlot();

            $iLabel = ($i>=10) ? $i : "0${i}";

            $i2 = $i+1;
            $i2Label = ($i2>=10) ? $i2 : "0${i2}";

            $product->setStartTime(new \DateTime("2019-09-09 ${iLabel}:00"));
            $product->setEndTime(new \DateTime("2019-09-09 ${i2Label}:00"));

            $manager->persist($product);
        }
        $manager->flush();
    }
}
