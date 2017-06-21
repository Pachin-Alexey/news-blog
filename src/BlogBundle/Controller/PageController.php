<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function signinAction()
    {
        return $this->render("BlogBundle:Page:signin.html.twig");
    }
}