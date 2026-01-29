<?php

namespace App\Http\Controllers;

class OrderController extends Controller
{
    public function index()
    {
        return [
            ['id' => 1, 'product' => 'Product 1', 'status' => 'new'],
            ['id' => 2, 'product' => 'Product 2', 'status' => 'paid'],
        ];
    }
}
