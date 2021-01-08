<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class ShoppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $randomProduct = Product::inRandomOrder()->first();
        
        DB::table('shopping')->insert([
            'client_id' => 40/*Client::inRandomOrder()->first()->id*/,
            'product_id' => $randomProduct->id,
            'price' => $randomProduct->price,
        ]);
    }
}
