<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(6,true);
        $slug = Str::substr(Str::lower(preg_replace('/\s+/','-', $title)), 8, -1);
        return [
            'title' => $title,
            'body' => $this->faker->paragraph(100,true),
            'slug' => $slug,
            'img' => 'https://via.placeholder.com/600/5F113B/FFFFFF/?text=Laravel:9.*',
            'created_at' => $this->faker->dateTimeBetween('-1 years'),
			'published_at' => Carbon::now()
        ];
    }
}
