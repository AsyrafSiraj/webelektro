<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Pengumuman;


class PengumumanFactory extends Factory
{
    protected $model = Pengumuman::class;
    /**
     * Define the model's default state.
     *
     * @var string
     * @return array
     */
    
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(5,15)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraph(mt_rand(4,7)),
            'category_id' => 4
        ];
    }
}
