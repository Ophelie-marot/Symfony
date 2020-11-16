<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PagesController
{
   //Je créée la route/le chemin de ma page
    /**
     * @Route ("/name",name="page_name")
     */
    // Puis la fonction name. puis la fonction request qui est une fonction propre à symf équilvalente à Get en php
    public function name (Request $request)
    {
    //créer une variable pour récupérer la donnée de name dans l'url
        $name = $request->query->get('name');
        var_dump ($name);
        die;
    }
}