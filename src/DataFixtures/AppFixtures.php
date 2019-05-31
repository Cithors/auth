<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setEmail('test@test.fr');
        $userAdmin->setLastname('test');
        $userAdmin->setName('test');
        $encodedPassword = $this->encoder->encodePassword($userAdmin, 'ok');
        $userAdmin->setPassword($encodedPassword);
        $userAdmin->setBirthday(new \Datetime("today"));
        $userAdmin->setAvatar('https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2F8%2F89%2FPCLinuxOS_logo.svg%2F1024px-PCLinuxOS_logo.svg.png&f=1');
        $userAdmin->setRoles(['ROLE_ADMIN']);
        $manager->persist($userAdmin);
        $manager->flush();
    }
}
