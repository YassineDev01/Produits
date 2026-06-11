<?php

namespace App\Tests;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProduitControllerTest extends WebTestCase
{
    public function testSomething(): void
    {
        // Création d'un client pour simuler un utilisateur
        $client = static::createClient();

        // Récupération de l'EntityManager Doctrine
        $entityManager = static::getContainer()
            ->get('doctrine')
            ->getManager();

        // Recherche d'une catégorie existante en base de données
        $category = $entityManager->getRepository(Category::class)->find(1);

        // Vérifie que la catégorie existe
        $this->assertNotNull($category, "Catégorie non trouvée");

        // Accès à la page de création d'un produit
        $crawler = $client->request('GET', '/product/new');

        // Récupération du formulaire grâce au bouton "Save"
        $form = $crawler->selectButton('Save')->form([

            // Remplissage du champ nom du produit
            'product[name]' => 'Mon Produit',

            // Sélection de la catégorie trouvée précédemment
            'product[category]' => $category->getId(),
        ]);

        // Envoi du formulaire
        $client->submit($form);

        // Vérifie qu'après l'envoi du formulaire,
        // l'application effectue une redirection
        $this->assertResponseRedirects();
    }
}
