<?php

namespace BlogBundle\Controller;

use BlogBundle\Form\UserType;
use BlogBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\ORM\EntityManagerInterface;

class RegistrationController extends Controller
{

    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $em)
    {

        $user = new User();
        $form = $this->createForm(UserType::class, $user);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
                $user->setPassword($password);

                $em->persist($user);
                $em->flush();

                return $this->redirectToRoute('index');

            }

        return $this->render(
            'BlogBundle:Registration:register.html.twig',
            array('form' => $form->createView())
        );
    }
}