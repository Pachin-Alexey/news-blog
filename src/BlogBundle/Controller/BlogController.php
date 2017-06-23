<?php

namespace BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

    public function blogViewAllAction(Request $request)
    {
        $em = $this->getDoctrine();
        $blogRepository = $em->getRepository("BlogBundle:Blog");

        $totalBlog = $blogRepository->findAllBlogCount();

        $page = $request->query->get("page") ? $request->query->get("page") : 1;
        $blogs = $blogRepository->findBlog(["page" => $page]);

            $pagination = [
                "total" => array_shift($totalBlog),
                "max_result" => 5,
                "page"  => $page,
                "url"  => "blog_viewAll"

            ];

            return $this->render("BlogBundle:Blog:viewAll.html.twig", [
                'blogs' => $blogs,
                'pagination' => $pagination
            ]);

    }

}