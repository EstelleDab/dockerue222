<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;
use App\Entity\Category;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $article = new Article();
        $article->setTitle("Distinguer le Vrai du Faux");
        $article->setContent("Déjà commencer par ne pas laisser le stress envoyer des messages du genre 'trouve la bonne réponse, il faut que tu aies la bonne réponse!'");
        $article->setCategory($Category);
        $manager->persist($article);
    

        $article = new Article();
        $article->setTitle("Comment le ciel m'est tombé sur la tête");
        $article->setContent( "et ca fait mal!");
        $article->setCategory($Category);
        $manager->persist($article);
        
        $article = new Article();
        $article->setTitle("La symbolique du nombre 7");
        $article->setContent("Il paraîtrait que ce nombre symboliserait la perfection divine... pour moi le 7 de 7/20 certes times avec divin mais symbolise plutôt simplement un gros foirage... et pas sure que la personne responsable ait quelque chose de divin pour le coup!");
        $article->setCategory($Category);
        $manager->persist($article);

        $article = new Article();
        $article->setTitle("Bien choisir son orientation");
        $article->setContent("...et peut etre revoir ses ambitions à la baisse!");
        $article->setCategory($Category);
        $manager->persist($article);

        $article = new Article();
        $article->setTitle("Il faut cultiver notre jardin");
        $article->setContent("Peut être faut il prendre ces mots au pied de la lettre et se contenter d'aller faire pousser des tomates... ca fait moins mal à la tete au final.");
        $article->setCategory($Category);
        $manager->persist($article);

        $manager->flush();
    }
}
