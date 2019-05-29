<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $liste = $this->getDoctrine()->getManager();
        $tab = $liste->getRepository(User::class)->findAll();
        $tab->setRoles(['ROLE_ADMIN']);
        $manager->flush();
    }
}
