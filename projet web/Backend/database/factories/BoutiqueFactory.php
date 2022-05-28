<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\boutique ;
use Faker\Generator as Faker ;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\boutique>
 */
class BoutiqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nom' => $this->faker->sentence(2),
            'is_active' => $this->faker->boolean(true,false) ,
            'description' => $this->faker->sentence(10),
        ];
    }
}
