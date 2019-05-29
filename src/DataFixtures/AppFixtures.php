<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setEmail('test@test.fr');
        $userAdmin->setNom('test');
        $userAdmin->setPrenom('test');
        $userAdmin->setPassword('ok');
        $userAdmin->setDateNaissance(new \Datetime("today"));
        $userAdmin->setAvatar('https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2F8%2F89%2FPCLinuxOS_logo.svg%2F1024px-PCLinuxOS_logo.svg.png&f=1');
        $userAdmin->setRoles(['ROLE_ADMIN']);
        $manager->persist($userAdmin);
        $manager->flush();

        /*$liste = $this->getDoctrine()->getManager();
        $tab = $liste->getRepository(User::class)->findAll();
        $tab->setRoles(['ROLE_ADMIN']);
        $manager->flush();*/
    }
}
