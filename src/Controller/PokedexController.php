<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PokedexController extends AbstractController
{
    #[Route('/pokedex', name: 'pokedex')]
    public function number(): Response
    {
        $pokemon = [
            ['name'=> 'bulbizarre',
            'image'=>'bulbizare.png'],
            
        ];
        return $this->render('pokedex/index.html.twig', [
            'controller_name' => 'PokedexController',
            'pokemons' => $pokemon,
        ]);
    }
}
