<?php

namespace BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render("::base.html.twig");
    }

    public function blogViewAction($id)
    {
        $em = $this->getDoctrine();
        $blogRepository = $em->getRepository("BlogBundle:Blog");

        if($blog = $blogRepository->find($id)) {

            return $this->render("BlogBundle:Blog:view.html.twig", [
                'blog' => $blog
            ]);
            
        } else {

            return $this->redirectToRoute('index');
        }

    }

    public function blogViewAllAction()
    {
        $em = $this->getDoctrine();
        $blogRepository = $em->getRepository("BlogBundle:Blog");

        if($blogs = $blogRepository->findAll()) {

            return $this->render("BlogBundle:Blog:viewAll.html.twig", [
                'blogs' => $blogs
            ]);

        } else {

            return $this->redirectToRoute('index');
        }

    }

}