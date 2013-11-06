<?php
namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MyController extends Controller
{
    public function firstAction($name)
    {
        return new Response("Simple Response Object");
    }

    public function secondAction($name)
    {
        return $this->render("AcmeDemoBundle:My:simple.html.twig");
    }

    public function thirdAction($name)
    {
        return $this->render("AcmeDemoBundle:My:withBaseExtending.html.twig");
    }
}