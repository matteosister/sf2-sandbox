<?php
/**
 * User: matteo
 * Date: 25/01/13
 * Time: 0.37
 * Just for fun...
 */

namespace Facile\SandboxBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Facile\SandboxBundle\Entity\Page;

class LoadPageData implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 30; $i++) {
            $p = new Page();
            $p->setTitle('titolo '.$i);
            $p->setContent('Lorem ipsum');
            $p->setPublished($i % 2 == 0);
            $manager->persist($p);
        }
        $manager->flush();
    }
}