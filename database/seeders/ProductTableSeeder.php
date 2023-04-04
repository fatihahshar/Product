<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'productname'=>'Coca Cola',
            'productdesc' =>'Nothing refreshes like the real thing.',
            'quantity' => 7,
        ]);
    }
}
