<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // Importation de la façade DB pour interagir avec la base de données
use Illuminate\Http\Request; // Importation de la classe Request pour gérer les requêtes HTTP

class ProductController extends Controller
{
    // Méthode pour afficher la liste des produits
    public function product_index()
    {
        // Exécution d'une requête SQL pour sélectionner tous les produits dans la table 'products'
        $products = DB::select('select * from products');

        // Retourne la vue 'product-list' avec les produits sélectionnés
        return view('product-list', ['products' => $products]);
    }

    // Méthode pour afficher les détails d'un produit spécifique
    public function show(int $id)
    {
        // Exécution d'une requête SQL pour sélectionner un produit spécifique par son ID
        $product = DB::select('select * from products where id = ?', [$id]);

        // Retourne la vue 'product-details' avec le produit sélectionné
        // Accède au premier (et unique) résultat de la requête avec $product[0]
        return view('product-details', ['product' => $product[0]]);
    }
}
