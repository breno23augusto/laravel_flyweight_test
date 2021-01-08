<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Product;
use App\Models\Shopping;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShoppingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shopping::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $randomProduct = Product::inRandomOrder()->first();

        return [
            'client_id' => 40/*Client::inRandomOrder()->first()->id*/,
            'product_id' => $randomProduct->id,
            'price' => $randomProduct->price,
        ];
    }
}
