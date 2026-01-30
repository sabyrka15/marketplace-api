<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Order::create([
            'product' => 'Product 1',
            'status' => 'new',
        ]);

        \App\Models\Order::create([
            'product' => 'Product 2',
            'status' => 'paid',
        ]);
    }
}
