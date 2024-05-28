<?php

namespace App\DataFixtures;

use App\Entity\Loyalty;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LoyaltyFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $loyalty = new Loyalty();
       $loyalty->setFirstName ("First Name");
       $loyalty->setLastName('Last Name ');
       $loyalty->setEmail('email');
       $manager->persist($loyalty);

       $manager->flush();
    }
}
