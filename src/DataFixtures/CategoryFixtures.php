<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {   
        // $product = new Product();
        // $manager->persist($product);
        $Category=__construct();
        $Category->setName("ciel");
        $Category->addArticle("Distinguer le Vrai du Faux");
        $Category->addArticle("Comment le ciel m'est tombé sur la tête");
        $Category->addArticle("La symbolique du nombre 7");
  

        $Category = __construct();
        $Category->setName("reconversion");
        $Category->addArticle( "Bien choisir son orientation");
        $Category->addArticle( "Il faut cultiver notre jardin");
        $manager->flush();
    }
}
