<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class concertGroupFactory extends Factory
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
            'name' => $this->faker->randomElement(['Jojo la frite', 'Les grands musiciens', "J'aime la vie et je le fais savoir", "Les canards vivants", "Les clodos ont trouvé une maison", "Quelle indignité", "Rend l'argent", "Répartition des richesses", "Faillite de Total", "A bas la monarchie"])
        ];
    }
}
