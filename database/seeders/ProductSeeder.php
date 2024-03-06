<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('products')->insert([
            [
                'name' => 'Mobile',
                'price' => 100.99,
                'description' => 'Description of Mobile',
            ],
            [
                'name' => 'Laptop',
                'price' => 2340.49,
                'description' => 'Description of Laptop',
            ],

            [
                'name' => 'Desktop',
                'price' => 2780.49,
                'description' => 'Description of Desktop',
            ],

            [
                'name' => 'Television',
                'price' => 5260.49,
                'description' => 'Description of Television',
            ],

            [
                'name' => 'Tablets',
                'price' => 8220.49,
                'description' => 'Description of Tablets',
            ],

            [
                'name' => 'Refrigerator',
                'price' => 6720.49,
                'description' => 'Description of Refrigerator',
            ],

            [
                'name' => 'Air Cooler',
                'price' => 3420.49,
                'description' => 'Description of Air Cooler',
            ],

            [
                'name' => 'Air Conditioner',
                'price' => 20.49,
                'description' => 'Description of Air Conditioner',
            ],

            [
                'name' => 'Iphone',
                'price' => 9520.49,
                'description' => 'Description of Iphone',
            ],

            [
                'name' => 'Laptop',
                'price' => 6720.49,
                'description' => 'Description of Laptop',
            ],
            
        ]);
    }
}
