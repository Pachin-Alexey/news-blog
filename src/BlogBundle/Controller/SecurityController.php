<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Blog;
use BlogBundle\Form\FormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

    public function blogAction(Request $request)
    {

        $blogRepository = $this->getDoctrine()->getRepository('BlogBundle:Blog');


        $page = $request->query->get("page") ? $request->query->get("page") : 1;
        $blogs = $blogRepository->findBlog(["page" => $page]);

        $totalBlog = $blogRepository->findAllBlogCount();

        $pagination = [
            "total" => array_shift($totalBlog),
            "max_result" => 5,
            "page"  => $page,
            "url"  => "admin_blog"

        ];

        return $this->render('BlogBundle:Admin:blog-view.html.twig', [
            'blogs' => $blogs,
            'pagination' => $pagination
        ]);
    }

    public function blogEditAction(Request $request, $id)
    {

        $em = $this->getDoctrine();
        $blog = $em->getRepository('BlogBundle:Blog')->find($id);

        if(!$blog) {
            throw $this->createAccessDeniedException('You cannot access this page!');
        }

        $form = $this->createForm( FormType::class, $blog);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($blog);
            $em->flush();

            return $this->redirectToRoute('admin_blog');
        }

        return $this->render('BlogBundle:Admin:blog-edit.html.twig', [
            'form_edit_blog' => $form->createView()
        ]);

    }

    public function blogAddAction(Request $request)
    {
        $blog = new Blog();
        $form = $this->createForm( FormType::class, $blog);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($blog);
            $em->flush();

            return $this->redirectToRoute('admin_blog');
        }



        return $this->render('BlogBundle:Admin:blog-add.html.twig', [
            'form_blog_add' => $form->createView()
        ]);
    }


}