<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        return [
            ['id' => 1, 'name' => 'Product 1', 'price' => 100],
            ['id' => 2, 'name' => 'Product 2', 'price' => 200],
        ];
    }
}
