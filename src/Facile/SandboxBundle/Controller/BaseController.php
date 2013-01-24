<?php
/**
 * User: matteo
 * Date: 25/01/13
 * Time: 0.46
 * Just for fun...
 */

namespace Facile\SandboxBundle\Controller;

use Doctrine\ORM\EntityManager;
use Facile\SandboxBundle\Entity\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
    /**
     * @return EntityManager
     */
    protected function getEM()
    {
        return $this->get('doctrine.orm.entity_manager');
    }

    /**
     * @return PageRepository
     */
    protected function getPageRepository()
    {
        return $this->getEM()->getRepository('Facile\SandboxBundle\Entity\Page');
    }
}