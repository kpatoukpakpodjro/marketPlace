<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\produit ;
use Faker\Generator as Faker ;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {
        return [
            'nom' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(10),
            'prix' => $this->faker->numberBetween(100, 5000),
        ];
    }
}
