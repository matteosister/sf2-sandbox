<?php

namespace Facile\SandboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends BaseController
{
    /**
     * @Route("/home.{_format}", name="homepage",
     *   defaults={"_format"="html"}
     * )
     * @Template()
     */
    public function indexAction()
    {
        $pages = $this->getPageRepository()->findAll();

        return compact('pages');
    }
}
