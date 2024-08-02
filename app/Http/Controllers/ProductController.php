<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_index()
    {

        $products = DB::select('select * from products');

        return view('product-list', ['products' => $products]);
    }

    public function show(int $id)
    {
        $product = DB::select('select * from products where id = ?', [$id]);

        return view('product-details', ['product' => $product[0]]);
    }
}
