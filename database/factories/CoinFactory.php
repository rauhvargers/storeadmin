<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coin>
 */
class CoinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $words1 = ['Vecā', 'Gudrā', 'Zaļā', 'Skaistā', 'Sarkanā', 'Skaistā', 'Dzeltenā', 'Jaunā', 'Vētrainā', 'Smaidīgā'];
        $words2 = ['pilsēta', 'augstskola', 'zinātne',  'Anniņa', 'māksla', 'mīkla', 'iela', 'jūra', 'pludmale'];
        $title = ucfirst(fake()->randomElement($words1) . ' ' . fake()->randomElement($words2));

        //uses iconv library, might not be installed in your environment!
        $slug = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $title);
        $slug = strtolower(preg_replace("/[^\w]/", "_", $slug));
        return [
            'title' => $title,
            'production_year' => fake()->randomElement([2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022, 2023]),
            'nominal_price' => fake()->randomElement([5, 10, 20, 100]),
            'url' => $slug,
            'price' => fake()->randomFloat(2, 20, 100),
            'available_from' => fake()->datetime(),
            'stock' =>  fake()->randomNumber(4),
            'max_limit' =>  fake()->randomNumber(1),
            'category_id' => fake()->randomElement([1, 2])
        ];
    }
}
