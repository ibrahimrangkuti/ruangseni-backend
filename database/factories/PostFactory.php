<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(mt_rand(2, 8));

        return [
            'user_id' => mt_rand(1, 5),
            'category_id' => mt_rand(1, 5),
            'event_id' => Arr::random([null, 1, 2]),
            'slug' => Str::slug($title),
            'title' => $title,
            'body' => collect($this->faker->paragraph(mt_rand(5, 10)))->map(fn($p) => "<p>$p</p>")->implode(''),
            'img_url' => Arr::random(['images/img_1.png', 'images/img_2.jpg', 'images/img_3.jpg', 'images/img_4.jpg', 'images/img_5.jpeg', 'images/img_6.jpg', 'images/img_7.jpg']),
            'is_join_event' => Arr::random([true, false]),
            'status' => '1',
            'like_count' => null,
            'vote_count' => null
        ];
    }
}
