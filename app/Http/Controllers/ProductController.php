<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Méthode pour afficher la liste des produits
    public function product_index()
    {
        // Pour récupérer tous les produits avec leurs catégories
        $products = Product::with('category')->get();

        // Retourne la vue 'product-list' avec les produits sélectionnés
        return view('product-list', ['products' => $products]);
    }

    // Méthode pour afficher les détails d'un produit spécifique
    public function show(int $id)
    {
        // Utilisation du modèle Eloquent pour récupérer un produit spécifique par son ID
        $product = Product::with('category')->findOrFail($id);

        // Retourne la vue 'product-details' avec le produit sélectionné
        return view('product-details', ['product' => $product]);
    }
}
