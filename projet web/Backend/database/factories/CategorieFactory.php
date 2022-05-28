<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\categorie ;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\categorie>
 */
class CategorieFactory extends Factory
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
            'parent_id' => $this->faker->numberBetween(1,100),
            'slug' => $this->faker->sentence(1) ,
            'order' => $this->faker->numberBetween(0, 50000),
            
        ];
    }
}
