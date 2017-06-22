<?php


namespace BlogBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use BlogBundle\Entity\User;

class DefaultUsers implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $user = new User();
        $user->setUsername('peter');
        $user->setEmail('peter@example.com');
        $user->setIsActive(true);

        $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword('pen', $user->getSalt());
        $user->setPassword($password);

        $manager->persist($user);
        $manager->flush();
/*-----*/
        $user = new User();
        $user->setUsername('admin');
        $user->setEmail('admin@example.com');
        $user->setIsActive(true);
        $user->setRoles(array('ROLE_ADMIN'));
        $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword('admin', $user->getSalt());
        $user->setPassword($password);

        $manager->persist($user);
        $manager->flush();



    }
}