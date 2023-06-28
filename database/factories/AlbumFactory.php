<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'spotify_id' => $this->faker->word,
        'release_date' => $this->faker->word,
        'tipo' => $this->faker->word,
        'market' => $this->faker->word,
        'images' => $this->faker->word,
        'total_tracks' => $this->faker->word,
        'total_tracks' => $this->faker->word,
        'uri' => $this->faker->word,
        'genres' => $this->faker->word,
        'label' => $this->faker->word,
        'popularity' => $this->faker->randomDigitNotNull,
        'productor_id' => $this->faker->randomDigitNotNull,
        'cant_disc' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
