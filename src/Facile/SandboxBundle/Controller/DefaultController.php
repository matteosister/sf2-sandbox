<?php

namespace Facile\SandboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends BaseController
{
    /**
     * @Route("/", name="homepage")
     * @Template
     */
    public function homepageAction()
    {
        return array();
    }

    /**
     * @Route("/list.{_format}", name="lista_pagine",
     *   defaults={"_format"="html"}
     * )
     * @Template()
     */
    public function listAction()
    {
        $pages = $this->getPageRepository()->findAll();

        return compact('pages');
    }
}
