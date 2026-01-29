<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', function () {
    return [
        ['id' => 1, 'name' => 'Product 1', 'price' => 100],
        ['id' => 2, 'name' => 'Product 2', 'price' => 200],
    ];
});

Route::get('/orders', function () {
    return [
        ['id' => 1, 'product' => 'Product 1', 'status' => 'new'],
        ['id' => 2, 'product' => 'Product 2', 'status' => 'paid'],
    ];
});
