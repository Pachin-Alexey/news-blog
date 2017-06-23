<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{
    public function loginAction()
    {
        $helper = $this->get('security.authentication_utils');

        return $this->render('BlogBundle:Security:login.html.twig', array(
            'last_username' => $helper->getLastUsername(),
            'error'         => $helper->getLastAuthenticationError(),
        ));
    }

    public function adminAction()
    {
        return $this->render('BlogBundle:Security:admin-layout.html.twig');
    }

    public function blogAction()
    {
        $blogs = $this->getDoctrine()->getRepository("BlogBundle:Blog")->findAll();
        return $this->render('BlogBundle:Admin:blog-view.html.twig', [
            'blogs' => $blogs
        ]);
    }

    public function blogEditAction($id)
    {
        return new Response($id);
    }
}