<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->name();

        //uses iconv library, might not be installed in your environment!
        $slug = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $title);
        $slug = strtolower(preg_replace("/[^\w]/", "_", $slug));
        return [
            'title' => $title,
            'url' => $slug
        ];
    }
}
