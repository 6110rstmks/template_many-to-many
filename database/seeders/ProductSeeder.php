<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'title' => 'title' . $i,
                'content' => 'content' . $i,
                'person_in_charge' => 'person_in_charge' . $i,
            ]);
        }
    }
}
